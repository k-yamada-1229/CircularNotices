<?php
/**
 * CircularNoticeTargetUserFixture
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Hirohisa Kuwata <Kuwata.Hirohisa@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

/**
 * CircularNoticeTargetUserFixture
 */
class CircularNoticeTargetUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID |  |  | '),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'circular notice target user id | 回覧先 | users.id | '),
		'circular_notice_content_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'circular notice content id | 回覧ID | circular_notice_contents.id | '),
		'read_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'read flag, 0: not read, 1: read yet | 閲覧フラグ  0:未読、1:既読 |  | '),
		'read_datetime' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'read datetime | 閲覧日時 |  | '),
		'reply_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'reply flag, 0: not reply, 1: reply yet | 回答フラグ  0:未回答、1:回答 |  | '),
		'reply_datetime' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'reply datetime | 回答日時 |  | '),
		'reply_text_value' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'circular notice reply value from text | 回覧回答（記述方式） |  | ', 'charset' => 'utf8'),
		'reply_selection_value' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'circular notice reply value from choices | 回覧回答（択一、選択方式） |  | ', 'charset' => 'utf8'),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'created user | 作成者 | users.id | '),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'created datetime | 作成日時 |  | '),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'modified user | 更新者 | users.id | '),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'modified datetime | 更新日時 |  | '),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_circular_notice_target_users_circular_notice_contents1_idx' => array('column' => 'circular_notice_content_id', 'unique' => 0),
			'fk_circular_notice_target_users_users1' => array('column' => 'user_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'circular_notice_content_id' => 1,
			'read_flag' => 1,
			'read_datetime' => '2015-03-09 09:25:24',
			'reply_flag' => 1,
			'reply_datetime' => '2015-03-09 09:25:24',
			'reply_text_value' => 'Lorem ipsum dolor sit amet',
			'reply_selection_value' => 'Lorem ipsum dolor sit amet',
			'created_user' => 1,
			'created' => '2015-03-09 09:25:24',
			'modified_user' => 1,
			'modified' => '2015-03-09 09:25:24'
		),
	);

}
