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

class countdownheader_schema extends migration
{
	public function update_data()
	{
		return [
			// Add configs
			['config.add', ['countdownheader_enable', '']],
			['config.add', ['countdownheader_date', '']],
			['config.add', ['countdownheader_text_big', '']],
			['config.add', ['countdownheader_text_small', '']],
			['config.add', ['countdownheader_url', '']],
			['config.add', ['countdownheader_version', '1.0.0']],
			['config.add', ['countdownheader_testmode', '']],
		];
	}
}
