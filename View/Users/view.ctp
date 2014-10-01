<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($user['User']['cargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bloqueado'); ?></dt>
		<dd>
			<?php echo h($user['User']['bloqueado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluaciones'), array('controller' => 'evaluaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluacione'), array('controller' => 'evaluaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asignaciones'), array('controller' => 'asignaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asignador'), array('controller' => 'asignaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mensajes'), array('controller' => 'mensajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Enviador'), array('controller' => 'mensajes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Avances'), array('controller' => 'avances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Avance'), array('controller' => 'avances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sistemas'), array('controller' => 'sistemas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sistema'), array('controller' => 'sistemas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dependencias'), array('controller' => 'dependencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependencia'), array('controller' => 'dependencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Evaluaciones'); ?></h3>
	<?php if (!empty($user['Evaluacione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Asignacione Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Evaluacion'); ?></th>
		<th><?php echo __('Entrega Temprana'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Evaluacione'] as $evaluacione): ?>
		<tr>
			<td><?php echo $evaluacione['id']; ?></td>
			<td><?php echo $evaluacione['asignacione_id']; ?></td>
			<td><?php echo $evaluacione['user_id']; ?></td>
			<td><?php echo $evaluacione['evaluacion']; ?></td>
			<td><?php echo $evaluacione['entrega_temprana']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'evaluaciones', 'action' => 'view', $evaluacione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'evaluaciones', 'action' => 'edit', $evaluacione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'evaluaciones', 'action' => 'delete', $evaluacione['id']), array(), __('Are you sure you want to delete # %s?', $evaluacione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Evaluacione'), array('controller' => 'evaluaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Asignaciones'); ?></h3>
	<?php if (!empty($user['Asignador'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Asignador Id'); ?></th>
		<th><?php echo __('Responsable Id'); ?></th>
		<th><?php echo __('Dependencia Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Detalles'); ?></th>
		<th><?php echo __('Porcentaje Asignado'); ?></th>
		<th><?php echo __('Porcentaje Distribuido'); ?></th>
		<th><?php echo __('Progreso'); ?></th>
		<th><?php echo __('Progreso Tiempo'); ?></th>
		<th><?php echo __('Progreso Fisico'); ?></th>
		<th><?php echo __('Fecha Asignacion'); ?></th>
		<th><?php echo __('Fecha Entrega'); ?></th>
		<th><?php echo __('Fecha Recepcion'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Completada'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Es Nueva'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Asignador'] as $asignador): ?>
		<tr>
			<td><?php echo $asignador['id']; ?></td>
			<td><?php echo $asignador['codigo']; ?></td>
			<td><?php echo $asignador['asignador_id']; ?></td>
			<td><?php echo $asignador['responsable_id']; ?></td>
			<td><?php echo $asignador['dependencia_id']; ?></td>
			<td><?php echo $asignador['titulo']; ?></td>
			<td><?php echo $asignador['detalles']; ?></td>
			<td><?php echo $asignador['porcentaje_asignado']; ?></td>
			<td><?php echo $asignador['porcentaje_distribuido']; ?></td>
			<td><?php echo $asignador['progreso']; ?></td>
			<td><?php echo $asignador['progreso_tiempo']; ?></td>
			<td><?php echo $asignador['progreso_fisico']; ?></td>
			<td><?php echo $asignador['fecha_asignacion']; ?></td>
			<td><?php echo $asignador['fecha_entrega']; ?></td>
			<td><?php echo $asignador['fecha_recepcion']; ?></td>
			<td><?php echo $asignador['parent_id']; ?></td>
			<td><?php echo $asignador['completada']; ?></td>
			<td><?php echo $asignador['lft']; ?></td>
			<td><?php echo $asignador['rght']; ?></td>
			<td><?php echo $asignador['es_nueva']; ?></td>
			<td><?php echo $asignador['created']; ?></td>
			<td><?php echo $asignador['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'asignaciones', 'action' => 'view', $asignador['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'asignaciones', 'action' => 'edit', $asignador['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'asignaciones', 'action' => 'delete', $asignador['id']), array(), __('Are you sure you want to delete # %s?', $asignador['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Asignador'), array('controller' => 'asignaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Asignaciones'); ?></h3>
	<?php if (!empty($user['Responsable'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Asignador Id'); ?></th>
		<th><?php echo __('Responsable Id'); ?></th>
		<th><?php echo __('Dependencia Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Detalles'); ?></th>
		<th><?php echo __('Porcentaje Asignado'); ?></th>
		<th><?php echo __('Porcentaje Distribuido'); ?></th>
		<th><?php echo __('Progreso'); ?></th>
		<th><?php echo __('Progreso Tiempo'); ?></th>
		<th><?php echo __('Progreso Fisico'); ?></th>
		<th><?php echo __('Fecha Asignacion'); ?></th>
		<th><?php echo __('Fecha Entrega'); ?></th>
		<th><?php echo __('Fecha Recepcion'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Completada'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Es Nueva'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Responsable'] as $responsable): ?>
		<tr>
			<td><?php echo $responsable['id']; ?></td>
			<td><?php echo $responsable['codigo']; ?></td>
			<td><?php echo $responsable['asignador_id']; ?></td>
			<td><?php echo $responsable['responsable_id']; ?></td>
			<td><?php echo $responsable['dependencia_id']; ?></td>
			<td><?php echo $responsable['titulo']; ?></td>
			<td><?php echo $responsable['detalles']; ?></td>
			<td><?php echo $responsable['porcentaje_asignado']; ?></td>
			<td><?php echo $responsable['porcentaje_distribuido']; ?></td>
			<td><?php echo $responsable['progreso']; ?></td>
			<td><?php echo $responsable['progreso_tiempo']; ?></td>
			<td><?php echo $responsable['progreso_fisico']; ?></td>
			<td><?php echo $responsable['fecha_asignacion']; ?></td>
			<td><?php echo $responsable['fecha_entrega']; ?></td>
			<td><?php echo $responsable['fecha_recepcion']; ?></td>
			<td><?php echo $responsable['parent_id']; ?></td>
			<td><?php echo $responsable['completada']; ?></td>
			<td><?php echo $responsable['lft']; ?></td>
			<td><?php echo $responsable['rght']; ?></td>
			<td><?php echo $responsable['es_nueva']; ?></td>
			<td><?php echo $responsable['created']; ?></td>
			<td><?php echo $responsable['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'asignaciones', 'action' => 'view', $responsable['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'asignaciones', 'action' => 'edit', $responsable['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'asignaciones', 'action' => 'delete', $responsable['id']), array(), __('Are you sure you want to delete # %s?', $responsable['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'asignaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mensajes'); ?></h3>
	<?php if (!empty($user['Enviador'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Enviador Id'); ?></th>
		<th><?php echo __('Receptor Id'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Enviador'] as $enviador): ?>
		<tr>
			<td><?php echo $enviador['id']; ?></td>
			<td><?php echo $enviador['enviador_id']; ?></td>
			<td><?php echo $enviador['receptor_id']; ?></td>
			<td><?php echo $enviador['texto']; ?></td>
			<td><?php echo $enviador['parent_id']; ?></td>
			<td><?php echo $enviador['lft']; ?></td>
			<td><?php echo $enviador['rght']; ?></td>
			<td><?php echo $enviador['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mensajes', 'action' => 'view', $enviador['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mensajes', 'action' => 'edit', $enviador['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mensajes', 'action' => 'delete', $enviador['id']), array(), __('Are you sure you want to delete # %s?', $enviador['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Enviador'), array('controller' => 'mensajes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mensajes'); ?></h3>
	<?php if (!empty($user['Receptor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Enviador Id'); ?></th>
		<th><?php echo __('Receptor Id'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Receptor'] as $receptor): ?>
		<tr>
			<td><?php echo $receptor['id']; ?></td>
			<td><?php echo $receptor['enviador_id']; ?></td>
			<td><?php echo $receptor['receptor_id']; ?></td>
			<td><?php echo $receptor['texto']; ?></td>
			<td><?php echo $receptor['parent_id']; ?></td>
			<td><?php echo $receptor['lft']; ?></td>
			<td><?php echo $receptor['rght']; ?></td>
			<td><?php echo $receptor['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mensajes', 'action' => 'view', $receptor['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mensajes', 'action' => 'edit', $receptor['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mensajes', 'action' => 'delete', $receptor['id']), array(), __('Are you sure you want to delete # %s?', $receptor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Receptor'), array('controller' => 'mensajes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Avances'); ?></h3>
	<?php if (!empty($user['Avance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Asignacione Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Detalles'); ?></th>
		<th><?php echo __('Porcentaje Avanzado'); ?></th>
		<th><?php echo __('Es Nueva'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Avance'] as $avance): ?>
		<tr>
			<td><?php echo $avance['id']; ?></td>
			<td><?php echo $avance['asignacione_id']; ?></td>
			<td><?php echo $avance['user_id']; ?></td>
			<td><?php echo $avance['detalles']; ?></td>
			<td><?php echo $avance['porcentaje_avanzado']; ?></td>
			<td><?php echo $avance['es_nueva']; ?></td>
			<td><?php echo $avance['created']; ?></td>
			<td><?php echo $avance['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'avances', 'action' => 'view', $avance['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'avances', 'action' => 'edit', $avance['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'avances', 'action' => 'delete', $avance['id']), array(), __('Are you sure you want to delete # %s?', $avance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Avance'), array('controller' => 'avances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sistemas'); ?></h3>
	<?php if (!empty($user['Sistema'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Sistema'] as $sistema): ?>
		<tr>
			<td><?php echo $sistema['id']; ?></td>
			<td><?php echo $sistema['nombre']; ?></td>
			<td><?php echo $sistema['titulo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sistemas', 'action' => 'view', $sistema['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sistemas', 'action' => 'edit', $sistema['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sistemas', 'action' => 'delete', $sistema['id']), array(), __('Are you sure you want to delete # %s?', $sistema['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sistema'), array('controller' => 'sistemas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Dependencias'); ?></h3>
	<?php if (!empty($user['Dependencia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Iniciales'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Dependencia'] as $dependencia): ?>
		<tr>
			<td><?php echo $dependencia['id']; ?></td>
			<td><?php echo $dependencia['descripcion']; ?></td>
			<td><?php echo $dependencia['iniciales']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dependencias', 'action' => 'view', $dependencia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dependencias', 'action' => 'edit', $dependencia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dependencias', 'action' => 'delete', $dependencia['id']), array(), __('Are you sure you want to delete # %s?', $dependencia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dependencia'), array('controller' => 'dependencias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
