<div class="operatingSystems index">
	<h2><?php echo __('Operating Systems'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($operatingSystems as $operatingSystem): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($operatingSystem['test']['name'], array('controller' => 'applications', 'action' => 'view', $operatingSystem['test']['id'])); ?>
		</td>
		<td><?php echo h($operatingSystem['OperatingSystem']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $operatingSystem['OperatingSystem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $operatingSystem['OperatingSystem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $operatingSystem['OperatingSystem']['id']), array(), __('Are you sure you want to delete # %s?', $operatingSystem['OperatingSystem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Operating System'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Test Operating Systems'), array('controller' => 'users_test_operating_systems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Test Operating System'), array('controller' => 'users_test_operating_systems', 'action' => 'add')); ?> </li>
	</ul>
</div>
