<?php
/**
*
* @package phpBB Extension - Countdown Header
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'COUNTDOWNHEADER_COUNT_DAYS'				=> 'Days left',
	'COUNTDOWNHEADER_COUNT_HOURS'				=> 'Hours left',
	'COUNTDOWNHEADER_COUNT_MINUTES'				=> 'Minutes',
	'COUNTDOWNHEADER_COUNT_SECONDS'				=> 'Seconds',

	// ACP
	'ACP_COUNTDOWNHEADER_CONFIG_EXPLAIN'		=> 'This is configuration page for the Countdown Header extension by <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>.',
	'ACP_COUNTDOWNHEADER_CONFIG_SET'			=> 'Configuration',
	'COUNTDOWNHEADER_VERSION'					=> 'Version',
	'COUNTDOWNHEADER_CONFIG_SAVED'				=> 'Countdown Header settings saved',
	'COUNTDOWNHEADER_ENABLE'					=> 'Enable Countdown Header',
	'COUNTDOWNHEADER_ENABLE_EXPLAIN'			=> 'Enable or disable the Countdown Header',
	'COUNTDOWNHEADER_DATE' 						=> 'Countdown Header date',
	'COUNTDOWNHEADER_DATE_EXPLAIN'				=> 'Example: 2016/12/31 00:00:00',
	'COUNTDOWNHEADER_TEXT_BIG' 					=> 'Countdown Header big text',
	'COUNTDOWNHEADER_TEXT_BIG_EXPLAIN'			=> 'Countdown Header big text will be displayed on top when complete.',
	'COUNTDOWNHEADER_TEXT_SMALL'	 			=> 'Countdown Header small text',
	'COUNTDOWNHEADER_TEXT_SMALL_EXPLAIN' 		=> 'Countdown Header small text will be displayed on bottom when complete.',
	'COUNTDOWNHEADER_TESTMODE' 					=> 'Activate testmode',
	'COUNTDOWNHEADER_TESTMODE_EXPLAIN'			=> 'If testmode is activated only admins can view the Countdown Header',
	'COUNTDOWNHEADER_URL' 						=> 'Countdown Header URL',
	'COUNTDOWNHEADER_URL_EXPLAIN'				=> 'URL relative to your board, will be available when complete.<br />Set for example <em>downloads</em> ',
));
