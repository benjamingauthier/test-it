<div class="operatingSystems view">
<h2><?php echo __('Operating System'); ?></h2>
	<dl>
		<dt><?php echo __('Test'); ?></dt>
		<dd>
			<?php echo $this->Html->link($operatingSystem['test']['name'], array('controller' => 'applications', 'action' => 'view', $operatingSystem['test']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($operatingSystem['OperatingSystem']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Operating System'), array('action' => 'edit', $operatingSystem['OperatingSystem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Operating System'), array('action' => 'delete', $operatingSystem['OperatingSystem']['id']), array(), __('Are you sure you want to delete # %s?', $operatingSystem['OperatingSystem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Operating Systems'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operating System'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Test Operating Systems'), array('controller' => 'users_test_operating_systems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Test Operating System'), array('controller' => 'users_test_operating_systems', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Applications'); ?></h3>
	<?php if (!empty($operatingSystem['Applications'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Current Version'); ?></th>
		<th><?php echo __('Operating Systems Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($operatingSystem['Applications'] as $applications): ?>
		<tr>
			<td><?php echo $applications['id']; ?></td>
			<td><?php echo $applications['name']; ?></td>
			<td><?php echo $applications['description']; ?></td>
			<td><?php echo $applications['current_version']; ?></td>
			<td><?php echo $applications['operating_systems_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'applications', 'action' => 'view', $applications['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'applications', 'action' => 'edit', $applications['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'applications', 'action' => 'delete', $applications['id']), array(), __('Are you sure you want to delete # %s?', $applications['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Applications'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users Test Operating Systems'); ?></h3>
	<?php if (!empty($operatingSystem['UsersTestOperatingSystem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Users Id'); ?></th>
		<th><?php echo __('Operating Systems Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($operatingSystem['UsersTestOperatingSystem'] as $usersTestOperatingSystem): ?>
		<tr>
			<td><?php echo $usersTestOperatingSystem['users_id']; ?></td>
			<td><?php echo $usersTestOperatingSystem['operating_systems_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users_test_operating_systems', 'action' => 'view', $usersTestOperatingSystem['users_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users_test_operating_systems', 'action' => 'edit', $usersTestOperatingSystem['users_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users_test_operating_systems', 'action' => 'delete', $usersTestOperatingSystem['users_id']), array(), __('Are you sure you want to delete # %s?', $usersTestOperatingSystem['users_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Users Test Operating System'), array('controller' => 'users_test_operating_systems', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
