<?php
/**
*
* WTTU Extension for the phpBB Forum Software package.
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
* @copyright (c) 2016 Ather
* @license GNU General Public License, version 2 (GPL-2.0)
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
	
	'WTTU_TITLE'					=> 'Was dit onderwerp nuttig',
	'WTTU_CONFIG'					=> 'Instellingen',
	'WTTU_EXPLAIN'					=> 'hier kan je de extensie “Was dit onderwerp nuttig?” beheren. Je kan instellen welk type link dat wordt getoond of niet',
	'WTTU_SAVED'					=> 'Instellingen werden geupdate!',
	'WTTU_ENABLE'					=> 'Schakel “Was dit onderwerp nuttig?” extensie in.',
	'WTTU_ENABLE_EXPLAIN'			=> 'Dit zal de “Was dit onderwerp nuttig?” extensie inschakelen. Houd er rekening mee dat zelfs wanneer deze optie is ingeschakeld en alle andere opties zijn uitgeschakeld deze extensie niet zal functioneren.',
	'WTTU_LINK_ENABLE'				=> 'Schakel link modus in',
	'WTTU_LINK_EXPLAIN'				=> 'Deze optie zal link naar onderwerp in simpele link inschakelen',
	'WTTU_BBCODE_ENABLE'			=> 'Schakel BBcode modus in',
	'WTTU_BBCODE_EXPLAIN'			=> 'Deze optie zal link naar onderwerp in BBcode formaat inschakelen',
	'WTTU_HTML_ENABLE'				=> 'Schakel HTML in',
	'WTTU_HTML_EXPLAIN'				=> 'Deze optie zal link naar onderwerp in HTML formaat inschakelen',
	'WTTU_TYPE'						=> 'Type van URL',
	'WTTU_TYPE_EXPLAIN'				=> 'Selecteer welk type van URL je wil<br /><a href="https://www.evoworks.nl/wiki/canonical-url/" target="_blank">Wat is een canonieke url?</a>',
	'SIMPLE'						=> 'Simpel',
	'CANONICAL'						=> 'canoniek',
	
	
));
