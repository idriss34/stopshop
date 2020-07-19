<?php
App::uses('Produit', 'Model');

/**
 * Produit Test Case
 */
class ProduitTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.produit',
		'app.categorie',
		'app.sex',
		'app.detail',
		'app.commande',
		'app.user',
		'app.category',
		'app.panier',
		'app.image'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Produit = ClassRegistry::init('Produit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Produit);

		parent::tearDown();
	}

}
