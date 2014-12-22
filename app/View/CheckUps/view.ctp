<div class="checkUps view">
<h2><?php echo __('Check Up'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($checkUp['CheckUp']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($checkUp['CheckUp']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checked'); ?></dt>
		<dd>
			<?php echo h($checkUp['CheckUp']['checked']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version'); ?></dt>
		<dd>
			<?php echo $this->Html->link($checkUp['Version']['name'], array('controller' => 'versions', 'action' => 'view', $checkUp['Version']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version Applications Id'); ?></dt>
		<dd>
			<?php echo h($checkUp['CheckUp']['version_applications_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Check Up'), array('action' => 'edit', $checkUp['CheckUp']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Check Up'), array('action' => 'delete', $checkUp['CheckUp']['id']), array(), __('Are you sure you want to delete # %s?', $checkUp['CheckUp']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Check Ups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Check Up'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Versions'), array('controller' => 'versions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Version'), array('controller' => 'versions', 'action' => 'add')); ?> </li>
	</ul>
</div>
