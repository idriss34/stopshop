<?php
/**
 * Detail Fixture
 */
class DetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'commande_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'produit_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'size' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'qte' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'prixtot' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'color' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'commande_id' => 1,
			'produit_id' => 1,
			'size' => 'Lorem ipsum dolor sit amet',
			'qte' => 1,
			'prixtot' => 1,
			'color' => 'Lorem ipsum dolor sit amet'
		),
	);

}
