<?php
/**
 * CircularNotices CakeMigration
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Hirohisa Kuwata <Kuwata.Hirohisa@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

/**
 * CircularNotices CakeMigration
 *
 * @author Hirohisa Kuwata <Kuwata.Hirohisa@withone.co.jp>
 * @package NetCommons\CircularNotices\Config\Migration
 */
class ModifyCircularNoticesTables extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'modify_circular_notices_tables';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'alter_field' => array(
				'circular_notice_target_users' => array(
					'reply_selection_value' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'circular notice reply value from choices | 回覧回答（択一、選択方式） |  | ', 'charset' => 'utf8'),
				),
			),
			'drop_field' => array(
				'circular_notice_settings' => array('posts_authority'),
			),
		),
		'down' => array(
			'alter_field' => array(
				'circular_notice_target_users' => array(
					'reply_selection_value' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'circular notice reply value from choices | 回覧回答（択一、選択方式） |  | ', 'charset' => 'utf8'),
				),
			),
			'create_field' => array(
				'circular_notice_settings' => array(
					'posts_authority' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => 'posts authority. 0:general cannot post, 1:general can post | 投稿権限 0:一般は投稿できない, 1:一般は投稿できる  |  |'),
				),
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		return true;
	}
}
