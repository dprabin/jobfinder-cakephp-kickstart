<?php
class JobsController extends AppController{
	public $name = 'Jobs';

	/*
	 * Defualt Index method
	 */
	public function index(){
		//Set Query options
		$options = array(
			'order' => array('Job.created' => 'asc')
			);
		// Get Job Information
		$jobs = $this->Job->find('all', $options);

		$this->set('jobs',$jobs);
	}

}

?>