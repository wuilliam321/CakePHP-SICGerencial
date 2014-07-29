<div class="correcciones form">
<?php echo $this->Form->create('Correccione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Correccione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('comunicacione_id');
		echo $this->Form->input('nro_correccion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Correccione.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Correccione.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Correcciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Comunicaciones'), array('controller' => 'comunicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comunicacione'), array('controller' => 'comunicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
