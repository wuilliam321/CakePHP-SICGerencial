<div class="avances view">
<h2><?php echo __('Avance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($avance['Avance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asignacione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($avance['Asignacione']['titulo'], array('controller' => 'asignaciones', 'action' => 'view', $avance['Asignacione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($avance['User']['name'], array('controller' => 'users', 'action' => 'view', $avance['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detalles'); ?></dt>
		<dd>
			<?php echo h($avance['Avance']['detalles']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porcentaje Avanzado'); ?></dt>
		<dd>
			<?php echo h($avance['Avance']['porcentaje_avanzado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($avance['Avance']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Avance'), array('action' => 'edit', $avance['Avance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Avance'), array('action' => 'delete', $avance['Avance']['id']), array(), __('Are you sure you want to delete # %s?', $avance['Avance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Avances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Avance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asignaciones'), array('controller' => 'asignaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asignacione'), array('controller' => 'asignaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
