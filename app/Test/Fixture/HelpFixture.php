<?php
/**
 * HelpFixture
 *
 */
class HelpFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sr_no' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'language_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'table_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 80, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'action_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 80, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'help_text' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sequence' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1),
		'publish' => array('type' => 'boolean', 'null' => true, 'default' => '0', 'comment' => '0=Un 1=Pub'),
		'soft_delete' => array('type' => 'boolean', 'null' => true, 'default' => '0', 'comment' => '1=deleted'),
		'branchid' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'comment' => 'system defined automatically add', 'charset' => 'latin1'),
		'departmentid' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'comment' => 'system defined automatically add', 'charset' => 'latin1'),
		'created_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'comment' => 'system defined automatically add', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'system defined automatically add'),
		'modified_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'comment' => 'system defined automatically add', 'charset' => 'latin1'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'system defined automatically add'),
		'system_table_id' => array('type' => 'string', 'null' => true, 'default' => '0', 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'master_list_of_format_id' => array('type' => 'string', 'null' => true, 'default' => '0', 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'sr_no' => array('column' => 'sr_no', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '528c991e-7abc-4596-b830-14c9c6c3268c',
			'sr_no' => 1,
			'language_id' => 'Lorem ipsum dolor sit amet',
			'title' => 'Lorem ipsum dolor sit amet',
			'table_name' => 'Lorem ipsum dolor sit amet',
			'action_name' => 'Lorem ipsum dolor sit amet',
			'help_text' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'sequence' => 1,
			'publish' => 1,
			'soft_delete' => 1,
			'branchid' => 'Lorem ipsum dolor sit amet',
			'departmentid' => 'Lorem ipsum dolor sit amet',
			'created_by' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-11-20 16:42:30',
			'modified_by' => 'Lorem ipsum dolor sit amet',
			'modified' => '2013-11-20 16:42:30',
			'system_table_id' => 'Lorem ipsum dolor sit amet',
			'master_list_of_format_id' => 'Lorem ipsum dolor sit amet'
		),
	);

}