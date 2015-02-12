<?php echo $this->Form->create('User'); ?>
<fieldset>
	<legend><?php echo __('Create new user account'); ?></legend>
	<?php echo $this->Form->input('First_name');
	echo $this->Form->input('last_name');
	echo $this->Form->input('email',array('type' => 'email');
	echo $this->Form->input('username');
	echo $this->Form->input('password',array('type'=>'password'));
	echo $this->Form->input('confirm_password',array('type'=>'password'));
	echo $this->Form->input('role',array('type'=>'select','options'=>$userRole,'empty'=>'Select Type'));
	echo $this->Form->end('Register'); ?>
</fieldset>