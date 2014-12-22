<div class="versions index">
	<h2><?php echo __('Versions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('applications_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($versions as $version): ?>
	<tr>
		<td><?php echo h($version['Version']['id']); ?>&nbsp;</td>
		<td><?php echo h($version['Version']['name']); ?>&nbsp;</td>
		<td><?php echo h($version['Version']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($version['Applications']['name'], array('controller' => 'applications', 'action' => 'view', $version['Applications']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $version['Version']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $version['Version']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $version['Version']['id']), array(), __('Are you sure you want to delete # %s?', $version['Version']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Version'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applications'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Check Ups'), array('controller' => 'check_ups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Check Up'), array('controller' => 'check_ups', 'action' => 'add')); ?> </li>
	</ul>
</div>
