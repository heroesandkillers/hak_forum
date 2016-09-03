<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<fb:like href="<?php echo (isset($this->_rootref['BOARD_URL'])) ? $this->_rootref['BOARD_URL'] : ''; ?>" show_faces="false" width="450" font="arial"></fb:like>
<?php if ($this->_rootref['S_DISPLAY_SEARCH'] || ( $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT'] )) {  ?>

<ul class="linklist">
    <?php if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?>

    <li><a href="<?php echo (isset($this->_rootref['U_SEARCH_UNANSWERED'])) ? $this->_rootref['U_SEARCH_UNANSWERED'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_UNANSWERED'])) ? $this->_rootref['L_SEARCH_UNANSWERED'] : ((isset($user->lang['SEARCH_UNANSWERED'])) ? $user->lang['SEARCH_UNANSWERED'] : '{ SEARCH_UNANSWERED }')); ?></a><?php if ($this->_rootref['S_LOAD_UNREADS']) {  ?> &bull; <a href="<?php echo (isset($this->_rootref['U_SEARCH_UNREAD'])) ? $this->_rootref['U_SEARCH_UNREAD'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_UNREAD'])) ? $this->_rootref['L_SEARCH_UNREAD'] : ((isset($user->lang['SEARCH_UNREAD'])) ? $user->lang['SEARCH_UNREAD'] : '{ SEARCH_UNREAD }')); ?></a><?php } if ($this->_rootref['S_USER_LOGGED_IN']) {  ?> &bull; <a href="<?php echo (isset($this->_rootref['U_SEARCH_NEW'])) ? $this->_rootref['U_SEARCH_NEW'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_NEW'])) ? $this->_rootref['L_SEARCH_NEW'] : ((isset($user->lang['SEARCH_NEW'])) ? $user->lang['SEARCH_NEW'] : '{ SEARCH_NEW }')); ?></a><?php } ?> &bull; <a href="<?php echo (isset($this->_rootref['U_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['U_SEARCH_ACTIVE_TOPICS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['L_SEARCH_ACTIVE_TOPICS'] : ((isset($user->lang['SEARCH_ACTIVE_TOPICS'])) ? $user->lang['SEARCH_ACTIVE_TOPICS'] : '{ SEARCH_ACTIVE_TOPICS }')); ?></a></li>
    <?php } if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_FORUMS']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_MARK_FORUMS'])) ? $this->_rootref['U_MARK_FORUMS'] : ''; ?>" accesskey="m"><?php echo ((isset($this->_rootref['L_MARK_FORUMS_READ'])) ? $this->_rootref['L_MARK_FORUMS_READ'] : ((isset($user->lang['MARK_FORUMS_READ'])) ? $user->lang['MARK_FORUMS_READ'] : '{ MARK_FORUMS_READ }')); ?></a></li><?php } ?>

