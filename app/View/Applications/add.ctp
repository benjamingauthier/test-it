<div class="applications form">
<?php echo $this->Form->create('Application'); ?>
	<fieldset>
		<legend><?php echo __('Add Application'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('current_version');
		echo $this->Form->input('operating_systems_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Applications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Operating Systems'), array('controller' => 'operating_systems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operating Systems'), array('controller' => 'operating_systems', 'action' => 'add')); ?> </li>
	</ul>
</div>
