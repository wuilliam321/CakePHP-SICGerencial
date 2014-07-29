<div class="correcciones view">
<h2><?php echo __('Correccione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($correccione['Correccione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comunicacione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($correccione['Comunicacione']['titulo'], array('controller' => 'comunicaciones', 'action' => 'view', $correccione['Comunicacione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nro Correccion'); ?></dt>
		<dd>
			<?php echo h($correccione['Correccione']['nro_correccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($correccione['Correccione']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Correccione'), array('action' => 'edit', $correccione['Correccione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Correccione'), array('action' => 'delete', $correccione['Correccione']['id']), array(), __('Are you sure you want to delete # %s?', $correccione['Correccione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Correcciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Correccione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comunicaciones'), array('controller' => 'comunicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comunicacione'), array('controller' => 'comunicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
