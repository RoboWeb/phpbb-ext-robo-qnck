<?php
/**
 *
 * Robo QuickNick. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020, Tomasz Wolny, https://github.com/RoboWeb
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace robo\qnck\ucp;

/**
 * Robo QuickNick UCP module info.
 */
class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\robo\qnck\ucp\main_module',
			'title'		=> 'UCP_QNCK_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'UCP_QNCK',
					'auth'	=> 'ext_robo/qnck && acl_u_new_robo_qnck',
					'cat'	=> array('UCP_QNCK_TITLE')
				),
			),
		);
	}
}
