<div class="usersTestOperatingSystems form">
<?php echo $this->Form->create('UsersTestOperatingSystem'); ?>
	<fieldset>
		<legend><?php echo __('Add Users Test Operating System'); ?></legend>
	<?php
		echo $this->Form->input('operating_systems_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users Test Operating Systems'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operating Systems'), array('controller' => 'operating_systems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operating Systems'), array('controller' => 'operating_systems', 'action' => 'add')); ?> </li>
	</ul>
</div>
