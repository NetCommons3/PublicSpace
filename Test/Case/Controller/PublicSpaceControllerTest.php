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

App::uses('PublicSpaceController', 'PublicSpace.Controller');

/**
 * Summary for PublicSpaceController Test Case
 */
class PublicSpaceControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.public_space.page'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$pagesController = $this->generate('Pages.Pages');
		$pagesController->response = $this->getMock('CakeResponse');
		$pagesController->response
			->expects($this->any())
			->method('send')
			->will($this->returnValue(true));

		$siteSetting = $this->getMockForModel('SiteSetting');

		$result = $this->testAction('/public_space/index');
	}
}
