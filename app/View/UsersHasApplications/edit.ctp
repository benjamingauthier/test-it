<div class="usersHasApplications form">
<?php echo $this->Form->create('UsersHasApplication'); ?>
	<fieldset>
		<legend><?php echo __('Edit Users Has Application'); ?></legend>
	<?php
		echo $this->Form->input('users_id');
		echo $this->Form->input('applications_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UsersHasApplication.users_id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('UsersHasApplication.users_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users Has Applications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applications'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
	</ul>
</div>
