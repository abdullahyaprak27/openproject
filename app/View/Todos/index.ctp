<div class="todos index">
	<h2><?php echo __('Todos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('enddate'); ?></th>
			<th><?php echo $this->Paginator->sort('milestones_id'); ?></th>
			<th><?php echo $this->Paginator->sort('users_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($todos as $todo): ?>
	<tr>
		<td><?php echo h($todo['Todo']['id']); ?>&nbsp;</td>
		<td><?php echo h($todo['Todo']['title']); ?>&nbsp;</td>
		<td><?php echo h($todo['Todo']['enddate']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($todo['Milestones']['title'], array('controller' => 'milestones', 'action' => 'view', $todo['Milestones']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($todo['Users']['title'], array('controller' => 'users', 'action' => 'view', $todo['Users']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $todo['Todo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $todo['Todo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $todo['Todo']['id']), null, __('Are you sure you want to delete # %s?', $todo['Todo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Todo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Milestones'), array('controller' => 'milestones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Milestones'), array('controller' => 'milestones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
