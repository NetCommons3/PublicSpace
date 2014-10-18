<?php
/**
 * PublicSpace Controller
 *
 * @copyright Copyright 2014, NetCommons Project
 * @author Kohei Teraguchi <kteraguchi@netcommons.org>
 * @since 3.0.0.0
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('PublicSpaceAppController', 'PublicSpace.Controller');

/**
 * PublicSpace Controller
 *
 * @author Kohei Teraguchi <kteraguchi@netcommons.org>
 * @package NetCommons\PublicSpace\Controller
 */
class PublicSpaceController extends PublicSpaceAppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$paths = func_get_args();
		$path = implode('/', $paths);

		$this->set('path', $path);
	}
}
