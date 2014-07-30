<div class="directorios view">
<h2><?php echo __('Directorio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($directorio['Directorio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($directorio['Directorio']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio'); ?></dt>
		<dd>
			<?php echo h($directorio['Directorio']['fecha_inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Fin'); ?></dt>
		<dd>
			<?php echo h($directorio['Directorio']['fecha_fin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivo'); ?></dt>
		<dd>
			<?php echo h($directorio['Directorio']['objetivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detalles'); ?></dt>
		<dd>
			<?php echo h($directorio['Directorio']['detalles']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($directorio['User']['name'], array('controller' => 'users', 'action' => 'view', $directorio['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($directorio['Directorio']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($directorio['Directorio']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Directorio'), array('action' => 'edit', $directorio['Directorio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Directorio'), array('action' => 'delete', $directorio['Directorio']['id']), array(), __('Are you sure you want to delete # %s?', $directorio['Directorio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Directorios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Directorio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Puntos'), array('controller' => 'puntos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Punto'), array('controller' => 'puntos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Puntos'); ?></h3>
	<?php if (!empty($directorio['Punto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Detalles'); ?></th>
		<th><?php echo __('Directorio Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($directorio['Punto'] as $punto): ?>
		<tr>
			<td><?php echo $punto['id']; ?></td>
			<td><?php echo $punto['detalles']; ?></td>
			<td><?php echo $punto['directorio_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'puntos', 'action' => 'view', $punto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'puntos', 'action' => 'edit', $punto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'puntos', 'action' => 'delete', $punto['id']), array(), __('Are you sure you want to delete # %s?', $punto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Punto'), array('controller' => 'puntos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
