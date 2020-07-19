<?php
App::uses('Panier', 'Model');

/**
 * Panier Test Case
 */
class PanierTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.panier',
		'app.commande',
		'app.user',
		'app.detail',
		'app.produit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Panier = ClassRegistry::init('Panier');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Panier);

		parent::tearDown();
	}

}
