<?php
/**
*/
class Job extends AppModel{
	public $name = 'Job';
	public $belongsTo = array('Type','Category');

	//Validation rules for the input fields
	public $validate = array(
		'title'	=> array(
			'notEmpty'	=> array(
				'rule'		=> 'notEmpty',							//firstname should alphanumeric
				'required'	=> TRUE,								//Required field
				'message'	=> 'Title should not be blank')	//If not alphanumeric, display message letters and numbers only
			),
		'company_name'	=> array(
			'notEmpty'		=> array(
				'rule'		=> 'notEmpty',
				'message'	=> 'Please enter the company name')
			),
		'category_id'	=> array(
			'notEmpty'		=> array(
				'rule'		=> 'notEmpty',
				'message'	=> 'Please enter the category of job')
			),
		'type_id'	=> array(
			'notEmpty'		=> array(
				'rule'		=> 'notEmpty',
				'message'	=> 'Please enter the type of job')
			),
		'city'	=> array(
			'alphaNumeric'	=> array(
				'rule'		=> 'alphaNumeric',
				'required'	=> TRUE,
				'message'	=> 'Letters and Numbers only'),
			'notEmpty'		=> array(
				'rule'		=> 'notEmpty',
				'message'	=> 'Please enter your city')
			),
		'state'	=> array(
			'alphaNumeric'	=> array(
				'rule'		=> 'alphaNumeric',
				'required'	=> TRUE,
				'message'	=> 'Letters and Numbers only'),
			'notEmpty'		=> array(
				'rule'		=> 'notEmpty',
				'message'	=> 'Please enter your Country Name')
			),
		'contact_email'	=> array(
			'email'	=> array(
				'rule'		=> 'email',
				'required'	=> TRUE,
				'message'	=> 'Please enter valid email address'),
			'notEmpty'		=> array(
				'rule'		=> 'notEmpty',
				'message'	=> 'Please enter your email address')
			)
		);
}

?>