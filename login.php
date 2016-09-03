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

//$result = $auth->login($username, $password, '', 1, 0);
//
//print_r($result);
//if ($result['status'] == LOGIN_SUCCESS){
//    echo '//User was successfully logged into phpBB';
//}else{
//    echo '//Users login failed';
//}
// Setting a variable to let the style designer know where he is...
$template->assign_var('S_IN_UCP', true);

$module = new p_master();
$default = false;


//LOGIN EN EL JUEGO
global $user;
//if ($user->data['user_id'] && $user->data['user_id'] > 1) {
if (isset($user->data['user_id']) && !empty($user->data['user_id'])) {
    echo "<script>"
    . "console.log('loged with: " . $user->data['user_id'] . "');"
    . "parent.gameIn(" . $user->data['user_id'] . ",'" . $user->data['user_password'] . "');"
    . "</script>";
} else {
    echo "<script>"
    . "console.log('not login from forum');"
    . "parent.gameIn();"
    . "</script>";
}


// MODO LOGIN SELECCIONADO
login_box(request_var('attr_auths', 'login.php'));

// Instantiate module system and generate list of available modules
$module->list_modules('ucp');


// Select the active module
$module->set_active($id, $mode);
// Load and execute the relevant module
$module->load_active();
// Assign data to the template engine for the list of modules
$module->assign_tpl_vars(append_sid("{$phpbb_root_path}ucp.$phpEx"));
// Generate the page, do not display/query online list
$module->display($module->get_page_title(), false);
