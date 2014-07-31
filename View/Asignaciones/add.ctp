<div class="row">
	<div class="col-xs-12">
		<h2>
			<?php echo __('Agregar asignacion'); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver', array('action' => 'index'), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
		</h2>
	</div>
</div>
<?php echo $this->Form->create('Asignacione', array('type' => 'file', 'class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('label' => false, 'div' => array('class' => 'col-xs-12'), 'class' => 'form-control'))); ?>
	<fieldset>
		<legend><?php echo __('Datos de la asignacion'); ?></legend>
		<div class="row">
			<div class="col-xs-4 left-sidebar">
				<div class="form-group">
					<?php echo $this->Form->label('responsable_id', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php echo $this->Form->input('responsable_id'); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('dependencia_id', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php echo $this->Form->input('dependencia_id'); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('fecha_asignacion', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php echo $this->Form->input('fecha_asignacion', array('type' => 'text', 'value' => date('Y-m-d H:i:s'), 'div' => array('class' => 'input-group'), 'after' => '<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>', 'escape' => false)); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('fecha_entrega', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php echo $this->Form->input('fecha_entrega', array('type' => 'text', 'value' => date('Y-m-d H:i:s'), 'div' => array('class' => 'input-group'), 'after' => '<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>', 'escape' => false)); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('User', __('Colaboradores'), array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php echo $this->Form->input('User'); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('porcentaje_asignado', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php $diff = ($parent['ParentAsignacione']['porcentaje_distribuido']) ? $parent['ParentAsignacione']['porcentaje_distribuido'] : 0; ?>
						<?php echo $this->Form->input('porcentaje_asignado', array('max' => 100 - $diff, 'min' => 0, 'value' => 100 - $diff, 'div' => array('class' => 'input-group'), 'after' => '<div class="input-group-addon">%</div>', 'escape' => false)); ?>
					</div>
				</div>
<!-- 
				<div class="form-group">
					<?php //echo $this->Form->label('progreso', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php //echo $this->Form->input('progreso', array('max' => 100, 'min' => 0, 'value' => 0, 'div' => array('class' => 'input-group'), 'after' => '<div class="input-group-addon">%</div>', 'escape' => false)); ?>
					</div>
				</div> -->
				<hr />

				<?php if ($parent['ParentAsignacione']['id']): ?>
					<div class="form-group">
						<?php echo $this->Form->label('codigo', null, array('class' => 'col-xs-4 control-label')); ?>
						<div class="col-xs-8">
							<div class="col-xs-12">
								<p><?php echo $parent['ParentAsignacione']['codigo']; ?></p>
							</div>
						</div>
					</div>
					<div class="form-group">
						<?php echo $this->Form->label('titulo', null, array('class' => 'col-xs-4 control-label')); ?>
						<div class="col-xs-8">
							<div class="col-xs-12">
								<p><?php echo $parent['ParentAsignacione']['titulo']; ?></p>
							</div>
						</div>
					</div>
					<div class="form-group">
						<?php echo $this->Form->label('detalles', null, array('class' => 'col-xs-4 control-label')); ?>
						<div class="col-xs-8">
							<div class="col-xs-12">
								<p><?php echo $parent['ParentAsignacione']['detalles']; ?></p>
							</div>
						</div>
					</div>
					<hr />
				<?php else: ?>
					<div class="form-group">
						<?php echo $this->Form->label('codigo', null, array('class' => 'col-xs-4 control-label')); ?>
						<div class="col-xs-8">
							<?php if ($parent['ParentAsignacione']['id']): ?>
								<div class="col-xs-12">
									<input disabled="disabled" class="form-control" value="<?php echo $parent['ParentAsignacione']['codigo']; ?>" />
								</div>
							<?php else: ?>
								<?php echo $this->Form->input('codigo'); ?>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-xs-8">
				<div class="form-group">
					<?php echo $this->Form->label('titulo', null, array('class' => 'col-xs-1 control-label')); ?>
					<div class="col-xs-11">
						<?php echo $this->Form->input('titulo', array('rows' => 2)); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('detalles', null, array('class' => 'col-xs-1 control-label')); ?>
					<div class="col-xs-11">
						<?php echo $this->Form->input('detalles', array('rows' => 12)); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('Attachment.0.attachment', null, array('class' => 'col-xs-1 control-label')); ?>
					<div class="col-xs-11">
						<?php echo $this->Form->input('Attachment.0.attachment', array('type' => 'file', 'required' => false, 'empty' => true)); ?>
						<?php echo $this->Form->input('Attachment.0.model', array('type' => 'hidden', 'value' => 'Asignacione')); ?>
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