<?php
/**
*
* @package phpBB Extension - Countdown Header
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ACP_COUNTDOWNHEADER_CONFIGURATION'				=> 'Configuration',
	'ACP_COUNTDOWNHEADER_CONFIG_SAVED'				=> 'Countdown Header settings saved',
	'ACP_COUNTDOWNHEADER_ENABLE'					=> 'Enable Countdown Header',
	'ACP_COUNTDOWNHEADER_ENABLE_EXPLAIN'			=> 'Enable or disable the Countdown Header.',
	'ACP_COUNTDOWNHEADER_DATE' 						=> 'Countdown Header date',
	'ACP_COUNTDOWNHEADER_DATE_EXPLAIN'				=> 'Example: 2017/12/31 00:00:00',
	'ACP_COUNTDOWNHEADER_TEXT_BIG' 					=> 'Countdown Header big text',
	'ACP_COUNTDOWNHEADER_TEXT_BIG_EXPLAIN'			=> 'Countdown Header big text will be displayed on top when complete.',
	'ACP_COUNTDOWNHEADER_TEXT_SMALL'	 			=> 'Countdown Header small text',
	'ACP_COUNTDOWNHEADER_TEXT_SMALL_EXPLAIN' 		=> 'Countdown Header small text will be displayed on bottom when complete.',
	'ACP_COUNTDOWNHEADER_TESTMODE' 					=> 'Activate test-mode',
	'ACP_COUNTDOWNHEADER_TESTMODE_EXPLAIN'			=> 'If test-mode is activated only admins can view the Countdown Header.',
	'ACP_COUNTDOWNHEADER_URL' 						=> 'Countdown Header URL',
	'ACP_COUNTDOWNHEADER_URL_EXPLAIN'				=> 'URL relative to your board, will be available when countdown complete.<br />Set for example <em>viewtopic.php?f=2</em> ',
));
