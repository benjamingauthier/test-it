<div class="usersHasApplications view">
<h2><?php echo __('Users Has Application'); ?></h2>
	<dl>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersHasApplication['Users']['id'], array('controller' => 'users', 'action' => 'view', $usersHasApplication['Users']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Applications'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersHasApplication['Applications']['name'], array('controller' => 'applications', 'action' => 'view', $usersHasApplication['Applications']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users Has Application'), array('action' => 'edit', $usersHasApplication['UsersHasApplication']['users_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Users Has Application'), array('action' => 'delete', $usersHasApplication['UsersHasApplication']['users_id']), array(), __('Are you sure you want to delete # %s?', $usersHasApplication['UsersHasApplication']['users_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Has Applications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Has Application'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applications'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
	</ul>
</div>
