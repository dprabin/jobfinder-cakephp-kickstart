<?php
class UsersController extends AppController{
	public $name = 'Users';

	public function register(){
		//Define User Roles to be passed to view
		//Better to be implemented through db table
		$userRole = array('Job Seeker'=>'Job Seeker', 'Employer'=>'Employer');
		$this->set('userRole'=>$userRole);
	}

}
?>