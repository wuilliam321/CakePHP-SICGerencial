<div class="row">
	<div class="col-xs-12">
		<h2>
			<?php echo __('Editar directorio'); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver', array('controller' => 'asignaciones', 'action' => 'index'), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
		</h2>
	</div>
</div>
<?php echo $this->Form->create('Directorio', array('type' => 'file', 'class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('label' => false, 'div' => array('class' => 'col-xs-12'), 'class' => 'form-control'))); ?>
	<?php echo $this->Form->input('id'); ?>
	<fieldset>
		<legend><?php echo __('Datos del directorio'); ?></legend>
		<div class="row">
			<div class="col-xs-4 left-sidebar">
				<div class="form-group">
					<?php echo $this->Form->label('fecha_inicio', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php echo $this->Form->input('fecha_inicio', array('type' => 'text', 'value' => date('Y-m-d H:i:s'), 'div' => array('class' => 'input-group'), 'after' => '<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>', 'escape' => false)); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('fecha_fin', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php echo $this->Form->input('fecha_fin', array('type' => 'text', 'value' => date('Y-m-d H:i:s'), 'div' => array('class' => 'input-group'), 'after' => '<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>', 'escape' => false)); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('User', __('Participantes'), array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php echo $this->Form->input('User'); ?>
					</div>
				</div>
				<hr />
				
				<div class="form-group">
					<?php echo $this->Form->label('codigo', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php echo $this->Form->input('codigo'); ?>
					</div>
				</div>
			</div>
			<div class="col-xs-8">
				<div class="form-group">
					<?php echo $this->Form->label('objetivo', null, array('class' => 'col-xs-1 control-label')); ?>
					<div class="col-xs-11">
						<?php echo $this->Form->input('objetivo', array('rows' => 2)); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('detalles', null, array('class' => 'col-xs-1 control-label')); ?>
					<div class="col-xs-11">
						<?php echo $this->Form->input('detalles', array('rows' => 12)); ?>
					</div>
				</div>

				<?php for ($i = 0; $i < sizeof($this->request->data['Punto']); $i++): ?>
					<div class="form-group">
						<?php echo $this->Form->label('Punto', __('Punto') . ($i + 1), array('class' => 'col-xs-1 control-label')); ?>
						<div class="col-xs-11">
							<?php echo $this->Form->input('Punto.' . $i . '.id'); ?>
							<?php echo $this->Form->input('Punto.' . $i . '.detalles', array('rows' => 2, 'required' => false)); ?>
						</div>
					</div>
				<?php endfor; ?>

				<?php for ($i = sizeof($this->request->data['Punto']); $i < sizeof($this->request->data['Punto']) + 4; $i++): ?>
					<div class="form-group">
						<?php echo $this->Form->label('Punto', __('Punto') . ($i + 1), array('class' => 'col-xs-1 control-label')); ?>
						<div class="col-xs-11">
							<?php echo $this->Form->input('Punto.' . $i . '.detalles', array('rows' => 2, 'required' => false)); ?>
						</div>
					</div>
				<?php endfor; ?>

				<div class="form-group">
					<?php echo $this->Form->label('Attachment.0.attachment', null, array('class' => 'col-xs-1 control-label')); ?>
					<div class="col-xs-11">
						<?php echo $this->Form->input('Attachment.0.attachment', array('type' => 'file', 'required' => false)); ?>
						<?php echo $this->Form->input('Attachment.0.model', array('type' => 'hidden', 'value' => 'Directorio')); ?>
					</div>
				</div>

				<?php if ($this->request->data['Attachment']): ?>
				<div class="form-group">
					<?php echo $this->Form->label('Attachment.0.attachment', '', array('class' => 'col-xs-1 control-label')); ?>
					<div class="col-xs-11">
						<div class="list-group">
							<div class="col-xs-12">
								<a href="#" class="list-group-item active">
									<?php echo __('Attachments'); ?>
								</a>
								<?php foreach ($this->request->data['Attachment'] as $attachment): ?>
									<span class="list-group-item">
										<?php echo $attachment['name']; ?>
										<span class="badge btn btn-danger"><?php echo $this->Html->link('Eliminar', 	array('controller' => 'attachments', 'action' => 'delete', $attachment['id']), array('class' => 'fg-white')); ?></span>
										<span class="badge btn btn-info"><?php echo $this->Html->link('Descargar', 	array('action' => 'download', $attachment['id'], 'directorios'), array('class' => 'fg-white')); ?></span>
									</span>
								<?php endforeach; ?>
							</div>
						</div>
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