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
	'USER_POSTS'	=> array(
		0	=> 'Hiç gönderiniz yok.',
		1	=> '%d gönderiniz var.',
		2	=> '%d gönderiniz var!',
	),
));
