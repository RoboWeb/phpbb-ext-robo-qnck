<?php
/**
 *
 * Robo QuickNick. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020, Tomasz Wolny, https://github.com/RoboWeb
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace robo\qnck\acp;

/**
 * Robo QuickNick ACP module info.
 */
class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\robo\qnck\acp\main_module',
			'title'		=> 'ACP_QNCK_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_QNCK',
					'auth'	=> 'ext_robo/qnck && acl_a_new_robo_qnck',
					'cat'	=> array('ACP_QNCK_TITLE')
				),
			),
		);
	}
}
