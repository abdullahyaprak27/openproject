<div class="todos form">
<?php echo $this->Form->create('Todo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Todo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('enddate');
		echo $this->Form->input('milestones_id');
		echo $this->Form->input('users_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Todo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Todo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Todos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Milestones'), array('controller' => 'milestones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Milestones'), array('controller' => 'milestones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>