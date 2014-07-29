<div class="comunicaciones view">
<h2><?php echo __('Comunicacione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comunicacione['Comunicacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($comunicacione['Comunicacione']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remitente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comunicacione['Remitente']['name'], array('controller' => 'users', 'action' => 'view', $comunicacione['Remitente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($comunicacione['Comunicacione']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detalles'); ?></dt>
		<dd>
			<?php echo h($comunicacione['Comunicacione']['detalles']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Remision'); ?></dt>
		<dd>
			<?php echo h($comunicacione['Comunicacione']['fecha_remision']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Fin'); ?></dt>
		<dd>
			<?php echo h($comunicacione['Comunicacione']['fecha_fin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Recepcion'); ?></dt>
		<dd>
			<?php echo h($comunicacione['Comunicacione']['fecha_recepcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Comunicacione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comunicacione['ParentComunicacione']['titulo'], array('controller' => 'comunicaciones', 'action' => 'view', $comunicacione['ParentComunicacione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($comunicacione['Comunicacione']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($comunicacione['Comunicacione']['rght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Es Leida'); ?></dt>
		<dd>
			<?php echo h($comunicacione['Comunicacione']['es_leida']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($comunicacione['Comunicacione']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($comunicacione['Comunicacione']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comunicacione'), array('action' => 'edit', $comunicacione['Comunicacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comunicacione'), array('action' => 'delete', $comunicacione['Comunicacione']['id']), array(), __('Are you sure you want to delete # %s?', $comunicacione['Comunicacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comunicaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comunicacione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Remitente'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comunicaciones'), array('controller' => 'comunicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Comunicacione'), array('controller' => 'comunicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Correcciones'), array('controller' => 'correcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Correccione'), array('controller' => 'correcciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comunicaciones'); ?></h3>
	<?php if (!empty($comunicacione['ChildComunicacione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Remitente Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Detalles'); ?></th>
		<th><?php echo __('Fecha Remision'); ?></th>
		<th><?php echo __('Fecha Fin'); ?></th>
		<th><?php echo __('Fecha Recepcion'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Es Leida'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($comunicacione['ChildComunicacione'] as $childComunicacione): ?>
		<tr>
			<td><?php echo $childComunicacione['id']; ?></td>
			<td><?php echo $childComunicacione['codigo']; ?></td>
			<td><?php echo $childComunicacione['remitente_id']; ?></td>
			<td><?php echo $childComunicacione['titulo']; ?></td>
			<td><?php echo $childComunicacione['detalles']; ?></td>
			<td><?php echo $childComunicacione['fecha_remision']; ?></td>
			<td><?php echo $childComunicacione['fecha_fin']; ?></td>
			<td><?php echo $childComunicacione['fecha_recepcion']; ?></td>
			<td><?php echo $childComunicacione['parent_id']; ?></td>
			<td><?php echo $childComunicacione['lft']; ?></td>
			<td><?php echo $childComunicacione['rght']; ?></td>
			<td><?php echo $childComunicacione['es_leida']; ?></td>
			<td><?php echo $childComunicacione['created']; ?></td>
			<td><?php echo $childComunicacione['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comunicaciones', 'action' => 'view', $childComunicacione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comunicaciones', 'action' => 'edit', $childComunicacione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comunicaciones', 'action' => 'delete', $childComunicacione['id']), array(), __('Are you sure you want to delete # %s?', $childComunicacione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Comunicacione'), array('controller' => 'comunicaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Correcciones'); ?></h3>
	<?php if (!empty($comunicacione['Correccione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comunicacione Id'); ?></th>
		<th><?php echo __('Nro Correccion'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($comunicacione['Correccione'] as $correccione): ?>
		<tr>
			<td><?php echo $correccione['id']; ?></td>
			<td><?php echo $correccione['comunicacione_id']; ?></td>
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
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($comunicacione['User'])): ?>
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
	<?php foreach ($comunicacione['User'] as $user): ?>
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
