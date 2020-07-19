<?php
App::uses('Detail', 'Model');

/**
 * Detail Test Case
 */
class DetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detail',
		'app.commande',
		'app.user',
		'app.category',
		'app.panier',
		'app.produit',
		'app.categorie',
		'app.sex',
		'app.image'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Detail = ClassRegistry::init('Detail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Detail);

		parent::tearDown();
	}

}
