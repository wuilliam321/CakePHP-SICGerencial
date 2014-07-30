<div class="directorios form">
<?php echo $this->Form->create('Directorio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Directorio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('fecha_inicio');
		echo $this->Form->input('fecha_fin');
		echo $this->Form->input('objetivo');
		echo $this->Form->input('detalles');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Directorio.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Directorio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Directorios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Puntos'), array('controller' => 'puntos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Punto'), array('controller' => 'puntos', 'action' => 'add')); ?> </li>
	</ul>
</div>
