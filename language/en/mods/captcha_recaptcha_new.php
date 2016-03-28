<?php
/**
*
* captcha_recaptcha_new [English]
*
* @package language
* @copyright (c) 2015 Vinny
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'RECAPTCHA_NEW_LANG'			=> 'en', // reCAPTCHA supported 40+ languages listed here: https://developers.google.com/recaptcha/docs/language
	'RECAPTCHA_NEW_NOT_AVAILABLE'	=> 'In order to use reCAPTCHA v2, you must create an account on <a href="http://www.google.com/recaptcha/intro/index.html">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA_NEW'			=> 'reCAPTCHA v2',

	'RECAPTCHA_INCORRECT'			=> 'The solution you provided was incorrect',
	'RECAPTCHA_NOSCRIPT'			=> 'Please enable JavaScript in your browser to load the challenge.',

	'RECAPTCHA_PUBLIC'				=> 'Public reCAPTCHA v2 key',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Your public reCAPTCHA v2 key. Keys can be obtained on <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Private reCAPTCHA v2 key',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Your private reCaptcha key. Keys can be obtained on <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_NEW_EXPLAIN'			=> 'In an effort to prevent automatic submissions, we require that you complete the following challenge.',
));

?>