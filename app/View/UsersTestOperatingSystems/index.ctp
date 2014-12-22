<div class="usersTestOperatingSystems index">
	<h2><?php echo __('Users Test Operating Systems'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('users_id'); ?></th>
			<th><?php echo $this->Paginator->sort('operating_systems_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usersTestOperatingSystems as $usersTestOperatingSystem): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($usersTestOperatingSystem['Users']['id'], array('controller' => 'users', 'action' => 'view', $usersTestOperatingSystem['Users']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($usersTestOperatingSystem['OperatingSystems']['name'], array('controller' => 'operating_systems', 'action' => 'view', $usersTestOperatingSystem['OperatingSystems']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usersTestOperatingSystem['UsersTestOperatingSystem']['users_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usersTestOperatingSystem['UsersTestOperatingSystem']['users_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usersTestOperatingSystem['UsersTestOperatingSystem']['users_id']), array(), __('Are you sure you want to delete # %s?', $usersTestOperatingSystem['UsersTestOperatingSystem']['users_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Users Test Operating System'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operating Systems'), array('controller' => 'operating_systems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operating Systems'), array('controller' => 'operating_systems', 'action' => 'add')); ?> </li>
	</ul>
</div>
