<h3><?php echo $job['Job']['title']; ?></h3>
<h5>Job Details: </h5>
<ul id="details">
	<li><strong>Location:</strong> <?php echo $job['Job']['city']; ?>, <?php echo $job['Job']['state']; ?></li>
	<li><strong>Job Type:</strong> <?php echo $job['Type']['name']; ?></li>
	<li><strong>Description:</strong><?php echo $job['Job']['description']; ?></li>
	<li><strong>Contact Email:</strong><a href="mailto:<?php echo $job['Job']['contact_email']; ?>"><?php echo $job['Job']['contact_email']; ?></a></li>
</ul>
<p><a href="<?php echo $this->webroot; ?>jobs/browse">Back to Jobs Listings</a></p>


<?php if($userData['id'] == $job['Job']['user_id']): ?>
<br /><br />	
<?php echo $this->Html->link('Edit',array('action'=>'edit',$job['Job']['id'])); ?> | 
<?php echo $this->Form->postLink('Delete',array('action'=>'delete',$job['Job']['id']), array('confirm'=> 'Are you sure?')); ?>
<?php endif; ?>
