<?php

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
require($phpbb_root_path . 'login_common.' . $phpEx);
require($phpbb_root_path . 'includes/functions_user.' . $phpEx);
require($phpbb_root_path . 'includes/functions_module.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

// Setting a variable to let the style designer know where he is...
$template->assign_var('S_IN_UCP', true);

$module = new p_master();
$default = false;

//LOGIN EN EL JUEGO
global $user;
if ($user->data['user_id']) {
    if ($user->data['user_id'] > 1) {
        echo "<script>
            parent.gameIn(" . $user->data['user_id'] . ",'" . $user->data['user_password'] . "');
            </script>";
    }
}

echo "<script>
    var a;
//            parent.start();
            </script>";

// MODO LOGIN SELECCIONADO
//login_box(request_var('attr_auths', 'loginmovil.php'));

// Instantiate module system and generate list of available modules
//$module->list_modules('ucp');
//$module->set_active($id, $mode);
//$module->load_active();
//$module->assign_tpl_vars(append_sid("{$phpbb_root_path}ucp.$phpEx"));
//$module->display($module->get_page_title(), false);

?>