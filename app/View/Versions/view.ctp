<div class="versions view">
<h2><?php echo __('Version'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($version['Version']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($version['Version']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($version['Version']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Applications'); ?></dt>
		<dd>
			<?php echo $this->Html->link($version['Applications']['name'], array('controller' => 'applications', 'action' => 'view', $version['Applications']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Version'), array('action' => 'edit', $version['Version']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Version'), array('action' => 'delete', $version['Version']['id']), array(), __('Are you sure you want to delete # %s?', $version['Version']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Versions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Version'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applications'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Check Ups'), array('controller' => 'check_ups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Check Up'), array('controller' => 'check_ups', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Check Ups'); ?></h3>
	<?php if (!empty($version['CheckUp'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Checked'); ?></th>
		<th><?php echo __('Version Id'); ?></th>
		<th><?php echo __('Version Applications Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($version['CheckUp'] as $checkUp): ?>
		<tr>
			<td><?php echo $checkUp['id']; ?></td>
			<td><?php echo $checkUp['description']; ?></td>
			<td><?php echo $checkUp['checked']; ?></td>
			<td><?php echo $checkUp['version_id']; ?></td>
			<td><?php echo $checkUp['version_applications_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'check_ups', 'action' => 'view', $checkUp['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'check_ups', 'action' => 'edit', $checkUp['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'check_ups', 'action' => 'delete', $checkUp['id']), array(), __('Are you sure you want to delete # %s?', $checkUp['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Check Up'), array('controller' => 'check_ups', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
