<div class="milestones form">
<?php echo $this->Form->create('Milestone'); ?>
	<fieldset>
		<legend><?php echo __('Add Milestone'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('projects_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Milestones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
