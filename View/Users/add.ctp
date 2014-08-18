<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('group_id');
		echo $this->Form->input('cargo');
		echo $this->Form->input('bloqueado');
		echo $this->Form->input('Sistema');
		echo $this->Form->input('Dependencia');
		echo $this->Form->input('Directorio');
		echo $this->Form->input('Asignacione');
		echo $this->Form->input('Comunicacione');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
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
		<li><?php echo $this->Html->link(__('List Directorios'), array('controller' => 'directorios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Directorio'), array('controller' => 'directorios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comunicaciones'), array('controller' => 'comunicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comunicacione'), array('controller' => 'comunicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
