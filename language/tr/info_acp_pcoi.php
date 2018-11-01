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
	'PCOI_TITLE'			=> 'İndekste Gönderi Sayısı',
	'PCOI_SETTINGS'			=> 'Ayarlar',
	'PCOI_ENABLE_FAIL'		=> 'Eklentiyi aktifleştirme başarısız!',
	'PCOI_ENABLE_SUCCESS'	=> 'Başarıyla aktifleştirildi!',
	'PCOI_SAVED'			=> 'Ayarlar başarıyla kaydedildi!.',
	'PCOI_UPDATED'			=> 'İndekste Gönderi Sayısı yapılandırması güncellendi.',
	
	'PCOI_ENABLE_EXPLAIN'	=> 'Eğer kapatırsanız gönderi sayıları aşağıda seçtiğiniz konumda <strong>gösterilmeyecek</strong>.',
	'PCOI_NAVBAR'			=> '<em>navbar</em>da göster?',
	'PCOI_FORUMLIST'		=> '<em>Forum listesi</em>nin üzerinde göster?',
	'PCOI_STATISTICS'		=> '<em>Site istatistiklerinde</em>lerinde göster?',
));
