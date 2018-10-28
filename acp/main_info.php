<?php
/**
 *
 * Post Count on Index. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Restless Rancor, https://www.restlessrancor.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace restlessrancor\postcountonindex\acp;

/**
 * Post Count on Index ACP module info.
 */
class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\restlessrancor\postcountonindex\acp\main_module',
			'title'		=> 'PCOI_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'PCOI_SETTINGS',
					'auth'	=> 'ext_restlessrancor/postcountonindex && acl_a_board',
					'cat'	=> array('PCOI_TITLE')
				),
			),
		);
	}
}
