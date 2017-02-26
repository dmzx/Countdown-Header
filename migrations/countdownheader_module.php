<?php
/**
*
* @package phpBB Extension - Countdown Header
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\countdownheader\migrations;

class countdownheader_module extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_COUNTDOWNHEADER')),
			array('module.add', array(
				'acp', 'ACP_COUNTDOWNHEADER', array('module_basename'	=> '\dmzx\countdownheader\acp\countdownheader_module', 'modes'	=> array('config'),
				),
			)),
		);
	}
}
