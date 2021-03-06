<?php
/**
 * PublicSpaceComponent::accessCheck()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsControllerTestCase', 'NetCommons.TestSuite');

/**
 * PublicSpaceComponent::accessCheck()のテスト
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\PublicSpace\Test\Case\Controller\Component\PublicSpaceComponent
 */
class PublicSpaceComponentAccessCheckTest extends NetCommonsControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array();

/**
 * Plugin name
 *
 * @var string
 */
	public $plugin = 'public_space';

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		//テストプラグインのロード
		NetCommonsCakeTestCase::loadTestPlugin($this, 'PublicSpace', 'TestPublicSpace');
		//テストコントローラ生成
		$this->generateNc('TestPublicSpace.TestPublicSpaceComponent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		//ログアウト
		TestAuthGeneral::logout($this);

		parent::tearDown();
	}

/**
 * accessCheck()のテスト
 *
 * @return void
 */
	public function testAccessCheck() {
		//ログイン
		TestAuthGeneral::login($this);

		//テストアクション実行
		$this->_testGetAction('/test_public_space/test_public_space_component/index',
				array('method' => 'assertNotEmpty'), null, 'view');
		$pattern = '/' . preg_quote('Controller/Component/TestPublicSpaceComponent', '/') . '/';
		$this->assertRegExp($pattern, $this->view);

		//テストデータ
		$this->_mockForReturnTrue('Rooms.RolesRoomsUser', 'saveAccessed');

		//テスト実行
		$result = $this->controller->PublicSpace->accessCheck($this->controller);

		//チェック
		$this->assertTrue($result);
	}

/**
 * accessCheck()のテスト(ログインなし)
 *
 * @return void
 */
	public function testAccessCheckWOLogin() {
		//テストアクション実行
		$this->_testGetAction('/test_public_space/test_public_space_component/index',
				array('method' => 'assertNotEmpty'), null, 'view');
		$pattern = '/' . preg_quote('Controller/Component/TestPublicSpaceComponent', '/') . '/';
		$this->assertRegExp($pattern, $this->view);

		//テストデータ
		$this->_mockForReturnTrue('Rooms.RolesRoomsUser', 'saveAccessed', 0);

		//テスト実行
		$result = $this->controller->PublicSpace->accessCheck($this->controller);

		//チェック
		$this->assertTrue($result);
	}

}
