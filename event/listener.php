<?php
/**
*
* @package phpBB Extension - Countdown Header
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\countdownheader\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\config\config */
	protected $config;

	/**
	* Constructor
	*
	* @param \phpbb\template\template		 	$template
	* @param \phpbb\config\config				$config
	*
	*/
	public function __construct(
		\phpbb\template\template $template,
		\phpbb\config\config $config)
	{
		$this->template = $template;
		$this->config = $config;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'	=> 'load_language_on_setup',
			'core.page_header'	=> 'page_header',
		);
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'dmzx/countdownheader',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function page_header($event)
	{
		$this->template->assign_vars(array(
			'COUNTDOWNHEADER_ENABLE'			=> $this->config['countdownheader_enable'] ? true : false,
			'COUNTDOWNHEADER_TESTMODE'			=> $this->config['countdownheader_testmode'] ? true : false,
			'COUNTDOWNHEADER_DATE'				=> $this->config['countdownheader_date'],
			'COUNTDOWNHEADER_TEXT_BIG'			=> $this->config['countdownheader_text_big'],
			'COUNTDOWNHEADER_TEXT_SMALL'		=> $this->config['countdownheader_text_small'],
			'COUNTDOWNHEADER_URL'				=> $this->config['countdownheader_url'],
		));
	}
}
