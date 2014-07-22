<div class="asignaciones view">
<h2><?php echo __('Asignacione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($asignacione['Asignacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($asignacione['Asignacione']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asignador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($asignacione['Asignador']['name'], array('controller' => 'users', 'action' => 'view', $asignacione['Asignador']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo $this->Html->link($asignacione['Responsable']['name'], array('controller' => 'users', 'action' => 'view', $asignacione['Responsable']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($asignacione['Asignacione']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detalles'); ?></dt>
		<dd>
			<?php echo h($asignacione['Asignacione']['detalles']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Asignacion'); ?></dt>
		<dd>
			<?php echo h($asignacione['Asignacione']['fecha_asignacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Entrega'); ?></dt>
		<dd>
			<?php echo h($asignacione['Asignacione']['fecha_entrega']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($asignacione['Asignacione']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Asignacione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($asignacione['ParentAsignacione']['titulo'], array('controller' => 'asignaciones', 'action' => 'view', $asignacione['ParentAsignacione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($asignacione['Asignacione']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($asignacione['Asignacione']['rght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($asignacione['Asignacione']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($asignacione['Asignacione']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Asignacione'), array('action' => 'edit', $asignacione['Asignacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Asignacione'), array('action' => 'delete', $asignacione['Asignacione']['id']), array(), __('Are you sure you want to delete # %s?', $asignacione['Asignacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Asignaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asignacione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asignador'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asignaciones'), array('controller' => 'asignaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Asignacione'), array('controller' => 'asignaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Adjuntos'), array('controller' => 'adjuntos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adjunto'), array('controller' => 'adjuntos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Correcciones'), array('controller' => 'correcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Correccione'), array('controller' => 'correcciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluaciones'), array('controller' => 'evaluaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluacione'), array('controller' => 'evaluaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Adjuntos'); ?></h3>
	<?php if (!empty($asignacione['Adjunto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Asignacione Id'); ?></th>
		<th><?php echo __('Ruta'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($asignacione['Adjunto'] as $adjunto): ?>
		<tr>
			<td><?php echo $adjunto['id']; ?></td>
			<td><?php echo $adjunto['asignacione_id']; ?></td>
			<td><?php echo $adjunto['ruta']; ?></td>
			<td><?php echo $adjunto['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'adjuntos', 'action' => 'view', $adjunto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'adjuntos', 'action' => 'edit', $adjunto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'adjuntos', 'action' => 'delete', $adjunto['id']), array(), __('Are you sure you want to delete # %s?', $adjunto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Adjunto'), array('controller' => 'adjuntos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Asignaciones'); ?></h3>
	<?php if (!empty($asignacione['ChildAsignacione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Asignador Id'); ?></th>
		<th><?php echo __('Responsable Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Detalles'); ?></th>
		<th><?php echo __('Fecha Asignacion'); ?></th>
		<th><?php echo __('Fecha Entrega'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($asignacione['ChildAsignacione'] as $childAsignacione): ?>
		<tr>
			<td><?php echo $childAsignacione['id']; ?></td>
			<td><?php echo $childAsignacione['codigo']; ?></td>
			<td><?php echo $childAsignacione['asignador_id']; ?></td>
			<td><?php echo $childAsignacione['responsable_id']; ?></td>
			<td><?php echo $childAsignacione['titulo']; ?></td>
			<td><?php echo $childAsignacione['detalles']; ?></td>
			<td><?php echo $childAsignacione['fecha_asignacion']; ?></td>
			<td><?php echo $childAsignacione['fecha_entrega']; ?></td>
			<td><?php echo $childAsignacione['tipo']; ?></td>
			<td><?php echo $childAsignacione['parent_id']; ?></td>
			<td><?php echo $childAsignacione['lft']; ?></td>
			<td><?php echo $childAsignacione['rght']; ?></td>
			<td><?php echo $childAsignacione['created']; ?></td>
			<td><?php echo $childAsignacione['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'asignaciones', 'action' => 'view', $childAsignacione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'asignaciones', 'action' => 'edit', $childAsignacione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'asignaciones', 'action' => 'delete', $childAsignacione['id']), array(), __('Are you sure you want to delete # %s?', $childAsignacione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Asignacione'), array('controller' => 'asignaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Correcciones'); ?></h3>
	<?php if (!empty($asignacione['Correccione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Asignacione Id'); ?></th>
		<th><?php echo __('Nro Correccion'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($asignacione['Correccione'] as $correccione): ?>
		<tr>
			<td><?php echo $correccione['id']; ?></td>
			<td><?php echo $correccione['asignacione_id']; ?></td>
			<td><?php echo $correccione['nro_correccion']; ?></td>
			<td><?php echo $correccione['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'correcciones', 'action' => 'view', $correccione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'correcciones', 'action' => 'edit', $correccione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'correcciones', 'action' => 'delete', $correccione['id']), array(), __('Are you sure you want to delete # %s?', $correccione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Correccione'), array('controller' => 'correcciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Evaluaciones'); ?></h3>
	<?php if (!empty($asignacione['Evaluacione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Asignacione Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Evaluacion'); ?></th>
		<th><?php echo __('Entrega Temprana'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($asignacione['Evaluacione'] as $evaluacione): ?>
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
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($asignacione['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Cargo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Bloqueado'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($asignacione['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['group_id']; ?></td>
			<td><?php echo $user['cargo']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td><?php echo $user['bloqueado']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
