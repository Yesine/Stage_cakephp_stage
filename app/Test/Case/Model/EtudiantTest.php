<?php
App::uses('Etudiant', 'Model');

/**
 * Etudiant Test Case
 */
class EtudiantTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.etudiant'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Etudiant = ClassRegistry::init('Etudiant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Etudiant);

		parent::tearDown();
	}

}
