<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
//Configure::write('Routing.prefixes', array('admin'));
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'produits', 'action' =>  'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/login/*', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/register/*', array('controller' => 'users', 'action' => 'add'));
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	Router::connect('/admin/*', array('controller' => 'users', 'action' => 'index'));
	Router::connect('/shop/*', array('controller' => 'produits', 'action' => 'shop'));
	Router::connect('/about/*', array('controller' => 'pages', 'action' => 'about'));
	Router::connect('/features/*', array('controller' => 'paniers', 'action' => 'panier'));
	Router::connect('/editprofil/*', array('controller' => 'users', 'action' => 'editprofile'));
	Router::connect('/add_user/*', array('controller' => 'users', 'action' => 'add_user'));
	Router::connect('/verification/*', array('controller' => 'users', 'action' => 'verification'));
	Router::connect('/forget_password/*', array('controller' => 'users', 'action' => 'forgetpassword'));
	Router::connect('/reset_password/*', array('controller' => 'users', 'action' => 'reset_password'));



/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
