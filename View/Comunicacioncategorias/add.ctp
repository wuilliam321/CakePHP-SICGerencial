<div class="comunicacioncategorias form">
<?php echo $this->Form->create('Comunicacioncategoria'); ?>
	<fieldset>
		<legend><?php echo __('Add Comunicacioncategoria'); ?></legend>
	<?php
		echo $this->Form->input('descripcion');
		echo $this->Form->input('dependencia_id', array('empty' => 'Todas'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comunicacioncategorias'), array('action' => 'index')); ?></li>
	</ul>
</div>
