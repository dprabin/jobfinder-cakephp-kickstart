<?php
class User extends AppModel{
	public $validate = array(
		'first_name'	=> array(
			'alphaNumeric'	=> array(
				'rule'		=> 'alphaNumeric',
				'required'	=> TRUE,
				'message'	=> 'Letters and Numbers only'),
			'notEmpty'		=> array(
				'rule'		=> 'notEmpty',
				'message'	=> 'Please enter your First Name')
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
}
?>