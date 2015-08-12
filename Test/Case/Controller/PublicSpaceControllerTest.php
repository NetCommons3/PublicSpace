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
	public $fixtures = array(
		//'plugin.blocks.block',
		//'plugin.blocks.block_role_permission',
		//'plugin.boxes.box',
		//'plugin.boxes.boxes_page',
		//'plugin.containers.container',
		//'plugin.containers.containers_page',
		//'plugin.frames.frame',
		//'plugin.m17n.languages_page',
		//'plugin.m17n.language',
		//'plugin.net_commons.site_setting',
		//'plugin.pages.page',
		//'plugin.plugin_manager.plugin',
		//'plugin.plugin_manager.plugins_room',
		//'plugin.roles.default_role_permission',
		//'plugin.rooms.roles_rooms_user',
		//'plugin.rooms.room',
		//'plugin.rooms.room_role_permission',
		//'plugin.users.user',
	);

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
