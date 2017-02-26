<?php
/**
*
* @package phpBB Extension - Countdown Header
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\countdownheader\acp;

class countdownheader_info
{
	function module()
	{
		 return array(
			'filename'	=> '\dmzx\countdownheader\acp\countdownheader_module',
			'title'		=> 'ACP_COUNTDOWNHEADER',
			'modes'		=> array(
			'config'	=> array('title' => 'ACP_COUNTDOWNHEADER_CONFIG', 'auth' => 'ext_dmzx/countdownheader && acl_a_board', 'cat' => array('ACP_COUNTDOWNHEADER')),
			),
		);
	}
}
