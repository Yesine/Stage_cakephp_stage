<?php
App::uses('Institut', 'Model');

/**
 * Institut Test Case
 */
class InstitutTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.institut'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Institut = ClassRegistry::init('Institut');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Institut);

		parent::tearDown();
	}

}
