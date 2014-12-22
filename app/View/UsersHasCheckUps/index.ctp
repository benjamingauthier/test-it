<div class="usersHasCheckUps index">
	<h2><?php echo __('Users Has Check Ups'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('users_id'); ?></th>
			<th><?php echo $this->Paginator->sort('check_ups_id'); ?></th>
			<th><?php echo $this->Paginator->sort('check_ups_version_id'); ?></th>
			<th><?php echo $this->Paginator->sort('check_ups_version_applications_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usersHasCheckUps as $usersHasCheckUp): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($usersHasCheckUp['Users']['id'], array('controller' => 'users', 'action' => 'view', $usersHasCheckUp['Users']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($usersHasCheckUp['CheckUps']['id'], array('controller' => 'check_ups', 'action' => 'view', $usersHasCheckUp['CheckUps']['id'])); ?>
		</td>
		<td><?php echo h($usersHasCheckUp['UsersHasCheckUp']['check_ups_version_id']); ?>&nbsp;</td>
		<td><?php echo h($usersHasCheckUp['UsersHasCheckUp']['check_ups_version_applications_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usersHasCheckUp['UsersHasCheckUp']['users_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usersHasCheckUp['UsersHasCheckUp']['users_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usersHasCheckUp['UsersHasCheckUp']['users_id']), array(), __('Are you sure you want to delete # %s?', $usersHasCheckUp['UsersHasCheckUp']['users_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Users Has Check Up'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Check Ups'), array('controller' => 'check_ups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Check Ups'), array('controller' => 'check_ups', 'action' => 'add')); ?> </li>
	</ul>
</div>
