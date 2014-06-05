<?php
App::uses('FbConf', 'Facebook.Model');

/**
 * FbConf Test Case
 *
 */
class FbConfTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.facebook.fb_conf'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FbConf = ClassRegistry::init('Facebook.FbConf');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FbConf);

		parent::tearDown();
	}

}
