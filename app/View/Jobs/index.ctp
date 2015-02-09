	<h3>Latest Job Listings</h3>
	<ul id="listings">
	<?php foreach($jobs as $job) : ?>
		<li>
			<div class="type"><span class="green"><?php echo $job['Type']['name'] ?></span></div>
			<div class="description">
				<h5><?php echo $job['Job']['title'] ?> (<?php echo $job['Job']['city'].', '.$job['Job']['state']; ?>)</h5>
				<span id="list_date">
					<?php echo $this->Time->format('F jS h:i A',$job['Job']['created']); ?>
				</span>
				<?php echo $this->Text->truncate($job['Job']['description'],210,array('ellipsis'=>'...','exact'=>false)); ?> 
				<i class="fa fa-plus"></i>
				<?php echo $this->Html->link('Read More',array('controller'=>'jobs','action'=>'view',$job['Job']['id'])); ?>
			</div>
		</li>
		
	<?php endforeach; ?>
	</ul>