</ul>
<?php } if ($this->_rootref['AL_FB_FACEPILE'] | $this->_rootref['AL_FB_ACTIVITY'] | $this->_rootref['AL_FB_LIKE_BOX']) {  ?> 
<table width="100%"> 
    <tr> 
        <td valign="top"> 
<?php } $this->_tpl_include('forumlist_body.html'); if ($this->_rootref['AL_FB_FACEPILE'] | $this->_rootref['AL_FB_ACTIVITY'] | $this->_rootref['AL_FB_LIKE_BOX']) {  ?> 
        </td> 
        
        <?php if (( $this->_rootref['AL_FB_ACTIVITY'] && ! $this->_rootref['AL_FB_USER_HIDE_ACTIVITY'] ) || ( $this->_rootref['AL_FB_LIKE_BOX'] && ! $this->_rootref['AL_FB_USER_HIDE_LIKE_BOX'] )) {  ?> 
        <td width="200" valign="top"> 
        <?php } if ($this->_rootref['AL_FB_LIKE_BOX'] && ! $this->_rootref['AL_FB_USER_HIDE_LIKE_BOX']) {  ?> 
        
                <div class="forabg"> 
		<div class="inner"><span class="corners-top"><span></span></span> 
 
                    <div class="panel"> 
                            <fb:like-box href="<?php echo (isset($this->_rootref['AL_FB_PAGE_URL'])) ? $this->_rootref['AL_FB_PAGE_URL'] : ''; ?>" width="300" show_faces="true" stream="true" header="true"></fb:like-box>
                    </div> 
                        <span class="corners-bottom"><span></span></span></div> 
	</div> 
        <?php } if ($this->_rootref['AL_FB_ACTIVITY'] && ! $this->_rootref['AL_FB_USER_HIDE_ACTIVITY']) {  ?> 
        
                <div class="forabg"> 
		<div class="inner"><span class="corners-top"><span></span></span> 
 
                    <div class="panel"> 
                            <fb:activity site="<?php echo (isset($this->_rootref['AL_FB_SITE_DOMAIN'])) ? $this->_rootref['AL_FB_SITE_DOMAIN'] : ''; ?>" width="300" height="300" header="true" font="arial" border_color="" recommendations="true"></fb:activity> 
                    </div> 
                        <span class="corners-bottom"><span></span></span></div> 
	</div> 
        <?php } if (( $this->_rootref['AL_FB_ACTIVITY'] && ! $this->_rootref['AL_FB_USER_HIDE_ACTIVITY'] )) {  ?> 
        </td> 
        <?php } ?> 
    </tr> 
    <?php if ($this->_rootref['AL_FB_FACEPILE'] && ! $this->_rootref['AL_FB_USER_HIDE_FACEPILE']) {  ?> 
    <tr> 
        <td<?php if ($this->_rootref['AL_FB_ACTIVITY']) {  ?> colspan="2"<?php } ?>>
                <div class="forabg"> 
		<div class="inner"><span class="corners-top"><span></span></span> 
 
                    <div class="panel"> 
                        
                        <fb:facepile href="<?php echo (isset($this->_rootref['BOARD_URL'])) ? $this->_rootref['BOARD_URL'] : ''; ?>" width="200" max_rows="1"></fb:facepile> 
                    </div> 
                        <span class="corners-bottom"><span></span></span></div> 
	</div> 
 
 
        </td> 
    </tr> 
    <?php } ?> 
</table> 
<?php } if (! $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT']) {  ?>

<form method="post" action="<?php echo (isset($this->_rootref['S_LOGIN_ACTION'])) ? $this->_rootref['S_LOGIN_ACTION'] : ''; ?>" class="headerspace">
    <h3><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>"><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></a><?php if ($this->_rootref['S_REGISTER_ENABLED']) {  ?>&nbsp; &bull; &nbsp;<a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></a><?php } ?></h3>
    <fieldset class="quick-login">
        <label for="username"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</label>&nbsp;<input type="text" name="username" id="username" size="10" class="inputbox" title="<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>" />
        <label for="password"><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>:</label>&nbsp;<input type="password" name="password" id="password" size="10" class="inputbox" title="<?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>" />
        <?php if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?>

        | <label for="autologin"><?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?> <input type="checkbox" name="autologin" id="autologin" /></label>
        <?php } ?>

        <input type="submit" name="login" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" class="button2" />
        <?php echo (isset($this->_rootref['S_LOGIN_REDIRECT'])) ? $this->_rootref['S_LOGIN_REDIRECT'] : ''; ?>

    </fieldset>
</form>


