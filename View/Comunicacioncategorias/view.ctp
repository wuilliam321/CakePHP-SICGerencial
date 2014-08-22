<div class="comunicacioncategorias view">
<h2><?php echo __('Comunicacioncategoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comunicacioncategoria['Comunicacioncategoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($comunicacioncategoria['Comunicacioncategoria']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dependencia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comunicacioncategoria['Dependencia']['iniciales'], array('controller' => 'dependencias', 'action' => 'view', $comunicacioncategoria['Dependencia']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comunicacioncategoria'), array('action' => 'edit', $comunicacioncategoria['Comunicacioncategoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comunicacioncategoria'), array('action' => 'delete', $comunicacioncategoria['Comunicacioncategoria']['id']), array(), __('Are you sure you want to delete # %s?', $comunicacioncategoria['Comunicacioncategoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comunicacioncategorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comunicacioncategoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dependencias'), array('controller' => 'dependencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependencia'), array('controller' => 'dependencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comunicaciones'), array('controller' => 'comunicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comunicacione'), array('controller' => 'comunicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comunicaciones'); ?></h3>
	<?php if (!empty($comunicacioncategoria['Comunicacione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Remitente Id'); ?></th>
		<th><?php echo __('Comunicacioncategoria Id'); ?></th>
		<th><?php echo __('Detalles'); ?></th>
		<th><?php echo __('Fecha Remision'); ?></th>
		<th><?php echo __('Fecha Fin'); ?></th>
		<th><?php echo __('Fecha Recepcion'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Es Leida'); ?></th>
		<th><?php echo __('Es Nueva'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($comunicacioncategoria['Comunicacione'] as $comunicacione): ?>
		<tr>
			<td><?php echo $comunicacione['id']; ?></td>
			<td><?php echo $comunicacione['codigo']; ?></td>
			<td><?php echo $comunicacione['remitente_id']; ?></td>
			<td><?php echo $comunicacione['comunicacioncategoria_id']; ?></td>
			<td><?php echo $comunicacione['detalles']; ?></td>
			<td><?php echo $comunicacione['fecha_remision']; ?></td>
			<td><?php echo $comunicacione['fecha_fin']; ?></td>
			<td><?php echo $comunicacione['fecha_recepcion']; ?></td>
			<td><?php echo $comunicacione['parent_id']; ?></td>
			<td><?php echo $comunicacione['lft']; ?></td>
			<td><?php echo $comunicacione['rght']; ?></td>
			<td><?php echo $comunicacione['es_leida']; ?></td>
			<td><?php echo $comunicacione['es_nueva']; ?></td>
			<td><?php echo $comunicacione['created']; ?></td>
			<td><?php echo $comunicacione['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comunicaciones', 'action' => 'view', $comunicacione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comunicaciones', 'action' => 'edit', $comunicacione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comunicaciones', 'action' => 'delete', $comunicacione['id']), array(), __('Are you sure you want to delete # %s?', $comunicacione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comunicacione'), array('controller' => 'comunicaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
