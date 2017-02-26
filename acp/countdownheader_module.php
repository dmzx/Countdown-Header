<?php
/**
*
* @package phpBB Extension - Countdown Header
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\countdownheader\acp;

class countdownheader_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $user, $template, $request, $config;

		$this->tpl_name = 'acp_countdownheader_config';
		$this->page_title = $user->lang['ACP_COUNTDOWNHEADER'];
		add_form_key('acp_countdownheader_config');

		$submit = $request->is_set_post('submit');
		if ($submit)
		{
			if (!check_form_key('acp_countdownheader_config'))
			{
				trigger_error('FORM_INVALID');
			}
			$config->set('countdownheader_enable', 		$request->variable('countdownheader_enable', 0));
			$config->set('countdownheader_testmode', 	$request->variable('countdownheader_testmode', 0));
			$config->set('countdownheader_date', 		$request->variable('countdownheader_date', ''));
			$config->set('countdownheader_text_big', 	$request->variable('countdownheader_text_big', '', true));
			$config->set('countdownheader_text_small', 	$request->variable('countdownheader_text_small', '', true));
			$config->set('countdownheader_url', 		$request->variable('countdownheader_url', '', true));

			trigger_error($user->lang['COUNTDOWNHEADER_CONFIG_SAVED'] . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'COUNTDOWNHEADER_VERSION'			=> (isset($config['countdownheader_version'])) ? $config['countdownheader_version'] : '',
			'COUNTDOWNHEADER_ENABLE'			=> (!empty($config['countdownheader_enable'])) ? true : false,
			'COUNTDOWNHEADER_TESTMODE'			=> (!empty($config['countdownheader_testmode'])) ? true : false,
			'COUNTDOWNHEADER_DATE'				=> (isset($config['countdownheader_date'])) ? $config['countdownheader_date'] : '',
			'COUNTDOWNHEADER_TEXT_BIG'			=> (isset($config['countdownheader_text_big'])) ? $config['countdownheader_text_big'] : '',
			'COUNTDOWNHEADER_TEXT_SMALL'		=> (isset($config['countdownheader_text_small'])) ? $config['countdownheader_text_small'] : '',
			'COUNTDOWNHEADER_URL'				=> (isset($config['countdownheader_url'])) ? $config['countdownheader_url'] : '',
			'U_ACTION'							=> $this->u_action,
		));
	}
}
