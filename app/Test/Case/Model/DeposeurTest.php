<?php
App::uses('Deposeur', 'Model');

/**
 * Deposeur Test Case
 */
class DeposeurTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.deposeur'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Deposeur = ClassRegistry::init('Deposeur');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Deposeur);

		parent::tearDown();
	}

}
