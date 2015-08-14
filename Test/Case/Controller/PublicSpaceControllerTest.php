<?php
/**
 * PublicSpaceController Test Case
 *
 * @copyright Copyright 2014, NetCommons Project
 * @author Kohei Teraguchi <kteraguchi@netcommons.org>
 * @since 3.0.0.0
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('YAControllerTestCase', 'NetCommons.TestSuite');

/**
 * Summary for PublicSpaceController Test Case
 */
class PublicSpaceControllerTest extends YAControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array();

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		Configure::write('Config.language', 'ja');
		YACakeTestCase::loadTestPlugin($this, 'NetCommons', 'TestPlugin');

		$this->testAction('/public_space/public_space/index', array('return' => 'view'));

		$this->assertTextContains('<div class="box-site">', $this->view);
	}

}
