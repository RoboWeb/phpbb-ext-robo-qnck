<?php
/**
 *
 * Robo QuickNick. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020, Tomasz Wolny, https://github.com/RoboWeb
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(

	'QNCK_HELLO'		=> 'Hello %s!',
	'QNCK_GOODBYE'		=> 'Goodbye %s!',

	'QNCK_EVENT'		=> ' :: Qnck Event :: ',

	'ACP_QNCK_GOODBYE'					=> 'Should say goodbye?',
	'ACP_QNCK_ENABLE'					=> 'Enable QuickNick',
	'ACP_QNCK_ENABLE_EXPLAIN'			=> 'Allow insertion of the username in the quick reply form, when you click on the link “Refer by username”.',	
	'ACP_QNCK_ENABLE_BBCODE'			=> 'Enable special tag for user reference',
	'ACP_QNCK_ENABLE_BBCODE_EXPLAIN'	=> 'BBCode [ref] will be used instead of [b] in the function “Refer by username”.',
	'ACP_QNCK_COLORED_USERNAME'			=> 'Colorize refered username',

	'ACP_QNCK_SETTING_SAVED'	=> 'Settings have been saved successfully!',

	'ROBO_QNCK_NOTIFICATION'	=> 'Robo QuickNick notification',
));
