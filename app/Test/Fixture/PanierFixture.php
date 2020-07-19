<?php
/**
 * Panier Fixture
 */
class PanierFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'produit_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'produit_prix' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'quantite' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'commande_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'produit_name' => 'Lorem ipsum dolor sit amet',
			'produit_prix' => 1,
			'quantite' => 1,
			'commande_id' => 1,
			'created' => '2020-02-05 16:05:00'
		),
	);

}
