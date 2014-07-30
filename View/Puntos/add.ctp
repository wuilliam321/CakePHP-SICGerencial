<div class="puntos form">
<?php echo $this->Form->create('Punto'); ?>
	<fieldset>
		<legend><?php echo __('Add Punto'); ?></legend>
	<?php
		echo $this->Form->input('detalles');
		echo $this->Form->input('directorio_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Puntos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Directorios'), array('controller' => 'directorios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Directorio'), array('controller' => 'directorios', 'action' => 'add')); ?> </li>
	</ul>
</div>
