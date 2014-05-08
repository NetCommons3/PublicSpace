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
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$pagesController = $this->generate('Pages.Pages',
			array(
				'methods' => 'index',
				'models' => 'SiteSetting'
			)
		);
		$pagesController
			->expects($this->once())
			->method('index')
			->will($this->returnValue(true));

		$this->testAction('/public_space');
	}
}
