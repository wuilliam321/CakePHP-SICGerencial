<div class="avances index">
	<h2><?php echo __('Avances'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('asignacione_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('detalles'); ?></th>
			<th><?php echo $this->Paginator->sort('porcentaje_avanzado'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($avances as $avance): ?>
	<tr>
		<td><?php echo h($avance['Avance']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($avance['Asignacione']['titulo'], array('controller' => 'asignaciones', 'action' => 'view', $avance['Asignacione']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($avance['User']['name'], array('controller' => 'users', 'action' => 'view', $avance['User']['id'])); ?>
		</td>
		<td><?php echo h($avance['Avance']['detalles']); ?>&nbsp;</td>
		<td><?php echo h($avance['Avance']['porcentaje_avanzado']); ?>&nbsp;</td>
		<td><?php echo h($avance['Avance']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $avance['Avance']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $avance['Avance']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $avance['Avance']['id']), array(), __('Are you sure you want to delete # %s?', $avance['Avance']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Avance'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Asignaciones'), array('controller' => 'asignaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asignacione'), array('controller' => 'asignaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
