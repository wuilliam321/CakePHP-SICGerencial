<div class="puntos form">
<?php echo $this->Form->create('Punto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Punto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('detalles');
		echo $this->Form->input('directorio_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Punto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Punto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Puntos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Directorios'), array('controller' => 'directorios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Directorio'), array('controller' => 'directorios', 'action' => 'add')); ?> </li>
	</ul>
</div>
