<?php
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
		0	=> 'You don’t have any posts.',
		1	=> 'You have %d post.',
		2	=> 'You have %d posts!',
	),
));
