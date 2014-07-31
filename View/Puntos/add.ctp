<div class="row">
	<div class="col-xs-12">
		<h2>
			<?php echo __('Agregar punto'); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver', array('controller' => 'asignaciones', 'action' => 'index'), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
		</h2>
	</div>
</div>
<?php echo $this->Form->create('Punto', array('class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('label' => false, 'div' => array('class' => 'col-xs-12'), 'class' => 'form-control'))); ?>
	<fieldset>
		<legend><?php echo __('Datos del punto'); ?></legend>
		<div class="row">
			<div class="col-xs-4 left-sidebar">
				<?php if ($directorio['Directorio']['codigo']): ?>
					<div class="form-group">
						<?php echo $this->Form->label('codigo', null, array('class' => 'col-xs-4 control-label')); ?>
						<div class="col-xs-8">
							<div class="col-xs-12">
								<p><?php echo $directorio['Directorio']['codigo']; ?></p>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<div class="form-group">
					<?php echo $this->Form->label('titulo', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<div class="col-xs-12">
							<p><?php echo $directorio['Directorio']['objetivo']; ?></p>
						</div>
					</div>
				</div>
				<div class="form-group">
					<?php echo $this->Form->label('detalles', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<div class="col-xs-12">
							<p><?php echo $directorio['Directorio']['detalles']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-8">

				<div class="form-group">
					<?php echo $this->Form->label('detalles', null, array('class' => 'col-xs-1 control-label')); ?>
					<div class="col-xs-11">
						<?php echo $this->Form->input('detalles', array('rows' => 4)); ?>
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