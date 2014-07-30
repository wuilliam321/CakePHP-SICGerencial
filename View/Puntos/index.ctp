<div class="puntos index">
	<h2><?php echo __('Puntos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('detalles'); ?></th>
			<th><?php echo $this->Paginator->sort('directorio_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($puntos as $punto): ?>
	<tr>
		<td><?php echo h($punto['Punto']['id']); ?>&nbsp;</td>
		<td><?php echo h($punto['Punto']['detalles']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($punto['Directorio']['codigo'], array('controller' => 'directorios', 'action' => 'view', $punto['Directorio']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $punto['Punto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $punto['Punto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $punto['Punto']['id']), array(), __('Are you sure you want to delete # %s?', $punto['Punto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Punto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Directorios'), array('controller' => 'directorios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Directorio'), array('controller' => 'directorios', 'action' => 'add')); ?> </li>
	</ul>
</div>
