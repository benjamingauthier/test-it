<div class="operatingSystems form">
<?php echo $this->Form->create('OperatingSystem'); ?>
	<fieldset>
		<legend><?php echo __('Add Operating System'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Operating Systems'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Test Operating Systems'), array('controller' => 'users_test_operating_systems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Test Operating System'), array('controller' => 'users_test_operating_systems', 'action' => 'add')); ?> </li>
	</ul>
</div>
