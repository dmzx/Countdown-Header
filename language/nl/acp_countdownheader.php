<?php
/**
*
* @package phpBB Extension - Countdown Header
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
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
	'ACP_COUNTDOWNHEADER_CONFIGURATION'				=> 'Configuratie',
	'ACP_COUNTDOWNHEADER_CONFIG_SAVED'				=> 'Aftellen Header instellingen opgeslagen',
	'ACP_COUNTDOWNHEADER_ENABLE'					=> 'Schakel aftel Header in',
	'ACP_COUNTDOWNHEADER_ENABLE_EXPLAIN'			=> 'Schakel de Aftel Header in of uit.',
	'ACP_COUNTDOWNHEADER_DATE' 						=> 'Aftel Header datum',
	'ACP_COUNTDOWNHEADER_DATE_EXPLAIN'				=> 'Voorbeeld: 2017/12/31 00:00:00',
	'ACP_COUNTDOWNHEADER_TEXT_BIG' 					=> 'Aftel Header grote tekst',
	'ACP_COUNTDOWNHEADER_TEXT_BIG_EXPLAIN'			=> 'Aftel Header grote tekst zal bovenaan weergegeven worden wanneer voltooid.',
	'ACP_COUNTDOWNHEADER_TEXT_SMALL'	 			=> 'Aftel Header kleine tekst',
	'ACP_COUNTDOWNHEADER_TEXT_SMALL_EXPLAIN' 		=> 'Aftel Header kleine tekst zal onderaan weergegeven worden wanneer voltooid.',
	'ACP_COUNTDOWNHEADER_TESTMODE' 					=> 'Activeer test-modus',
	'ACP_COUNTDOWNHEADER_TESTMODE_EXPLAIN'			=> 'Wanneer test-modus geactiveerd is kunnen enkel beheerders de Aftel Header zien.',
	'ACP_COUNTDOWNHEADER_URL' 						=> 'Aftel Header URL',
	'ACP_COUNTDOWNHEADER_URL_EXPLAIN'				=> 'Relatieve URL naar je forum, zal beschikbaar zijn wanneer de teller voltooid is.<br />Stel in als voorbeeld <em>viewtopic.php?f=2</em> ',
));
