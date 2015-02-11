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

		//Set Title
		$this->set('title_for_layout', 'JobFinds | Welcome');

		$this->set('jobs',$jobs);
	}

	/*
	 * Job Browse Method
	*/
	public function browse($category=null){
		//Init Conditions array
		$conditions = array();
//echo $this->request->data('keywords').'<br><br>'.$this->request->data('states').'<br><br>'.$this->request->data('category');//die();

		//Check keyword filter
		if($this->request->is('post')) {
			if($this->request->data('keywords') != '') { //(!empty($this->request->data('keyword'))) {
				$conditions[]=array( 'or' => array(
					'Job.title like'=>'%'.$this->request->data('keywords').'%',
					'Job.description like'=>'%'.$this->request->data('keywords').'%'
					));
			}
		
			//Check state filter
			if($this->request->data('states') != 'Select Country' && $this->request->data('states') != '') {
				$conditions[]=array( 'Job.state like'=>'%'.$this->request->data('states').'%');
			}

			//Check category filter
			if($this->request->data('category') != 'Select Category' && $this->request->data('category') != '') {
				$conditions[]=array( 'Job.category_id like'=>'%'.$this->request->data('category').'%');
			}
		} 
		//print_r($conditions);die();

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

		//Set Title
		$this->set('title_for_layout', 'JobFinds | Browse Jobs');

		// Get Job Information
		$jobs = $this->Job->find('all', $options);
		$this->set('jobs',$jobs);
	}

	/*
	 * View Single Job
	 */
	public function details($id){
		if(!$id){
			throw new NotFoundException(__('Invalid Job Listing'));
		}

		$job = $this->Job->findById($id);

		if(!$job){
			throw new NotFoundException(__('Invalid Job Listing'));
		}

		//Set Title
		$this->set('title_for_layout', $job['Job']['title']);
		$this->Set('job',$job);
	}

	/*
	 * Add Job
	 */
	public function add(){
		//Get Categories for select list
		$options = array('order'=>array('Category.name'=>'asc'));
		$categories = $this->Job->Category->find('list',$options);
		$this->set('categories',$categories);

		//Get Categories for select list
		$types = $this->Job->Type->find('list');
		$this->set('types',$types);

		if($this->request->is('post')) {

		}

	}
}

?>