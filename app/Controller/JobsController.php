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

	/*
	 * Job Browse Method
	*/
	public function browse($category=null){
		//---------- Make categiries Variable available in View ------
		// Find all Categories

		//Set Category query options
		$options = array('order'=>array('Category.name'=>'asc'));
		//Get Categories
		$categories = $this->Job->Category->find('all',$options);
		//Set Categories
		$this->set('categories',$categories);


		//---------- Make jobs variable available in view ------------
		//Find jobs by category id

		//Init Conditions array
		$conditions = array();

		if($category != null){
			$conditions[]=array('Job.category_id like'=>'%'.$category.'%');
		}
		//Set query options
		$options = array(
			'order'=>array('Job.created'=>'desc'),
			'conditions'=>$conditions,
			'limit'=>8 );

		// Get Job Information
		$jobs = $this->Job->find('all', $options);
		$this->set('jobs',$jobs);
	}
}

?>