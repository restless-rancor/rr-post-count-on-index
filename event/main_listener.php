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

use phpbb\user;
use phpbb\template\twig\twig;
use phpbb\language\language;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
    protected $user;
    protected $template;
	protected $language;

    public function __construct(user $user, twig $template, language $language)
    {
        $this->user = $user;
        $this->template = $template;
		$this->language = $language;
    }

    public static function getSubscribedEvents()
    {
        return array(
            'core.page_header_after'	=> 'pcoi_header',
        );
    }

	public function pcoi_header()
	{
		$this->language->add_lang('common', 'restlessrancor/postcountonindex'); 
		$posts = (int) $this->user->data['user_posts'];		
		$this->template->assign_vars([
			'S_USER_ID'		=> $this->user->data['user_id'],
			'USER_POST_COUNT' => $this->language->lang('USER_POSTS', $posts),
		]);
	}
}
