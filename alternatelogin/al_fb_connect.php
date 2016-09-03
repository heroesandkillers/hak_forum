<?php
/*
   COPYRIGHT 2009 Michael J Goonawardena

   This file is part of ConSof Alternate Login.

    ConSof Alternate Login is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    ConSof Alternate Login is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with ConSof Alternate Login.  If not, see <http://www.gnu.org/licenses/>.*/


// Basic setup of phpBB variables.
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

// Load include files.
include($phpbb_root_path . 'common.' . $phpEx);
include_once($phpbb_root_path . 'includes/functions_user.' . $phpEx);
include_once($phpbb_root_path . 'includes/functions_alternatelogin.' . $phpEx);   // Custom Alternate Login functions.

// Set up a new user session.
$user->session_begin();
$auth->acl($user->data);
$user->setup('ucp');
$user->add_lang('mods/alternatelogin');   // Global Alternate Login language file.
$user->add_lang('mods/info_ucp_alternatelogin');


// Make sure that Facebook login is enabled for this site.
if($config['al_fb_login'] == 0)
{
   // Inform the user that this feature is unavailable
   trigger_error(sprintf($user->lang['AL_LOGIN_UNAVAILABLE'], $user->lang['FACEBOOK']));
}


$access_token = get_fb_access_token();

//echo 'token:' . print_r($token_url);
$graph_url = "https://graph.facebook.com/me?" . $access_token;


$fb_user = json_decode(get_fb_data($graph_url));

//echo("Hello " . $fb_user->name);
//print_r($fb_user);
// Check to see if we have a valid Facebook user.
if(!$fb_user)
{
    //echo 'error';
   // Inform the user that we couldn't get their Facebook Id.
   trigger_error(sprintf($user->lang['AL_CONNECT_FAILURE'], $user->lang['FACEBOOK']));
}

// Select the user_id from the Alternate Login user data table which has the same Facebook Id.
$sql_array = array(
    'SELECT'    => 'user_id',
    'FROM'      => array(
        USERS_TABLE => 'u',
        ),
    'WHERE'     => 'al_fb_id=' . $fb_user->id,
);

$sql = $db->sql_build_query('SELECT', $sql_array);

// Execute the query.
$result = $db->sql_query($sql);

// Retrieve the row data.
$row = $db->sql_fetchrow($result);

// Free up the result handle from the query.
$db->sql_freeresult($result);

