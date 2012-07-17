<div class="registerKeys form">
<?php echo $this->Form->create('RegisterKey'); ?>
	<fieldset>
		<legend><?php echo __('Edit Register Key'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('comment');
		echo $this->Form->input('key');
		echo $this->Form->input('group_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RegisterKey.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RegisterKey.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Register Keys'), array('action' => 'index')); ?></li>
	</ul>
</div>
