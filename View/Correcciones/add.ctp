<div class="correcciones form">
<?php echo $this->Form->create('Correccione'); ?>
	<fieldset>
		<legend><?php echo __('Add Correccione'); ?></legend>
	<?php
		echo $this->Form->input('comunicacione_id');
		echo $this->Form->input('nro_correccion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Correcciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Comunicaciones'), array('controller' => 'comunicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comunicacione'), array('controller' => 'comunicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
