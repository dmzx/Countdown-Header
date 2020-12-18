<?php
/**
*
* @package phpBB Extension - Countdown Header
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\countdownheader\migrations;

class countdownheader_1_0_2 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\dmzx\countdownheader\migrations\countdownheader_1_0_1',
		);
	}

	public function update_data()
	{
		return array(
			// Update config
			array('config.update', array('countdownheader_version', '1.0.2')),
		);
	}
}
