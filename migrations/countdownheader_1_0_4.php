<?php
/**
*
* @package phpBB Extension - Countdown Header
* @copyright (c) 2024 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\countdownheader\migrations;

use phpbb\db\migration\migration;

class countdownheader_1_0_4 extends migration
{
	static public function depends_on()
	{
		return [
			'\dmzx\countdownheader\migrations\countdownheader_1_0_3',
		];
	}

	public function update_data()
	{
		return [
			// Update config
			['config.update', ['countdownheader_version', '1.0.4']],
		];
	}
}
