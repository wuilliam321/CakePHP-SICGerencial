<div class="comunicaciones index">
	<h2><?php echo __('Comunicaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('remitente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('detalles'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_remision'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_fin'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_recepcion'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lft'); ?></th>
			<th><?php echo $this->Paginator->sort('rght'); ?></th>
			<th><?php echo $this->Paginator->sort('es_leida'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($comunicaciones as $comunicacione): ?>
	<tr>
		<td><?php echo h($comunicacione['Comunicacione']['id']); ?>&nbsp;</td>
		<td><?php echo h($comunicacione['Comunicacione']['codigo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comunicacione['Remitente']['name'], array('controller' => 'users', 'action' => 'view', $comunicacione['Remitente']['id'])); ?>
		</td>
		<td><?php echo h($comunicacione['Comunicacione']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($comunicacione['Comunicacione']['detalles']); ?>&nbsp;</td>
		<td><?php echo h($comunicacione['Comunicacione']['fecha_remision']); ?>&nbsp;</td>
		<td><?php echo h($comunicacione['Comunicacione']['fecha_fin']); ?>&nbsp;</td>
		<td><?php echo h($comunicacione['Comunicacione']['fecha_recepcion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comunicacione['ParentComunicacione']['titulo'], array('controller' => 'comunicaciones', 'action' => 'view', $comunicacione['ParentComunicacione']['id'])); ?>
		</td>
		<td><?php echo h($comunicacione['Comunicacione']['lft']); ?>&nbsp;</td>
		<td><?php echo h($comunicacione['Comunicacione']['rght']); ?>&nbsp;</td>
		<td><?php echo h($comunicacione['Comunicacione']['es_leida']); ?>&nbsp;</td>
		<td><?php echo h($comunicacione['Comunicacione']['created']); ?>&nbsp;</td>
		<td><?php echo h($comunicacione['Comunicacione']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $comunicacione['Comunicacione']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $comunicacione['Comunicacione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $comunicacione['Comunicacione']['id']), array(), __('Are you sure you want to delete # %s?', $comunicacione['Comunicacione']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Comunicacione'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Remitente'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comunicaciones'), array('controller' => 'comunicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Comunicacione'), array('controller' => 'comunicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Correcciones'), array('controller' => 'correcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Correccione'), array('controller' => 'correcciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
