<?php
/**
*
* @package phpBB Extension - Countdown Header
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
	$lang = [];
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

$lang = array_merge($lang, [
	'ACP_COUNTDOWNHEADER_CONFIG_SET'			=> 'Configuração',
	'ACP_COUNTDOWNHEADER_VERSION'					=> 'Versão',
	'ACP_COUNTDOWNHEADER_CONFIG_SAVED'				=> 'Configuração salva',
	'ACP_COUNTDOWNHEADER_ENABLE'					=> 'Habilitar Countdown Header',
	'ACP_COUNTDOWNHEADER_ENABLE_EXPLAIN'			=> 'Habilita ou desabilita o Countdown Header',
	'ACP_COUNTDOWNHEADER_DATE' 						=> 'Formato da data',
	'ACP_COUNTDOWNHEADER_DATE_EXPLAIN'				=> 'Exemplo: 2017/12/31 00:00:00',
	'ACP_COUNTDOWNHEADER_TEXT_BIG' 					=> 'Texto grande',
	'ACP_COUNTDOWNHEADER_TEXT_BIG_EXPLAIN'			=> 'O texto grande aparecerá na parte superior quando estiver completo.',
	'ACP_COUNTDOWNHEADER_TEXT_SMALL'	 			=> 'Texto pequeno',
	'ACP_COUNTDOWNHEADER_TEXT_SMALL_EXPLAIN' 		=> 'O texto pequeno aparecerá na parte inferior quando estiver completo.',
	'ACP_COUNTDOWNHEADER_TESTMODE' 					=> 'Ativar modo de teste',
	'ACP_COUNTDOWNHEADER_TESTMODE_EXPLAIN'			=> 'Se este modo estiver ativado, somente os administradores poderão ver a contagem.',
	'ACP_COUNTDOWNHEADER_URL' 						=> 'Link do Countdown Header',
	'ACP_COUNTDOWNHEADER_URL_EXPLAIN'				=> 'URL relativa a seu diretório estará disponível quando estiver completo.<br>Por exemplo <em>downloads</em> ',
]);