<?php if (( $this->_rootref['S_AL_WL_ENABLED'] || $this->_rootref['S_AL_FB_ENABLED'] || $this->_rootref['S_AL_OI_ENABLED'] ) && ! $this->_rootref['S_ADMIN_AUTH']) {  ?>

 <div class="panel bg3">
   <div class="inner"><span class="corners-top"><span></span></span>
      
 <h3><?php echo ((isset($this->_rootref['L_SOCIAL_LOGIN_OPTIONS'])) ? $this->_rootref['L_SOCIAL_LOGIN_OPTIONS'] : ((isset($user->lang['SOCIAL_LOGIN_OPTIONS'])) ? $user->lang['SOCIAL_LOGIN_OPTIONS'] : '{ SOCIAL_LOGIN_OPTIONS }')); ?></h3> 
                <br /> 
            <?php if ($this->_rootref['S_AL_WL_ENABLED']) {  ?> 
            <a href="<?php echo (isset($this->_rootref['U_AL_WL_AUTHORIZE'])) ? $this->_rootref['U_AL_WL_AUTHORIZE'] : ''; ?>"><img src="alternatelogin/images/windows_live_connect.png" alt="Windows Live" /></a> 
        <?php } if ($this->_rootref['S_AL_FB_ENABLED']) {  ?> 
            <a onclick="window.location='alternatelogin/al_fb_connect.php';" href="#"><img src="./alternatelogin/create_fb_button.php?label=<?php echo (isset($this->_rootref['AL_FB_LOGIN_BUTTON_TEXT'])) ? $this->_rootref['AL_FB_LOGIN_BUTTON_TEXT'] : ''; ?>"></a> <?php } if ($this->_rootref['S_AL_OI_ENABLED']) {  ?> 
        <link type="text/css" rel="stylesheet" href="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/css/openid.css" />
	<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/js/jquery-1.2.6.min.js"></script>
	<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/js/openid-jquery.js"></script>
	<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/js/openid-en.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			openid.init('openid_identifier');
			
		});
	</script>
        <form action="<?php echo (isset($this->_rootref['U_AL_OI_LOGIN'])) ? $this->_rootref['U_AL_OI_LOGIN'] : ''; ?>" method="get" id="openid_form">
		<input type="hidden" name="action" value="verify" />
		<fieldset>
			
			<div id="openid_choice">
				
				<div id="openid_btns"></div>
			</div>
			<div id="openid_input_area">
				<input id="openid_identifier" name="openid_identifier" type="text" value="http://" />
				<input id="openid_submit" type="submit" value="Sign-In"/>
			</div>
			
		</fieldset>
	</form>
        <?php } ?> 
      

   <span class="corners-bottom"><span></span></span></div>
</div>
 <?php } } if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  ?>

<p><?php echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; ?>

    <?php if ($this->_rootref['LEGEND']) {  ?><br /><em><?php echo ((isset($this->_rootref['L_LEGEND'])) ? $this->_rootref['L_LEGEND'] : ((isset($user->lang['LEGEND'])) ? $user->lang['LEGEND'] : '{ LEGEND }')); ?>: <?php echo (isset($this->_rootref['LEGEND'])) ? $this->_rootref['LEGEND'] : ''; ?></em><?php } ?></p>
<?php } if ($this->_rootref['S_DISPLAY_BIRTHDAY_LIST'] && $this->_rootref['BIRTHDAY_LIST']) {  ?>

<h3><?php echo ((isset($this->_rootref['L_BIRTHDAYS'])) ? $this->_rootref['L_BIRTHDAYS'] : ((isset($user->lang['BIRTHDAYS'])) ? $user->lang['BIRTHDAYS'] : '{ BIRTHDAYS }')); ?></h3>
<p><?php if ($this->_rootref['BIRTHDAY_LIST']) {  echo ((isset($this->_rootref['L_CONGRATULATIONS'])) ? $this->_rootref['L_CONGRATULATIONS'] : ((isset($user->lang['CONGRATULATIONS'])) ? $user->lang['CONGRATULATIONS'] : '{ CONGRATULATIONS }')); ?>: <strong><?php echo (isset($this->_rootref['BIRTHDAY_LIST'])) ? $this->_rootref['BIRTHDAY_LIST'] : ''; ?></strong><?php } else { echo ((isset($this->_rootref['L_NO_BIRTHDAYS'])) ? $this->_rootref['L_NO_BIRTHDAYS'] : ((isset($user->lang['NO_BIRTHDAYS'])) ? $user->lang['NO_BIRTHDAYS'] : '{ NO_BIRTHDAYS }')); } ?></p>
<?php } if ($this->_rootref['NEWEST_USER']) {  ?>

<h3><?php echo ((isset($this->_rootref['L_STATISTICS'])) ? $this->_rootref['L_STATISTICS'] : ((isset($user->lang['STATISTICS'])) ? $user->lang['STATISTICS'] : '{ STATISTICS }')); ?></h3>
<p><?php echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['TOTAL_USERS'])) ? $this->_rootref['TOTAL_USERS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['NEWEST_USER'])) ? $this->_rootref['NEWEST_USER'] : ''; ?></p>
<?php } $this->_tpl_include('overall_footer.html'); ?>