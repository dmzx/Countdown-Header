<?php
/**
 *
 * Countdown Header. An extension for the phpBB Forum Software package.
 * French translation by Galixte (https://www.galixte.com)
 *
 * @copyright (c) 2016 dmzx <https://www.dmzx-web.net>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_COUNTDOWNHEADER_CONFIGURATION'				=> 'Paramètres',
	'ACP_COUNTDOWNHEADER_CONFIG_SAVED'				=> 'Les paramètres du compte à rebours ont été sauvegardés ave succès !',
	'ACP_COUNTDOWNHEADER_ENABLE'					=> 'Afficher le compte à rebours',
	'ACP_COUNTDOWNHEADER_ENABLE_EXPLAIN'			=> 'Permet d’activer l’affichage du compte à rebours dans l’entête du forum.',
	'ACP_COUNTDOWNHEADER_DATE' 						=> 'Date du compte à rebours',
	'ACP_COUNTDOWNHEADER_DATE_EXPLAIN'				=> 'Permet de définir la date de fin du compte à rebours, tel que par exemple : 2017/12/31 00:00:00.',
	'ACP_COUNTDOWNHEADER_TEXT_BIG' 					=> 'Texte de fin du compte à rebours à afficher en grand',
	'ACP_COUNTDOWNHEADER_TEXT_BIG_EXPLAIN'			=> 'Permet de saisir le texte qui sera affiché en grand & en haut du compte à rebours de l’entête du forum lorsque celui-ci sera terminé.',
	'ACP_COUNTDOWNHEADER_TEXT_SMALL'	 			=> 'Texte de fin du compte à rebours à afficher en petit',
	'ACP_COUNTDOWNHEADER_TEXT_SMALL_EXPLAIN' 		=> 'Permet de saisir le texte qui sera affiché en petit & en bas du compte à rebours de l’entête du forum lorsque celui-ci sera terminé.',
	'ACP_COUNTDOWNHEADER_TESTMODE' 					=> 'Activer le mode test',
	'ACP_COUNTDOWNHEADER_TESTMODE_EXPLAIN'			=> 'Permet d’afficher le compte à rebours uniquement aux administrateurs pour effectuer des tests.',
	'ACP_COUNTDOWNHEADER_URL' 						=> 'Adresse URL du compte à rebours',
	'ACP_COUNTDOWNHEADER_URL_EXPLAIN'				=> 'Permet de saisir l’adresse URL relative au forum qui sera affichée lorsque le compte à rebours de l’entête du forum sera terminé.<br />Exemple d’adresse à saisir : <em>viewtopic.php?f=2</em>.',
));
