<?php
/**
 *
 * Post Count on Index. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Restless Rancor, https://www.restlessrancor.com
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

$lang = array_merge($lang, array(
	'PCOI_TITLE'			=> 'Post Count on Index',
	'PCOI_SETTINGS'			=> 'Settings',
	'PCOI_ENABLE_FAIL'		=> 'Failed to enable the extension!',
	'PCOI_ENABLE_SUCCESS'	=> 'Enabled succesfully!',
	'PCOI_SAVED'			=> 'Settings have been saved successfully!.',
	'PCOI_UPDATED'			=> 'Updated Post Count on Index configuration.',
	
	'PCOI_ENABLE'			=> 'Enable Post Count on Index',
	'PCOI_ENABLE_EXPLAIN'	=> 'If disabled, post count will <strong>not</strong> display in the location chosen below.',
	'PCOI_NAVBAR'			=> 'Display in <em>navbar?</em>',
	'PCOI_FORUMLIST'		=> 'Diplsay above <em>forumlist?</em>',
	'PCOI_STATISTICS'		=> 'Display in <em>board statistics?</em>',
));
