<div class="comunicacioncategorias form">
<?php echo $this->Form->create('Comunicacioncategoria'); ?>
	<fieldset>
		<legend><?php echo __('Edit Comunicacioncategoria'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('dependencia_id', array('empty' => 'Todas'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Comunicacioncategoria.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Comunicacioncategoria.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Comunicacioncategorias'), array('action' => 'index')); ?></li>
	</ul>
</div>
