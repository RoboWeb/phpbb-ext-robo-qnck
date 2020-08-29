<?php
/**
 *
 * Robo QuickNick. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020, Tomasz Wolny, https://github.com/RoboWeb
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace robo\qnck\migrations;

class install_ucp_module extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		$sql = 'SELECT module_id
			FROM ' . $this->table_prefix . "modules
			WHERE module_class = 'ucp'
				AND module_langname = 'UCP_QNCK_TITLE'";
		$result = $this->db->sql_query($sql);
		$module_id = $this->db->sql_fetchfield('module_id');
		$this->db->sql_freeresult($result);

		return $module_id !== false;
	}

	public static function depends_on()
	{
		return array('\robo\qnck\migrations\install_sample_schema');
	}

	public function update_data()
	{
		return array(
			array('module.add', array(
				'ucp',
				0,
				'UCP_QNCK_TITLE'
			)),
			array('module.add', array(
				'ucp',
				'UCP_QNCK_TITLE',
				array(
					'module_basename'	=> '\robo\qnck\ucp\main_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
