<?php echo $this->Form->create('User'); ?>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('group_id');
	?>
<?php echo $this->Form->end(__('Submit')); ?>
