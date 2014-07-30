<div class="row">
	<div class="col-xs-12">
		<h2>
			<?php echo __('Editar Respuesta'); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver', array('controller' => 'asignaciones', 'action' => 'index'), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
		</h2>
	</div>
</div>
<?php echo $this->Form->create('Comunicacione', array('class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('label' => false, 'div' => array('class' => 'col-xs-12'), 'class' => 'form-control'))); ?>
	<?php echo $this->Form->input('id'); ?>
	<fieldset>
		<legend><?php echo __('Datos de la comunicacion / respuesta'); ?></legend>
		<div class="row">
			<?php if (isset($parent['Comunicacione']['codigo'])): ?>
				<div class="col-xs-4 left-sidebar">
					<?php if ($parent['Comunicacione']['codigo']): ?>
						<div class="form-group">
							<?php echo $this->Form->label('codigo', null, array('class' => 'col-xs-4 control-label')); ?>
							<div class="col-xs-8">
								<div class="col-xs-12">
									<p><?php echo $parent['Comunicacione']['codigo']; ?></p>
								</div>
							</div>
						</div>
					<?php endif; ?>
					<div class="form-group">
						<?php echo $this->Form->label('titulo', null, array('class' => 'col-xs-4 control-label')); ?>
						<div class="col-xs-8">
							<div class="col-xs-12">
								<p><?php echo $parent['Comunicacione']['titulo']; ?></p>
							</div>
						</div>
					</div>
					<div class="form-group">
						<?php echo $this->Form->label('detalles', null, array('class' => 'col-xs-4 control-label')); ?>
						<div class="col-xs-8">
							<div class="col-xs-12">
								<p><?php echo $parent['Comunicacione']['detalles']; ?></p>
							</div>
						</div>
					</div>
					<div class="form-group">
						<?php echo $this->Form->label('remitente_id', null, array('class' => 'col-xs-4 control-label')); ?>
						<div class="col-xs-8">
							<div class="col-xs-12">
								<p><?php echo $parent['Remitente']['name']; ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<div class="col-xs-<?php echo (isset($parent['Comunicacione']['codigo'])) ? '8' : '12'; ?>">
				<?php if (!isset($parent['Comunicacione']['codigo'])): ?>
					<div class="form-group">
						<?php echo $this->Form->label('codigo', null, array('class' => 'col-xs-1 control-label')); ?>
						<div class="col-xs-2">
							<?php echo $this->Form->input('codigo'); ?>
						</div>
					</div>
				<?php endif; ?>

				<div class="form-group">
					<?php echo $this->Form->label('titulo', null, array('class' => 'col-xs-1 control-label')); ?>
					<div class="col-xs-11">
						<?php echo $this->Form->input('titulo', array('rows' => 2)); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('User', null, array('class' => 'col-xs-1 control-label')); ?>
					<div class="col-xs-11">
						<?php echo $this->Form->input('User'); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('detalles', null, array('class' => 'col-xs-1 control-label')); ?>
					<div class="col-xs-11">
						<?php echo $this->Form->input('detalles', array('rows' => 12)); ?>
					</div>
				</div>

				<?php if ($this->request->data['Comunicacione']['codigo']): ?>
					<div class="form-group">
						<?php echo $this->Form->label('fecha_fin', null, array('class' => 'col-xs-1 control-label')); ?>
						<div class="col-xs-11">
							<?php echo $this->Form->input('fecha_fin', array('type' => 'text')); ?>
						</div>
					</div>
				<?php endif; ?>

				<div class="form-buttons">
					<div class="col-xs-12 text-right">
						<button type="submit" class="btn btn-primary btn-sm">Guardar</button>
					</div>
				</div>
			</div>
		</div>
	</fieldset>
<?php echo $this->Form->end(); ?>