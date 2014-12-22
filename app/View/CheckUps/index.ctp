<div class="checkUps index">
	<h2><?php echo __('Check Ups'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('checked'); ?></th>
			<th><?php echo $this->Paginator->sort('version_id'); ?></th>
			<th><?php echo $this->Paginator->sort('version_applications_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($checkUps as $checkUp): ?>
	<tr>
		<td><?php echo h($checkUp['CheckUp']['id']); ?>&nbsp;</td>
		<td><?php echo h($checkUp['CheckUp']['description']); ?>&nbsp;</td>
		<td><?php echo h($checkUp['CheckUp']['checked']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($checkUp['Version']['name'], array('controller' => 'versions', 'action' => 'view', $checkUp['Version']['id'])); ?>
		</td>
		<td><?php echo h($checkUp['CheckUp']['version_applications_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $checkUp['CheckUp']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $checkUp['CheckUp']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $checkUp['CheckUp']['id']), array(), __('Are you sure you want to delete # %s?', $checkUp['CheckUp']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Check Up'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Versions'), array('controller' => 'versions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Version'), array('controller' => 'versions', 'action' => 'add')); ?> </li>
	</ul>
</div>
