<?php
App::uses('Sex', 'Model');

/**
 * Sex Test Case
 */
class SexTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sex',
		'app.produit',
		'app.categorie',
		'app.sexe',
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
		$this->Sex = ClassRegistry::init('Sex');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sex);

		parent::tearDown();
	}

}
