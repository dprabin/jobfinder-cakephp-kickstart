<?php
class JobsController extends AppController{
	public $name = 'Jobs';

	/*
	 * Defualt Index method
	 */
	public function index(){
		//---------- Make categiries Variable available in View ------
		// Find all Categories
		//Set Category query options
		$options = array('order'=>array('Category.name'=>'asc'));
		//Get Categories
		$categories = $this->Job->Category->find('all',$options);
		//Set Categories
		$this->set('categories',$categories);


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
		//Init Conditions array
		$conditions = array();

		//Check keyword filter
		if($this->request->is('post')){
			if(!empty($this->request->data('keywords'))){
				$conditions[]=array('Job.title like'=>'%'.$this->request->data('keywords').'%');
			}
		}



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