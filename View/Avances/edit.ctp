<div class="avances form">
<?php echo $this->Form->create('Avance'); ?>
	<fieldset>
		<legend><?php echo __('Edit Avance'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('asignacione_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('detalles');
		echo $this->Form->input('porcentaje_avanzado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Avance.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Avance.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Avances'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Asignaciones'), array('controller' => 'asignaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asignacione'), array('controller' => 'asignaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
