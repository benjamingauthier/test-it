<div class="versions form">
<?php echo $this->Form->create('Version'); ?>
	<fieldset>
		<legend><?php echo __('Edit Version'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('applications_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Version.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Version.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Versions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applications'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Check Ups'), array('controller' => 'check_ups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Check Up'), array('controller' => 'check_ups', 'action' => 'add')); ?> </li>
	</ul>
</div>
