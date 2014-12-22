<div class="usersHasCheckUps view">
<h2><?php echo __('Users Has Check Up'); ?></h2>
	<dl>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersHasCheckUp['Users']['id'], array('controller' => 'users', 'action' => 'view', $usersHasCheckUp['Users']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Check Ups'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersHasCheckUp['CheckUps']['id'], array('controller' => 'check_ups', 'action' => 'view', $usersHasCheckUp['CheckUps']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Check Ups Version Id'); ?></dt>
		<dd>
			<?php echo h($usersHasCheckUp['UsersHasCheckUp']['check_ups_version_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Check Ups Version Applications Id'); ?></dt>
		<dd>
			<?php echo h($usersHasCheckUp['UsersHasCheckUp']['check_ups_version_applications_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users Has Check Up'), array('action' => 'edit', $usersHasCheckUp['UsersHasCheckUp']['users_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Users Has Check Up'), array('action' => 'delete', $usersHasCheckUp['UsersHasCheckUp']['users_id']), array(), __('Are you sure you want to delete # %s?', $usersHasCheckUp['UsersHasCheckUp']['users_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Has Check Ups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Has Check Up'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Check Ups'), array('controller' => 'check_ups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Check Ups'), array('controller' => 'check_ups', 'action' => 'add')); ?> </li>
	</ul>
</div>
