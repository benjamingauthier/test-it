<div class="usersTestOperatingSystems view">
<h2><?php echo __('Users Test Operating System'); ?></h2>
	<dl>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersTestOperatingSystem['Users']['id'], array('controller' => 'users', 'action' => 'view', $usersTestOperatingSystem['Users']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operating Systems'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersTestOperatingSystem['OperatingSystems']['name'], array('controller' => 'operating_systems', 'action' => 'view', $usersTestOperatingSystem['OperatingSystems']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users Test Operating System'), array('action' => 'edit', $usersTestOperatingSystem['UsersTestOperatingSystem']['users_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Users Test Operating System'), array('action' => 'delete', $usersTestOperatingSystem['UsersTestOperatingSystem']['users_id']), array(), __('Are you sure you want to delete # %s?', $usersTestOperatingSystem['UsersTestOperatingSystem']['users_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Test Operating Systems'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Test Operating System'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operating Systems'), array('controller' => 'operating_systems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operating Systems'), array('controller' => 'operating_systems', 'action' => 'add')); ?> </li>
	</ul>
</div>
