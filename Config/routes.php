<?php
/**
 * PublicSpace routes configuration
 *
 * @copyright Copyright 2014, NetCommons Project
 * @author Kohei Teraguchi <kteraguchi@netcommons.org>
 * @since 3.0.0.0
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 */

Router::connect('/', array('controller' => 'public_space', 'action' => 'index', 'plugin' => 'public_space'));
Router::connect('/public_space/*', array('controller' => 'public_space', 'action' => 'index', 'plugin' => 'public_space'));
