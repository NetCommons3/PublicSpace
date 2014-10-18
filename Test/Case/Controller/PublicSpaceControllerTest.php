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
		'app.site_setting',
		'plugin.pages.room',
		'plugin.pages.page',
		'plugin.pages.container',
		'plugin.pages.containers_page',
		'plugin.pages.languages_page',
		'plugin.pages.language',
		'plugin.pages.box',
		'plugin.pages.boxes_page',
		'plugin.pages.frame',
		'plugin.pages.plugin',
		'plugin.pages.plugins_room',
		'plugin.pages.block',
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->testAction('/public_space/public_space/index', array('return' => 'view'));
		$this->assertTextContains('<header id="container-header">', $this->view);
	}

}