// Check to see if we found a user_id with the associated Facebook Id.
if ($row)   // User is registered already, let's log him in!
{
   // Check for user ban.
   if($user->check_ban($row['user_id']))
   {
      trigger_error($user->lang['BAN_TRIGGERED_BY_USER']);
   }

   // Log user in.
   $result = $user->session_create($row['user_id'], 0, 0, 1);

   // Alert user if we failed to log them in.
   if(!$result)
   {
      trigger_error($user->lang['LOGIN_FAILURE']);
   }

        // Store the access token for use with this session.
        $sql_array = array(
            'session_fb_access_token'   => $access_token,
        );

        $sql = "UPDATE " . SESSIONS_TABLE . " SET " . $db->sql_build_array('UPDATE', $sql_array) . " WHERE session_user_id=" . $user->data['user_id'];

        $db->sql_query($sql);
        $data = array();
        // Update the stored data such as profile and signatures.  Avatar is a dynamic field and doesn't require changing.
        
        if($user->data['al_fb_profile_sync'])
        {
            
            $graph_url = "https://graph.facebook.com/me?" . $access_token;

            $fb_user = json_decode(get_fb_data($graph_url));
            
            $data['user_website']                    = (!$fb_user->website) ? '' : $fb_user->website;
            $data['user_from']                   = (!$fb_user->location->name) ? '' : $fb_user->location->name;
            $data['user_occ']                 = (!$fb_user->work[0]->employer->name) ? '' : $fb_user->work[0]->employer->name;
            $bday = explode('/', $fb_user->birthday);
            $data['user_birthday']              = sprintf('%2d-%2d-%4d', $bday[1], $bday[0], $bday[2]);

        }
        
        if($user->data['al_fb_status_sync'])
        {
            include($phpbb_root_path . 'includes/message_parser.' . $phpEx);
            $graph_url = "https://graph.facebook.com/me/statuses?" . $access_token;

            $fb_user = json_decode(get_fb_data($graph_url));

            $signature = $fb_user->data[0]->message;
            
            $enable_bbcode                      = ($config['allow_sig_bbcode']) ? (bool) $user->optionget('sig_bbcode') : false;
            $enable_smilies                     = ($config['allow_sig_smilies']) ? (bool) $user->optionget('sig_smilies') : false;
            $enable_urls                        = ($config['allow_sig_links']) ? (bool) $user->optionget('sig_links') : false;

            $message_parser = new parse_message($signature);

            // Allowing Quote BBCode
            $message_parser->parse($enable_bbcode, $enable_urls, $enable_smilies, $config['allow_sig_img'], $config['allow_sig_flash'], true, $config['allow_sig_links'], true, 'sig');

            $data['user_sig']                   = (string) $message_parser->message;
            $data['user_options']               = $user->data['user_options'];
            $data['user_sig_bbcode_uid']   = (string) $message_parser->bbcode_uid;
            $data['user_sig_bbcode_bitfield']   = $message_parser->bbcode_bitfield;
        }

        if($user->data['al_fb_profile_sync'] || $user->data['al_fb_status_sync'])
        {
            $sql = 'UPDATE ' . USERS_TABLE . '
                    SET ' . $db->sql_build_array('UPDATE', $data) . '
                    WHERE user_id = ' . $user->data['user_id'];
            
            $db->sql_query($sql);
        }

   trigger_error(sprintf($user->lang['LOGIN_SUCCESS'] . "<br /><br />" . sprintf($user->lang['RETURN_INDEX'], "<a href='{$phpbb_root_path}index.php'>", "</a>")));


}
else
{
   // No user was registered with the associate Facebook Id.
   // We need to see if they are anonymous.
   // If they are then that means they might want to register.
   // We will check to see if they wish to register.
   if($user->data['user_id'] == ANONYMOUS)
   {
      if(confirm_box(true))
      {
         // Most of this code comes straight out of ucp_register.php
         $message = 'TERMS_OF_USE_CONTENT';
         $title = 'TERMS_USE';

         if (empty($user->lang[$message]))
         {
            if ($user->data['is_registered'])
            {
               redirect(append_sid("{$phpbb_root_path}index.$phpEx"));
            }

            login_box();
         }

         $template->set_filenames(array(
            'body'      => 'ucp_agreement.html')
         );

         // Disable online list
         page_header($user->lang[$title], false);

         $s_hidden_fields = array(   'al_login'       => 1,
                              'al_login_type'   => AL_FACEBOOK_LOGIN,
                              'al_fb_user'   => $fb_user->id
         );

         $coppa            = (isset($_REQUEST['coppa'])) ? ((!empty($_REQUEST['coppa'])) ? 1 : 0) : false;
            if ($coppa === false && $config['coppa_enable'])
            {
               $now = getdate();
               $coppa_birthday = $user->format_date(mktime($now['hours'] + $user->data['user_dst'], $now['minutes'], $now['seconds'], $now['mon'], $now['mday'] - 1, $now['year'] - 13), $user->lang['DATE_FORMAT']);
               unset($now);

               $template->assign_vars(array(
                  'L_COPPA_NO'      => sprintf($user->lang['UCP_COPPA_BEFORE'], $coppa_birthday),
                  'L_COPPA_YES'      => sprintf($user->lang['UCP_COPPA_ON_AFTER'], $coppa_birthday),

                  'U_COPPA_NO'      => append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=register&amp;coppa=0' . $add_lang),
                  'U_COPPA_YES'      => append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=register&amp;coppa=1' . $add_lang),

                  'S_SHOW_COPPA'      => true,
                  'S_HIDDEN_FIELDS'   => build_hidden_fields($s_hidden_fields),
                  'S_UCP_ACTION'      => append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=register' . $add_lang),
               ));
            }
            else
            {
               $template->assign_vars(array(
                  'L_TERMS_OF_USE'   => sprintf($user->lang['TERMS_OF_USE_CONTENT'], $config['sitename'], generate_board_url()),

                  'S_SHOW_COPPA'      => false,
                  'S_REGISTRATION'   => true,
                  'S_HIDDEN_FIELDS'   => build_hidden_fields($s_hidden_fields),
                  'S_UCP_ACTION'      => append_sid("{$phpbb_root_path}alternatelogin/al_fb_registration.$phpEx", 'mode=register' . $add_lang . $add_coppa),
                  )
               );
            }

         page_footer();
      }
      else
      {
         confirm_box(false, sprintf($user->lang['AL_REGISTER_QUERY'], $user->lang['FACEBOOK']));
         // They said no so send them to the home page.
         redirect(append_sid("{$phpbb_root_path}index.$phpEx"));
      }
   }
   else
   {
      // If they are not anonymous then we can assume they are current users wishing
      // to link their accounts.

      

      // Did we get data, if yes then the user has another account registered.
      // We need to unlink that account as well.
                $sql_array = array(
                    'al_fb_id'      => $fb_user->id,
                    'al_wl_id'      => 0,
                    'al_tw_id'      => 0,
                );

                // Prepare the query to update the users Alternate Login record.
                $sql = 'UPDATE ' . USERS_TABLE
                . " SET " . $db->sql_build_array('UPDATE', $sql_array)
                . " WHERE user_id='{$user->data['user_id']}'";


                // Execute the query.
      $result = $db->sql_query($sql);

                if(!$result)
      {
         trigger_error($user->lang['AL_PHPBB_DB_FAILURE']);
      }

                $sql_array = array(
                    'user_password' => phpbb_hash($fb_user->id . $config['al_fb_key'] . $config['al_fb_secret']),
                );

                $sql = "UPDATE " . USERS_TABLE .
                        " SET " . $db->sql_build_array('UPDATE', $sql_array) .
                        " WHERE user_id=" . (int)$user->data['user_id'];



      // Execute the query.
      $result = $db->sql_query($sql);

      // Tell the user if they suceeded or not.
      if(!$result)
      {
         trigger_error($user->lang['AL_PHPBB_DB_FAILURE']);
      }
      else
      {
         trigger_error(sprintf($user->lang['AL_LINK_SUCCESS'], $user->lang['FACEBOOK'], $user->lang['FACEBOOK']));
      }
   }

}

?>