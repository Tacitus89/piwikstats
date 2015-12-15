<?php
/**
*
* @package Piwik Statistic for phpBB3.1
* @copyright (c) 2015 Marco Candian (tacitus@strategie-zone.de)
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

$lang = array_merge($lang, array(
    'ACP_PIWIK_EXT_CONF_SETTINGS'       => 'Erweiterung Einstellungen',
	'ACP_PIWIK_EXT_ACTIVATE'			=> 'Piwik Statistik Aktiviert',
	'ACP_PIWIK_SETTINGS'				=> 'Piwik Einstellungen',
	'ACP_PIWIK_STATS_SETTINGS'			=> 'Piwik Statistik Einstellungen',
	'ACP_PIWIK_STATS_ACTIVATE'			=> 'Piwik Statistik Seite Aktiviert',
    'ACP_PIWIK_URL'                     => 'Piwik URL',
    'ACP_PIWIK_URL_EXPLAIN'             => 'Die URL zu deinem Piwik Ordner, zum Beispiel: http://www.example.com/piwik',
	'ACP_PIWIK_TOKEN'                   => 'Piwik Token',
	'ACP_PIWIK_TOKEN_EXPLAIN'			=> 'Gebe "anonymous" ein, wenn es die View Rechte hat. Ansonsten musst du ein token_auth von einem Benutzer eingeben, der die View Rechte besitzt.',
    'ACP_PIWIK_SITE_ID'                 => 'Seiten ID',
    'ACP_PIWIK_SITE_ID_EXPLAIN'         => 'Gebe eine einzelne Seiten-ID oder "all" für alle Seiten ein.',
    'ACP_PIWIK_TIME'                    => 'Zeitraum',
    'ACP_PIWIK_TIME_EXPLAIN'            => 'Für die Informationen auf der Piwik Statistik Seite',
	'ACP_PIWIK_STATS_INDEX_ACTIVATE'    => 'Piwik Statistik auf dem Index aktiviert',
    'ACP_PIWIK_TIME_INDEX'              => 'Zeitraum auf dem Index',
    'ACP_PIWIK_TIME_INDEX_EXPLAIN'      => 'Für die Informationen auf dem Index',
	'ACP_PIWIK_CODE'                    => 'Piwik Tracking-Code',
    'ACP_PIWIKSTATS_SETTINGS_SAVED'     => 'Einstellungen sind gespiechert.'
));
