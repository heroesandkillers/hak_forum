<?php if (!defined('IN_PHPBB')) exit; ?>﻿<?php $this->_tpl_include('overall_header.html'); ?>


<a name="maincontent"></a>

<?php if ($this->_rootref['S_MODE_MAIN']) {  ?>

<form method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">


    
<fieldset>

<legend><?php echo ((isset($this->_rootref['L_TITLE_ENABLE_LOGIN'])) ? $this->_rootref['L_TITLE_ENABLE_LOGIN'] : ((isset($user->lang['TITLE_ENABLE_LOGIN'])) ? $user->lang['TITLE_ENABLE_LOGIN'] : '{ TITLE_ENABLE_LOGIN }')); ?></legend>
<table>
<col class="col1" /><col class="col2" /><col class="col2" />
<thead>
<tr>
	<th></th>
	<th><?php echo ((isset($this->_rootref['L_ENABLE_LOGIN'])) ? $this->_rootref['L_ENABLE_LOGIN'] : ((isset($user->lang['ENABLE_LOGIN'])) ? $user->lang['ENABLE_LOGIN'] : '{ ENABLE_LOGIN }')); ?></th>

</tr>
</thead>
<tr class="row1">
	<td><?php echo ((isset($this->_rootref['L_FACEBOOK'])) ? $this->_rootref['L_FACEBOOK'] : ((isset($user->lang['FACEBOOK'])) ? $user->lang['FACEBOOK'] : '{ FACEBOOK }')); ?></td>
	<td><input type="radio" name="facebook_login" value="1" <?php echo (isset($this->_rootref['FACEBOOK_LOGIN_YES'])) ? $this->_rootref['FACEBOOK_LOGIN_YES'] : ''; ?>/><label for="facebook_login"><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label><input type="radio" name="facebook_login" value="0" <?php echo (isset($this->_rootref['FACEBOOK_LOGIN_NO'])) ? $this->_rootref['FACEBOOK_LOGIN_NO'] : ''; ?>/><label for="facebook_login"><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></td>

</tr>


<tr class="row1">
	<td><?php echo ((isset($this->_rootref['L_WINDOWSLIVE'])) ? $this->_rootref['L_WINDOWSLIVE'] : ((isset($user->lang['WINDOWSLIVE'])) ? $user->lang['WINDOWSLIVE'] : '{ WINDOWSLIVE }')); ?></td>
        <td><input type="radio" name="windowslive_login" value="1" <?php echo (isset($this->_rootref['WINDOWSLIVE_LOGIN_YES'])) ? $this->_rootref['WINDOWSLIVE_LOGIN_YES'] : ''; ?>/><label for="windowslive_login"><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label><input type="radio" name="windowslive_login" value="0" <?php echo (isset($this->_rootref['WINDOWSLIVE_LOGIN_NO'])) ? $this->_rootref['WINDOWSLIVE_LOGIN_NO'] : ''; ?>/><label for="windowslive_login"><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></td>

</tr>


<tr class="row1">
	<td><?php echo ((isset($this->_rootref['L_OPENID'])) ? $this->_rootref['L_OPENID'] : ((isset($user->lang['OPENID'])) ? $user->lang['OPENID'] : '{ OPENID }')); ?></td>
        <td><input type="radio" name="openid_login" value="1" <?php echo (isset($this->_rootref['OPENID_LOGIN_YES'])) ? $this->_rootref['OPENID_LOGIN_YES'] : ''; ?>/><label for="openid_login"><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label><input type="radio" name="openid_login" value="0" <?php echo (isset($this->_rootref['OPENID_LOGIN_NO'])) ? $this->_rootref['OPENID_LOGIN_NO'] : ''; ?>/><label for="openid_login"><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></td>

</tr>

</table>
<p class="submit-buttons">
	<input class="button1" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;
	<input class="button2" type="reset" id="reset" name="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" />
</p>


</fieldset>
<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</form>

<?php } else if ($this->_rootref['S_MODE_FACEBOOK']) {  ?>


<form method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">

<fieldset>

<legend><?php echo ((isset($this->_rootref['L_TITLE_ENABLE_LOGIN'])) ? $this->_rootref['L_TITLE_ENABLE_LOGIN'] : ((isset($user->lang['TITLE_ENABLE_LOGIN'])) ? $user->lang['TITLE_ENABLE_LOGIN'] : '{ TITLE_ENABLE_LOGIN }')); ?></legend>

<dl>
<dt><?php echo ((isset($this->_rootref['L_FACEBOOK_APP_ID'])) ? $this->_rootref['L_FACEBOOK_APP_ID'] : ((isset($user->lang['FACEBOOK_APP_ID'])) ? $user->lang['FACEBOOK_APP_ID'] : '{ FACEBOOK_APP_ID }')); ?></dt>
<dd><input type="text" id="facebook_app_id" name="facebook_id" value="<?php echo (isset($this->_rootref['FACEBOOK_APP_ID'])) ? $this->_rootref['FACEBOOK_APP_ID'] : ''; ?>"></dd>
</dl>
<dl>
<dt><?php echo ((isset($this->_rootref['L_FACEBOOK_SECRET'])) ? $this->_rootref['L_FACEBOOK_SECRET'] : ((isset($user->lang['FACEBOOK_SECRET'])) ? $user->lang['FACEBOOK_SECRET'] : '{ FACEBOOK_SECRET }')); ?></dt>
<dd><input type="text" id="facebook_secret" name="facebook_secret" value="<?php echo (isset($this->_rootref['FACEBOOK_SECRET'])) ? $this->_rootref['FACEBOOK_SECRET'] : ''; ?>"></dd>
</dl>
<dl>
<dt><?php echo ((isset($this->_rootref['L_FACEBOOK_PAGE_URL'])) ? $this->_rootref['L_FACEBOOK_PAGE_URL'] : ((isset($user->lang['FACEBOOK_PAGE_URL'])) ? $user->lang['FACEBOOK_PAGE_URL'] : '{ FACEBOOK_PAGE_URL }')); ?></dt>
<dd><input type="text" id="facebook_page_url" name="facebook_page_url" value="<?php echo (isset($this->_rootref['FACEBOOK_PAGE_URL'])) ? $this->_rootref['FACEBOOK_PAGE_URL'] : ''; ?>"></dd>
</dl>
<dl>
<dt><?php echo ((isset($this->_rootref['L_FACEBOOK_DEFAULT_LANG'])) ? $this->_rootref['L_FACEBOOK_DEFAULT_LANG'] : ((isset($user->lang['FACEBOOK_DEFAULT_LANG'])) ? $user->lang['FACEBOOK_DEFAULT_LANG'] : '{ FACEBOOK_DEFAULT_LANG }')); ?></dt>
<dd><select id="facebook_default_lang" name="facebook_default_lang"><?php echo (isset($this->_rootref['FACEBOOK_DEFAULT_LANG'])) ? $this->_rootref['FACEBOOK_DEFAULT_LANG'] : ''; ?></select></dd>
</dl>
<dl>
<dt><?php echo ((isset($this->_rootref['L_SITE_DOMAIN'])) ? $this->_rootref['L_SITE_DOMAIN'] : ((isset($user->lang['SITE_DOMAIN'])) ? $user->lang['SITE_DOMAIN'] : '{ SITE_DOMAIN }')); ?></dt>
<dd><input type="text" id="site_domain" name="site_domain" value="<?php echo (isset($this->_rootref['SITE_DOMAIN'])) ? $this->_rootref['SITE_DOMAIN'] : ''; ?>"></dd>
</dl>
<dl>
<dt><?php echo ((isset($this->_rootref['L_LOGIN_BUTTON_TEXT'])) ? $this->_rootref['L_LOGIN_BUTTON_TEXT'] : ((isset($user->lang['LOGIN_BUTTON_TEXT'])) ? $user->lang['LOGIN_BUTTON_TEXT'] : '{ LOGIN_BUTTON_TEXT }')); ?></dt>
<dd><input type="text" id="facebook_login_button_text" name="facebook_login_button_text" value="<?php echo (isset($this->_rootref['FACEBOOK_LOGIN_BUTTON_TEXT'])) ? $this->_rootref['FACEBOOK_LOGIN_BUTTON_TEXT'] : ''; ?>"></dd>
</dl>
<p /></p>
<table>
<col class="col1" /><col class="col2" /><col class="col2" />
<tr class="row2">
	<td><?php echo ((isset($this->_rootref['L_FACEBOOK_QUICK_ACCOUNTS'])) ? $this->_rootref['L_FACEBOOK_QUICK_ACCOUNTS'] : ((isset($user->lang['FACEBOOK_QUICK_ACCOUNTS'])) ? $user->lang['FACEBOOK_QUICK_ACCOUNTS'] : '{ FACEBOOK_QUICK_ACCOUNTS }')); ?></td>
	<td><input type="radio" name="facebook_quick_accounts" value="1" <?php echo (isset($this->_rootref['FACEBOOK_QUICK_ACCOUNTS_YES'])) ? $this->_rootref['FACEBOOK_QUICK_ACCOUNTS_YES'] : ''; ?>/><label for="facebook_quick_accounts"><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label><input type="radio" name="facebook_quick_accounts" value="0" <?php echo (isset($this->_rootref['FACEBOOK_QUICK_ACCOUNTS_NO'])) ? $this->_rootref['FACEBOOK_QUICK_ACCOUNTS_NO'] : ''; ?>/><label for="facebook_quick_accounts"><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></td>

</tr>
<tr class="row1">
	<td><?php echo ((isset($this->_rootref['L_FACEBOOK_ACTIVITY'])) ? $this->_rootref['L_FACEBOOK_ACTIVITY'] : ((isset($user->lang['FACEBOOK_ACTIVITY'])) ? $user->lang['FACEBOOK_ACTIVITY'] : '{ FACEBOOK_ACTIVITY }')); ?></td>
	<td><input type="radio" name="facebook_activity" value="1" <?php echo (isset($this->_rootref['FACEBOOK_ACTIVITY_YES'])) ? $this->_rootref['FACEBOOK_ACTIVITY_YES'] : ''; ?>/><label for="facebook_activity"><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label><input type="radio" name="facebook_activity" value="0" <?php echo (isset($this->_rootref['FACEBOOK_ACTIVITY_NO'])) ? $this->_rootref['FACEBOOK_ACTIVITY_NO'] : ''; ?>/><label for="facebook_activity"><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></td>

</tr>
<tr class="row2">
	<td><?php echo ((isset($this->_rootref['L_FACEBOOK_FACEPILE'])) ? $this->_rootref['L_FACEBOOK_FACEPILE'] : ((isset($user->lang['FACEBOOK_FACEPILE'])) ? $user->lang['FACEBOOK_FACEPILE'] : '{ FACEBOOK_FACEPILE }')); ?></td>
	<td><input type="radio" name="facebook_facepile" value="1" <?php echo (isset($this->_rootref['FACEBOOK_FACEPILE_YES'])) ? $this->_rootref['FACEBOOK_FACEPILE_YES'] : ''; ?> /><label for="facebook_facepile"><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label><input type="radio" name="facebook_facepile" value="0" <?php echo (isset($this->_rootref['FACEBOOK_FACEPILE_NO'])) ? $this->_rootref['FACEBOOK_FACEPILE_NO'] : ''; ?> /><label for="facebook_facepile"><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></td>

</tr>
<tr class="row2">
	<td><?php echo ((isset($this->_rootref['L_FACEBOOK_LIKE_BOX'])) ? $this->_rootref['L_FACEBOOK_LIKE_BOX'] : ((isset($user->lang['FACEBOOK_LIKE_BOX'])) ? $user->lang['FACEBOOK_LIKE_BOX'] : '{ FACEBOOK_LIKE_BOX }')); ?></td>
	<td><input type="radio" name="facebook_like_box" value="1" <?php echo (isset($this->_rootref['FACEBOOK_LIKE_BOX_YES'])) ? $this->_rootref['FACEBOOK_LIKE_BOX_YES'] : ''; ?> /><label for="facebook_page"><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label><input type="radio" name="facebook_like_box" value="0" <?php echo (isset($this->_rootref['FACEBOOK_LIKE_BOX_NO'])) ? $this->_rootref['FACEBOOK_LIKE_BOX_NO'] : ''; ?> /><label for="facebook_like_box"><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></td>

</tr>
</table>
<p class="submit-buttons">
	<input class="button1" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;
	<input class="button2" type="reset" id="reset" name="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" />
</p>
<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>


</fieldset>

</form>

<?php } else if ($this->_rootref['S_MODE_WINDOWSLIVE']) {  ?>


<form method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">

<fieldset>

<legend><?php echo ((isset($this->_rootref['L_TITLE_ENABLE_LOGIN'])) ? $this->_rootref['L_TITLE_ENABLE_LOGIN'] : ((isset($user->lang['TITLE_ENABLE_LOGIN'])) ? $user->lang['TITLE_ENABLE_LOGIN'] : '{ TITLE_ENABLE_LOGIN }')); ?></legend>

<dl>
<dt><?php echo ((isset($this->_rootref['L_WINDOWSLIVE_CLIENT_ID'])) ? $this->_rootref['L_WINDOWSLIVE_CLIENT_ID'] : ((isset($user->lang['WINDOWSLIVE_CLIENT_ID'])) ? $user->lang['WINDOWSLIVE_CLIENT_ID'] : '{ WINDOWSLIVE_CLIENT_ID }')); ?></dt>
<dd><input type="text" id="windowslive_app_id" name="windowslive_app_id" value="<?php echo (isset($this->_rootref['WINDOWSLIVE_APP_ID'])) ? $this->_rootref['WINDOWSLIVE_APP_ID'] : ''; ?>"></dd>
</dl>
<dl>
<dt><?php echo ((isset($this->_rootref['L_WINDOWSLIVE_SECRET'])) ? $this->_rootref['L_WINDOWSLIVE_SECRET'] : ((isset($user->lang['WINDOWSLIVE_SECRET'])) ? $user->lang['WINDOWSLIVE_SECRET'] : '{ WINDOWSLIVE_SECRET }')); ?></dt>
<dd><input type="text" id="windowslive_secret" name="windowslive_secret" value="<?php echo (isset($this->_rootref['WINDOWSLIVE_SECRET'])) ? $this->_rootref['WINDOWSLIVE_SECRET'] : ''; ?>"></dd>
</dl>
<dl>
<dt><?php echo ((isset($this->_rootref['L_WINDOWSLIVE_CALLBACK'])) ? $this->_rootref['L_WINDOWSLIVE_CALLBACK'] : ((isset($user->lang['WINDOWSLIVE_CALLBACK'])) ? $user->lang['WINDOWSLIVE_CALLBACK'] : '{ WINDOWSLIVE_CALLBACK }')); ?></dt>
<dd><input type="text" id="windowslive_callback" name="windowslive_callback" value="<?php echo (isset($this->_rootref['WINDOWSLIVE_CALLBACK'])) ? $this->_rootref['WINDOWSLIVE_CALLBACK'] : ''; ?>"></dd>
</dl>
<dl>
<dt><?php echo ((isset($this->_rootref['L_WINDOWSLIVE_QUICK_ACCOUNTS'])) ? $this->_rootref['L_WINDOWSLIVE_QUICK_ACCOUNTS'] : ((isset($user->lang['WINDOWSLIVE_QUICK_ACCOUNTS'])) ? $user->lang['WINDOWSLIVE_QUICK_ACCOUNTS'] : '{ WINDOWSLIVE_QUICK_ACCOUNTS }')); ?></dt>
<dd><input type="radio" name="windowslive_quick_accounts" value="1" <?php echo (isset($this->_rootref['WINDOWSLIVE_QUICK_ACCOUNTS_YES'])) ? $this->_rootref['WINDOWSLIVE_QUICK_ACCOUNTS_YES'] : ''; ?>/><label for="windowslive_quick_accounts"><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label><input type="radio" name="windowslive_quick_accounts" value="0" <?php echo (isset($this->_rootref['WINDOWSLIVE_QUICK_ACCOUNTS_NO'])) ? $this->_rootref['WINDOWSLIVE_QUICK_ACCOUNTS_NO'] : ''; ?>/><label for="windowslive_quick_accounts"><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
</dl>
<p class="submit-buttons">
	<input class="button1" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;
	<input class="button2" type="reset" id="reset" name="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" />
</p>
<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>


</fieldset>

</form>

<?php } $this->_tpl_include('overall_footer.html'); ?>