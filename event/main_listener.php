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
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
    protected $user;
    protected $template;

    public function __construct(user $user, twig $template)
    {
        $this->user = $user;
        $this->template = $template;
    }

    public static function getSubscribedEvents()
    {
        return array(
			'core.user_setup'			=> 'load_language_on_setup',
            'core.page_header_after'	=> 'pcoi_header',
        );
    }

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'restlessrancor/postcountonindex',
			'lang_set' => 'postcountonindex',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function pcoi_header()
	{				
		$this->template->assign_vars([
			'S_USER_ID'		=> $this->user->data['user_id'],
			'USER_POST_COUNT' => $this->user->data['user_posts'],
		]);
	}
}
