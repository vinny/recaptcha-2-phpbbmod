<?php

/**
* @copyright (c) 2015 Vinny
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
   trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

$language_file = 'mods/captcha_recaptcha_new';
$mod_name = 'CAPTCHA_RECAPTCHA_NEW';
$version_config_name = 'recaptcha_new_version';

$versions = array(
   // Version 1.0.0
   '1.0.0'   => array(
      // Lets add a config setting
      'config_add' => array(
        array('recaptcha_new_pubkey', ''),
		array('recaptcha_new_privkey', ''),
      ),
	),

);

// Include the UMIF Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>