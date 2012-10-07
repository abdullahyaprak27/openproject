<div class="milestones view">
<h2><?php  echo __('Milestone'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($milestone['Milestone']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($milestone['Milestone']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projects'); ?></dt>
		<dd>
			<?php echo $this->Html->link($milestone['Projects']['title'], array('controller' => 'projects', 'action' => 'view', $milestone['Projects']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Milestone'), array('action' => 'edit', $milestone['Milestone']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Milestone'), array('action' => 'delete', $milestone['Milestone']['id']), null, __('Are you sure you want to delete # %s?', $milestone['Milestone']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Milestones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Milestone'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
