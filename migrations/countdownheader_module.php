<?php
/**
*
* @package phpBB Extension - Countdown Header
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\countdownheader\migrations;

use phpbb\db\migration\migration;

class countdownheader_module extends migration
{
	public function update_data()
	{
		return [
			['module.add', ['acp', 'ACP_CAT_DOT_MODS', 'ACP_COUNTDOWNHEADER']],
			['module.add', [
				'acp', 'ACP_COUNTDOWNHEADER', ['module_basename'	=> '\dmzx\countdownheader\acp\countdownheader_module', 'modes'	=> ['config'],
				],
			]],
		];
	}
}
