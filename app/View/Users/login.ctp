<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
<fieldset>
	<legend><?php echo __('Please enter your Username and Password'); ?></legend>
	<?php 
	echo $this->Form->input('username');
	echo $this->Form->input('password',array('type'=>'password'));
	echo $this->Form->end('Login'); ?>
</fieldset>
</div>