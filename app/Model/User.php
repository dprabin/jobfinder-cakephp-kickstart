<?php
App::uses('AppModel','Model');
App::uses('SimplePasswordHasher','Controller/Component/Auth');

class User extends AppModel{
	public $name = 'User';

	/*
	 * Function to hash password before saving it
	 * This function is executed before any save action is executed
	 * in users model
	 */
	public function beforeSave($options = array()) {
		if(isset($this->data[$this->alias]['password'])){ //if data has password field set
			$passwordHasher = new SimplePasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']); //hash that password
		}
		return true;
	}

	//Validation rules for the input fields
	public $validate = array(
		'first_name'	=> array(
			'alphaNumeric'	=> array(
				'rule'		=> 'alphaNumeric',				//firstname should alphanumeric
				'required'	=> TRUE,						//Required field
				'message'	=> 'Letters and Numbers only'),	//If not alphanumeric, display message letters and numbers only
			'notEmpty'		=> array(						//Rules when field is empty
				'rule'		=> 'notEmpty',					//If the field is empty
				'message'	=> 'Please enter your First Name') //Display Please enter your first name
			),
		'last_name'	=> array(
			'alphaNumeric'	=> array(
				'rule'		=> 'alphaNumeric',
				'required'	=> TRUE,
				'message'	=> 'Letters and Numbers only'),
			'notEmpty'		=> array(
				'rule'		=> 'notEmpty',
				'message'	=> 'Please enter your Last Name')
			),
		'email'	=> array(
			'email'	=> array(
				'rule'		=> 'email',
				'required'	=> TRUE,
				'message'	=> 'Please enter valid email address'),
			'notEmpty'		=> array(
				'rule'		=> 'notEmpty',
				'message'	=> 'Please enter your email address')
			),
		'password'	=> array(
			'notEmpty'		=> array(
				'rule'		=> 'notEmpty',
				'message'	=> 'Please enter the password')
			),
		'confirm_password'	=> array(
			'notEmpty'		=> array(
				'rule'		=> 'notEmpty',
				'message'	=> 'Please confirm the password'),
			'matchPasswords'	=> array(
				'rule'		=> array('identicalFieldValues','password'),
				'message'	=> 'Your passwords do not match'
				)
			)
		);

	/*
	 * Custom Validation function - Match field Values
	 */
	function identicalFieldValues($field=array(),$compare_field=null){
		foreach($field as $key => $value){
			$v1 = $value;
			$v2 = $this->data[$this->name][$compare_field];
			if($v1 !== $v2){
				return FALSE;
			} else {
				continue;
			}
		}
		return TRUE;
	}
}
?>