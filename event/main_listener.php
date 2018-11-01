<?php
/**
*
* Post Count on Index. An extension for the phpBB Forum Software package.
*
* @copyright (c) 2018, Restless Rancor, https://www.restlessrancor.com
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace restlessrancor\postcountonindex\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
    protected $user;
    protected $template;
	protected $language;
	protected $config;

    public function __construct(
		\phpbb\user $user, 
		\phpbb\template\twig\twig $template, 
		\phpbb\language\language $language,
		\phpbb\config\config $config)
    {
        $this->user = $user;
        $this->template = $template;
		$this->language = $language;
		$this->config = $config;
    }

    static public function getSubscribedEvents()
    {
        return array(
            'core.page_header_after'	=> 'pcoi_header',
        );
    }

	public function pcoi_header()
	{
		$this->language->add_lang('common', 'restlessrancor/postcountonindex'); 
		$posts = (int) $this->user->data['user_posts'];		
		$this->template->assign_vars(array(
			'S_USER_ID'			=> $this->user->data['user_id'],
			'S_USER_POST_COUNT' 	=> $this->language->lang('USER_POSTS', $posts),
			'S_PCOI_NAVBAR'		=> $this->config['pcoi_navbar'] ? true : false,
			'S_PCOI_FORUMLIST'	=> $this->config['pcoi_forumlist'] ? true : false,
			'S_PCOI_STATISTICS'	=> $this->config['pcoi_statistics'] ? true : false,
		));
	}
}
