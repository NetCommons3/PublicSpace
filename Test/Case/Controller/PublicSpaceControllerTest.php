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
		'app.SiteSetting',
		'app.SiteSettingValue',
		'plugin.PublicSpace.Room',
		'plugin.PublicSpace.Page',
		'plugin.PublicSpace.Box',
		'plugin.PublicSpace.BoxesPage',
		'plugin.PublicSpace.Container',
		'plugin.PublicSpace.ContainersPage',
		'plugin.PublicSpace.Language',
		'plugin.PublicSpace.LanguagesPage',
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->testAction('/public_space', array('return' => 'view'));
		$this->assertTextContains('<header id="container-header">', $this->view);
	}

}
