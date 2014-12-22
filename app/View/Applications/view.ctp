<div class="applications view">
<h2><?php echo __('Application'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($application['Application']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($application['Application']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($application['Application']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Current Version'); ?></dt>
		<dd>
			<?php echo h($application['Application']['current_version']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operating Systems'); ?></dt>
		<dd>
			<?php echo $this->Html->link($application['OperatingSystems']['name'], array('controller' => 'operating_systems', 'action' => 'view', $application['OperatingSystems']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Application'), array('action' => 'edit', $application['Application']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Application'), array('action' => 'delete', $application['Application']['id']), array(), __('Are you sure you want to delete # %s?', $application['Application']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operating Systems'), array('controller' => 'operating_systems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operating Systems'), array('controller' => 'operating_systems', 'action' => 'add')); ?> </li>
	</ul>
</div>
