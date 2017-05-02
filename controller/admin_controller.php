<?php
/**
*
* @package phpBB Extension - Countdown Header
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\countdownheader\controller;

use phpbb\config\config;
use phpbb\template\template;
use phpbb\log\log_interface;
use phpbb\user;
use phpbb\request\request_interface;

class admin_controller
{
	/** @var config */
	protected $config;

	/** @var template */
	protected $template;

	/** @var log_interface */
	protected $log;

	/** @var user */
	protected $user;

	/** @var request_interface */
	protected $request;

	/** @var string Custom form action */
	protected $u_action;

	/**
	 * Constructor
	 *
	 * @param config				$config
	 * @param template				$template
	 * @param log_interface			$log
	 * @param user					$user
	 * @param request_interface		$request
	 */
	public function __construct(
		config $config,
		template $template,
		log_interface $log,
		user $user,
		request_interface $request
	)
	{
		$this->config 		= $config;
		$this->template 	= $template;
		$this->log 			= $log;
		$this->user 		= $user;
		$this->request 		= $request;
	}

	/**
	* Display the options a user can configure for this extension
	*
	* @return null
	* @access public
	*/
	public function display_options()
	{
		add_form_key('acp_countdownheader_config');

		// Is the form being submitted to us?
		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('acp_countdownheader_config'))
			{
				trigger_error($this->user->lang['FORM_INVALID'] . adm_back_link($this->u_action), E_USER_WARNING);
			}

			// Set the options the user configured
			$this->set_options();

			// Add option settings change action to the admin log
			$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_COUNTDOWNHEADER_SAVED');

			trigger_error($this->user->lang['ACP_COUNTDOWNHEADER_CONFIG_SAVED'] . adm_back_link($this->u_action));
		}

		$this->template->assign_vars(array(
			'COUNTDOWNHEADER_VERSION'		=> $this->config['countdownheader_version'],
			'COUNTDOWNHEADER_ENABLE'		=> $this->config['countdownheader_enable'],
			'COUNTDOWNHEADER_TESTMODE'		=> $this->config['countdownheader_testmode'],
			'COUNTDOWNHEADER_DATE'			=> $this->config['countdownheader_date'],
			'COUNTDOWNHEADER_TEXT_BIG'		=> $this->config['countdownheader_text_big'],
			'COUNTDOWNHEADER_TEXT_SMALL'	=> $this->config['countdownheader_text_small'],
			'COUNTDOWNHEADER_URL'			=> $this->config['countdownheader_url'],
			'U_ACTION'						=> $this->u_action,
		));
	}

	/**
	* Set the options a user can configure
	*
	* @return null
	* @access protected
	*/
	protected function set_options()
	{
		$this->config->set('countdownheader_enable', $this->request->variable('countdownheader_enable', 0));
		$this->config->set('countdownheader_testmode', $this->request->variable('countdownheader_testmode', 0));
		$this->config->set('countdownheader_date', $this->request->variable('countdownheader_date', ''));
		$this->config->set('countdownheader_text_big', $this->request->variable('countdownheader_text_big', '', true));
		$this->config->set('countdownheader_text_small', $this->request->variable('countdownheader_text_small', '', true));
		$this->config->set('countdownheader_url', $this->request->variable('countdownheader_url', '', true));
	}

	/**
	* Set page url
	*
	* @param string $u_action Custom form action
	* @return null
	* @access public
	*/
	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}
