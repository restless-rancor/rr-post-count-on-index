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
 * Post Count on Index ACP module.
 */
class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $request, $template, $user, $phpbb_log;

		// Add Language
		$user->add_lang_ext('restlessrancor/postcountonindex', 'common');
		
		// ACP/Style
		$this->tpl_name = 'acp_pcoi_body';
		
		// Page Title
		$this->page_title = $user->lang('PCOI_TITLE');
		
		// Form
		$form_name = 'postcountonindex_enable';
		add_form_key($form_name);
		
		$this->config = $config;
		$this->request = $request;

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key($form_name))
			{
				trigger_error('FORM_INVALID', E_USER_WARNING);
			}

			$this->config->set('pcoi_enable', $this->request->variable('pcoi_enable', 0));
			$this->config->set('pcoi_navbar', $this->request->variable('pcoi_navbar', 0));
			$this->config->set('pcoi_forumlist', $this->request->variable('pcoi_forumlist', 0));
			$this->config->set('pcoi_statistics', $this->request->variable('pcoi_statistics', 0));
			
			// Add to admin log
			$phpbb_log->add('admin', $user->data['user_id'], $user->ip, 'PCOI_UPDATED');
			
			trigger_error($user->lang('PCOI_SAVED') . adm_back_link($this->u_action));
		}

		// Assign to global template.
		$template->assign_vars(array(
			'PCOI_ENABLE'		=> (!empty($this->config['pcoi_enable'])) ? true : false,
			'PCOI_NAVBAR'		=> (!empty($this->config['pcoi_navbar'])) ? true : false,
			'PCOI_FORUMLIST'	=> (!empty($this->config['pcoi_forumlist'])) ? true : false,
			'PCOI_STATISTICS'	=> (!empty($this->config['pcoi_statistics'])) ? true : false,
			'U_ACTION'			=> $this->u_action,
		));
	}
}
