<?php
/**
 *
 * Robo QuickNick. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020, Tomasz Wolny, https://github.com/RoboWeb
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace robo\qnck\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Robo QuickNick Event listener.
 */
class main_listener implements EventSubscriberInterface
{
	/* @var \phpbb\language\language */
	protected $language;

	/**
	 * Constructor
	 *
	 * @param \phpbb\language\language	$language	Language object
	 */
	public function __construct(\phpbb\language\language $language)
	{
		$this->language = $language;
	}

	/**
	 * Load common language files during user setup
	 *
	 * @param \phpbb\event\data	$event	Event object
	 */
	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'robo/qnck',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	/**
	 * A sample PHP event
	 * Modifies the names of the forums on index
	 *
	 * @param \phpbb\event\data	$event	Event object
	 */
	public function display_forums_modify_template_vars($event)
	{
		// $forum_row = $event['forum_row'];
		// $forum_row['FORUM_NAME'] .= $this->language->lang('QNCK_EVENT');
		// $event['forum_row'] = $forum_row;
	}

	/**
	 * Add permissions to the ACP -> Permissions settings page
	 * This is where permissions are assigned language keys and
	 * categories (where they will appear in the Permissions table):
	 * actions|content|forums|misc|permissions|pm|polls|post
	 * post_actions|posting|profile|settings|topic_actions|user_group
	 *
	 * Developers note: To control access to ACP, MCP and UCP modules, you
	 * must assign your permissions in your module_info.php file. For example,
	 * to allow only users with the a_new_robo_qnck permission
	 * access to your ACP module, you would set this in your acp/main_info.php:
	 *    'auth' => 'ext_robo/qnck && acl_a_new_robo_qnck'
	 *
	 * @param \phpbb\event\data	$event	Event object
	 */
	public function add_permissions($event)
	{
		$permissions = $event['permissions'];

		$permissions['a_new_robo_qnck'] = array('lang' => 'ACL_A_NEW_ROBO_QNCK', 'cat' => 'misc');
		$permissions['m_new_robo_qnck'] = array('lang' => 'ACL_M_NEW_ROBO_QNCK', 'cat' => 'post_actions');
		$permissions['u_new_robo_qnck'] = array('lang' => 'ACL_U_NEW_ROBO_QNCK', 'cat' => 'post');

		$event['permissions'] = $permissions;
	}

	public static function getSubscribedEvents()
	{
		return array(
			'core.user_setup'							=> 'load_language_on_setup',
			'core.display_forums_modify_template_vars'	=> 'display_forums_modify_template_vars',
			'core.permissions'							=> 'add_permissions',
		);
	}
}
