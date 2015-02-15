<?php
/**
 * Application level Controller
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array(
		'Session',
		'Auth' => array(
			'loginRedirect' => array(
				'controller' 	=> 'jobs',
				'action' 		=> 'index'
				),
			'logoutRedirect' => array(
				'controller' 	=> 'jobs',
				'action' 		=> 'index',
				'home'
				)
			)
		);

	// This function runs before login filter is applied
	public function beforeFilter(){
		//Define Public Actions
		$this->Auth->allow('index','browse','register');//this can be viewed by guest user before login filter is applied
	}

	// This funciton runs before rendering the content
	public function beforeRender(){
		$this->set('userData',$this->Auth->user()); //set data for display in layouts/default.ctp
	}
}
