<div class="checkUps form">
<?php echo $this->Form->create('CheckUp'); ?>
	<fieldset>
		<legend><?php echo __('Edit Check Up'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description');
		echo $this->Form->input('checked');
		echo $this->Form->input('version_id');
		echo $this->Form->input('version_applications_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CheckUp.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CheckUp.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Check Ups'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Versions'), array('controller' => 'versions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Version'), array('controller' => 'versions', 'action' => 'add')); ?> </li>
	</ul>
</div>
