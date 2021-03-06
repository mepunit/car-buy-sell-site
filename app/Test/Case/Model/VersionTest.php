<?php
App::uses('Version', 'Model');

/**
 * Version Test Case
 *
 */
class VersionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.version',
		'app.model',
		'app.segmento',
		'app.planesnuevo',
		'app.modelo',
		'app.marca',
		'app.foto',
		'app.planesusado',
		'app.video',
		'app.cuota'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Version = ClassRegistry::init('Version');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Version);

		parent::tearDown();
	}

}
