<?php
class UsersController extends AppController{
	public $name = 'Users';

	public function register(){
		//Define User Roles to be passed to view
		//Better to be implemented through db table
		$userRole = array('Job Seeker'=>'Job Seeker', 'Employer'=>'Employer');
		$this->set('userRole',$userRole);

		if($this->request->is('post')){
			$this->User->create();
			
			if($this->User->save($this->request->data)){
				$this->Session->setFlash(__('You are now registered and may login'));
				return $this->redirect(array('controller'=>'jobs','action'=>'index'));
			} else {
				$this->Session->setFlash(__('Unable to create new user'));

			}
		}
	}

	/*
	 * Login User
	 */
	public function login(){
		if($this->request->is('post')){
			if($this->Auth->login()){
				return $this->redirect($this->Auth->redirect);
			} else {
				$this->Session->setFlash(__('Unable to login. Please supply correct password.'));
			}
		}
	}
}
?>
