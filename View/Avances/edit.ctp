<div class="row">
	<div class="col-xs-12">
		<h2>
			<?php echo __('Editar avance'); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver', array('controller' => 'asignaciones', 'action' => 'index'), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
		</h2>
	</div>
</div>
<?php echo $this->Form->create('Avance', array('class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('label' => false, 'div' => array('class' => 'col-xs-12'), 'class' => 'form-control'))); ?>
	<?php echo $this->Form->input('id'); ?>
	<fieldset>
		<legend><?php echo __('Datos de la asignacion'); ?></legend>
		<div class="row">
			<div class="col-xs-4 left-sidebar">
				<div class="form-group">
					<?php echo $this->Form->label('porcentaje_avanzado', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php echo $this->Form->input('porcentaje_avanzado', array('max' => 100, 'min' => 0, 'div' => array('class' => 'input-group'), 'after' => '<div class="input-group-addon">%</div>', 'escape' => false)); ?>
					</div>
				</div>
				<hr />
				
				<?php if ($asignacione['Asignacione']['codigo']): ?>
					<div class="form-group">
						<?php echo $this->Form->label('codigo', null, array('class' => 'col-xs-4 control-label')); ?>
						<div class="col-xs-8">
							<div class="col-xs-12">
								<p><?php echo $asignacione['Asignacione']['codigo']; ?></p>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<div class="form-group">
					<?php echo $this->Form->label('titulo', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<div class="col-xs-12">
							<p><?php echo $asignacione['Asignacione']['titulo']; ?></p>
						</div>
					</div>
				</div>
				<div class="form-group">
					<?php echo $this->Form->label('detalles', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<div class="col-xs-12">
							<p><?php echo $asignacione['Asignacione']['detalles']; ?></p>
						</div>
					</div>
				</div>
				<div class="form-group">
					<?php echo $this->Form->label('user_id', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<div class="col-xs-12">
							<p><?php echo $asignacione['Responsable']['name']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-8">

				<div class="form-group">
					<?php echo $this->Form->label('detalles', null, array('class' => 'col-xs-1 control-label')); ?>
					<div class="col-xs-11">
						<?php echo $this->Form->input('detalles', array('rows' => 12)); ?>
					</div>
				</div>

				<div class="form-buttons">
					<div class="col-xs-12 text-right">
						<button type="submit" class="btn btn-primary btn-sm">Guardar</button>
					</div>
				</div>
			</div>
		</div>
	</fieldset>
<?php echo $this->Form->end(); ?>