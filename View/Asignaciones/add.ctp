<div class="asignaciones form">
<?php echo $this->Form->create('Asignacione'); ?>
	<fieldset>
		<legend><?php echo __('Add Asignacione'); ?></legend>
	<?php
		echo $this->Form->input('codigo');
		echo $this->Form->input('asignador_id');
		echo $this->Form->input('responsable_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('detalles');
		echo $this->Form->input('fecha_asignacion');
		echo $this->Form->input('fecha_entrega');
		echo $this->Form->input('tipo');
		echo $this->Form->input('parent_id', array('empty' => true));
		echo $this->Form->input('lft');
		echo $this->Form->input('rght');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Asignaciones'), array('action' => 'index')); ?></li>
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
