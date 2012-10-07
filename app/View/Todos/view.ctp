<div class="todos view">
<h2><?php  echo __('Todo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($todo['Todo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($todo['Todo']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enddate'); ?></dt>
		<dd>
			<?php echo h($todo['Todo']['enddate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Milestones'); ?></dt>
		<dd>
			<?php echo $this->Html->link($todo['Milestones']['title'], array('controller' => 'milestones', 'action' => 'view', $todo['Milestones']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($todo['Users']['title'], array('controller' => 'users', 'action' => 'view', $todo['Users']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Todo'), array('action' => 'edit', $todo['Todo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Todo'), array('action' => 'delete', $todo['Todo']['id']), null, __('Are you sure you want to delete # %s?', $todo['Todo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Todos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Todo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Milestones'), array('controller' => 'milestones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Milestones'), array('controller' => 'milestones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
