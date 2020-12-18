<?php
/**
*
* @version $Id: acp_countdownheader.php 98 2017-05-02 20:01:13Z Scanialady $
* @package phpBB Extension - Countdown Header (deutsch)
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
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
// ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'ACP_COUNTDOWNHEADER_CONFIGURATION'				=> 'Konfiguration',
	'ACP_COUNTDOWNHEADER_CONFIG_SAVED'				=> 'Countdown Header Einstellungen gespeichert',
	'ACP_COUNTDOWNHEADER_ENABLE'					=> 'Aktiviere Countdown Header',
	'ACP_COUNTDOWNHEADER_ENABLE_EXPLAIN'			=> 'Aktiviere oder deaktiviere den Countdown Header.',
	'ACP_COUNTDOWNHEADER_DATE' 						=> 'Countdown Header Datum',
	'ACP_COUNTDOWNHEADER_DATE_EXPLAIN'				=> 'Beispiel: 2017/12/31 00:00:00',
	'ACP_COUNTDOWNHEADER_TEXT_BIG' 					=> 'Countdown Header großer Text',
	'ACP_COUNTDOWNHEADER_TEXT_BIG_EXPLAIN'			=> 'Großer Text wird oben angezeigt, wenn Countdown Header abgelaufen ist.',
	'ACP_COUNTDOWNHEADER_TEXT_SMALL'	 			=> 'Countdown Header kleiner Text',
	'ACP_COUNTDOWNHEADER_TEXT_SMALL_EXPLAIN' 		=> 'Kleiner Text wird unten angezeigt, wenn Countdown Header abgelaufen ist.',
	'ACP_COUNTDOWNHEADER_TESTMODE' 					=> 'Testmodus aktivieren',
	'ACP_COUNTDOWNHEADER_TESTMODE_EXPLAIN'			=> 'Wenn der Testmodus aktiviert ist, können nur Administratoren den Countdown Header sehen.',
	'ACP_COUNTDOWNHEADER_URL' 						=> 'Countdown Header URL',
	'ACP_COUNTDOWNHEADER_URL_EXPLAIN'				=> 'URL relativ zu deinem Board, wird verfügbar, wenn der Countdown abgelaufen ist.<br />Setze zum Beispiel <em>viewtopic.php?f=2</em> ein.',
));
