<div class="puntos view">
<h2><?php echo __('Punto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($punto['Punto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detalles'); ?></dt>
		<dd>
			<?php echo h($punto['Punto']['detalles']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Directorio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($punto['Directorio']['codigo'], array('controller' => 'directorios', 'action' => 'view', $punto['Directorio']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Punto'), array('action' => 'edit', $punto['Punto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Punto'), array('action' => 'delete', $punto['Punto']['id']), array(), __('Are you sure you want to delete # %s?', $punto['Punto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Puntos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Punto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Directorios'), array('controller' => 'directorios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Directorio'), array('controller' => 'directorios', 'action' => 'add')); ?> </li>
	</ul>
</div>
