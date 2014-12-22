<div class="usersHasCheckUps form">
<?php echo $this->Form->create('UsersHasCheckUp'); ?>
	<fieldset>
		<legend><?php echo __('Edit Users Has Check Up'); ?></legend>
	<?php
		echo $this->Form->input('users_id');
		echo $this->Form->input('check_ups_id');
		echo $this->Form->input('check_ups_version_id');
		echo $this->Form->input('check_ups_version_applications_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UsersHasCheckUp.users_id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('UsersHasCheckUp.users_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users Has Check Ups'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Check Ups'), array('controller' => 'check_ups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Check Ups'), array('controller' => 'check_ups', 'action' => 'add')); ?> </li>
	</ul>
</div>
