<?php
/**
 * PublicSpace All Test Suite
 *
 * @copyright Copyright 2014, NetCommons Project
 * @author Kohei Teraguchi <kteraguchi@netcommons.org>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 */


/**
 * PublicSpace All Test Suite
 *
 * @author Kohei Teraguchi <kteraguchi@commonsnet.org>
 * @package NetCommons\PublicSpace\Test\Case
 * @codeCoverageIgnore
 */
class AllPublicSpaceTest extends CakeTestSuite {

/**
 * Suite defines all the tests for PublicSpace
 *
 * @return CakeTestSuite
 */
	public static function suite() {
		$plugin = preg_replace('/^All([\w]+)Test$/', '$1', __CLASS__);
		$suite = new CakeTestSuite(sprintf('All %s Plugin tests', $plugin));

		$directory = CakePlugin::path($plugin) . 'Test' . DS . 'Case';
		$Folder = new Folder($directory);
		$exceptions = array(
			//後で削除
			'PublicSpaceControllerTest.php',
		);
		$files = $Folder->tree(null, $exceptions, 'files');

		foreach ($files as $file) {
			if (substr($file, -4) === '.php') {
				$suite->addTestFile($file);
			}
		}
		return $suite;
	}
}
