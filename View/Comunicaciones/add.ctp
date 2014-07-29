<div class="comunicaciones form">
<?php echo $this->Form->create('Comunicacione'); ?>
	<fieldset>
		<legend><?php echo __('Add Comunicacione'); ?></legend>
	<?php
		echo $this->Form->input('codigo');
		echo $this->Form->input('remitente_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('detalles');
		echo $this->Form->input('fecha_remision');
		echo $this->Form->input('fecha_fin');
		echo $this->Form->input('fecha_recepcion');
		echo $this->Form->input('parent_id', array('empty' => true));
		echo $this->Form->input('lft');
		echo $this->Form->input('rght');
		echo $this->Form->input('es_leida');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comunicaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Remitente'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comunicaciones'), array('controller' => 'comunicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Comunicacione'), array('controller' => 'comunicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Correcciones'), array('controller' => 'correcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Correccione'), array('controller' => 'correcciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
