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
		$suite = new CakeTestSuite();
		$suite->addTestDirectoryRecursive(dirname(__FILE__));
		return $suite;
	}
}
