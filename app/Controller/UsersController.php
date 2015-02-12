<?php
App::uses('AppModel','Model');
App::uses('SimplePasswordHasher','Controller/Component/Auth');

class UsersController extends AppController{
	public $name = 'Users';

	/*
	 * Function to hash password before saving it
	 */
	public function beforeSave($options = array()){
		if(isset($this->data[$this->alias]['password'])){
			$passwordHasher = new SimplePasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
		}
		return true;
	}

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

}
?>