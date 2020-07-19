<?php
App::uses('Commande', 'Model');

/**
 * Commande Test Case
 */
class CommandeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.commande',
		'app.user',
		'app.detail',
		'app.panier'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Commande = ClassRegistry::init('Commande');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Commande);

		parent::tearDown();
	}

}
