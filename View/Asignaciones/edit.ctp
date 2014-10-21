<div class="page_title2">
<div class="container">

    <div class="title"><h1><?php echo __('Edit Asignacione'); ?></h1></div>
    <div class="two_third">
    	<div class="pagenation">&nbsp;<?php echo $this->Html->link(__('Home'), '/'); ?> <i>/</i> <?php echo $this->Html->link(__('Asignaciones list'), array('action' => 'index')); ?> <?php if ($parent['ParentAsignacione']['id']): ?> <i>/</i> <?php echo $this->Html->link(__('Asignacione'), array('controller' => 'asignaciones', 'action' => 'view', $parent['ParentAsignacione']['id'])); ?><?php endif; ?> <i>/</i> <?php echo __('Edit'); ?></div>
    </div>
    <div class="one_third last text-right">
    	<?php echo $this->Html->link(__('<i class="fa fa-chevron-left fa-lg"></i> %s</a>', __('Volver')), 'javascript: window.history.go(-1)', array('onclick' => "return confirm('Esta seguro(a) que desea salir y perder los cambios?');", 'escape' => false)); ?>
    </div>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="container">

	<div class="content_fullwidth">
		<?php echo $this->Form->create('Asignacione', array('type' => 'file', 'class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('label' => false, 'div' => array('class' => 'col-xs-12'), 'class' => 'form-control'))); ?>
	<fieldset>
		<legend><?php echo __('Datos de la asignacion'); ?></legend>
		<div class="row">
			<div class="col-xs-4 left-sidebar">
				<?php echo $this->Form->input('id'); ?>
				<div class="form-group">
					<?php echo $this->Form->label('responsable_id', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php if ($auth_user['id'] == $this->request->data['Asignacione']['asignador_id']): ?>
							<?php echo $this->Form->input('responsable_id'); ?>
						<?php else: ?>
							<div class="col-xs-12">
									<p class="form-control"><?php echo $responsables[$this->request->data['Asignacione']['responsable_id']]; ?></p>
									<?php echo $this->Form->input('responsable_id', array('type' => 'hidden')); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('dependencia_id', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php if ($auth_user['id'] == $this->request->data['Asignacione']['asignador_id']): ?>
							<?php echo $this->Form->input('dependencia_id'); ?>
						<?php else: ?>
							<div class="col-xs-12">
									<p class="form-control"><?php echo $dependencias[$this->request->data['Asignacione']['dependencia_id']]; ?></p>
									<?php echo $this->Form->input('dependencia_id', array('type' => 'hidden')); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('fecha_asignacion', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php if ($auth_user['id'] == $this->request->data['Asignacione']['asignador_id']): ?>
							<?php echo $this->Form->input('fecha_asignacion', array('type' => 'text', 'div' => array('class' => 'input-group'), 'after' => '<div class="input-group-addon"><i class="fa fa-calendar"></i></div>', 'escape' => false)); ?>
						<?php else: ?>
							<div class="col-xs-12 input-group">
									<p class="form-control"><?php echo $this->request->data['Asignacione']['fecha_asignacion']; ?></p>
									<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
									<?php echo $this->Form->input('fecha_asignacion', array('type' => 'hidden')); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('fecha_entrega', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php if ($auth_user['id'] == $this->request->data['Asignacione']['asignador_id']): ?>
							<?php echo $this->Form->input('fecha_entrega', array('type' => 'text', 'div' => array('class' => 'input-group'), 'after' => '<div class="input-group-addon"><i class="fa fa-calendar"></i></div>', 'escape' => false)); ?>
						<?php else: ?>
							<div class="col-xs-12 input-group">
									<p class="form-control"><?php echo $this->request->data['Asignacione']['fecha_entrega']; ?></p>
									<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
									<?php echo $this->Form->input('fecha_entrega', array('type' => 'hidden')); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('User', __('Colaboradores'), array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php if ($auth_user['id'] == $this->request->data['Asignacione']['asignador_id']): ?>
							<?php echo $this->Form->input('User', array('class' => 'colaboradores-select')); ?>
							<div class="col-xs-12">
								<ul id="colaboradores-selected"></ul>
							</div>
						<?php else: ?>
							<div class="col-xs-12">
								<ul>
									<?php foreach ($this->request->data['User'] as $user): ?>
										<li><?php echo $user['name']; ?></li>
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('porcentaje_asignado', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php if ($auth_user['id'] == $this->request->data['Asignacione']['asignador_id']): ?>
							<?php echo $this->Form->input('porcentaje_asignado', array('max' => 100, 'min' => 0, 'div' => array('class' => 'input-group'), 'after' => '<div class="input-group-addon">%</div>', 'escape' => false)); ?>
						<?php else: ?>
							<div class="col-xs-12 input-group">
									<p class="form-control"><?php echo $this->request->data['Asignacione']['porcentaje_asignado']; ?></p>
									<div class="input-group-addon">%</div>
									<?php echo $this->Form->input('porcentaje_asignado', array('type' => 'hidden')); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<?php if (!$parent['ParentAsignacione']['id']): ?>
					<div class="form-group">
						<?php echo $this->Form->label('porcentaje_distribuido', null, array('class' => 'col-xs-4 control-label')); ?>
						<div class="col-xs-8">
							<?php if ($auth_user['id'] == $this->request->data['Asignacione']['asignador_id']): ?>
								<?php echo $this->Form->input('porcentaje_distribuido', array('max' => 100, 'min' => 0, 'div' => array('class' => 'input-group'), 'after' => '<div class="input-group-addon">%</div>', 'escape' => false)); ?>
							<?php else: ?>
								<div class="col-xs-12 input-group">
										<p class="form-control"><?php echo $this->request->data['Asignacione']['porcentaje_distribuido']; ?></p>
										<div class="input-group-addon">%</div>
										<?php echo $this->Form->input('porcentaje_distribuido', array('type' => 'hidden')); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
				<!-- 

				<div class="form-group">
					<?php //echo $this->Form->label('progreso', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php //echo $this->Form->input('progreso', array('max' => 100, 'min' => 0, 'div' => array('class' => 'input-group'), 'after' => '<div class="input-group-addon">%</div>', 'escape' => false)); ?>
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
						<?php echo $this->Form->label('codigo', null, array('class' => 'col-xs-4 control-label', 'readonly' => 'readonly')); ?>
						<div class="col-xs-8">
							<?php if ($parent['ParentAsignacione']['id']): ?>
								<div class="col-xs-12">
									<input disabled="disabled" class="form-control" value="<?php echo $parent['ParentAsignacione']['codigo']; ?>" />
								</div>
							<?php else: ?>
								<?php if ($auth_user['id'] == $this->request->data['Asignacione']['asignador_id']): ?>
									<?php echo $this->Form->input('codigo', array('readonly' => 'readonly')); ?>
								<?php else: ?>
									<div class="col-xs-12">
											<p class="form-control"><?php echo $this->request->data['Asignacione']['codigo']; ?></p>
											<?php echo $this->Form->input('codigo', array('type' => 'hidden', 'readonly' => 'readonly')); ?>
									</div>
								<?php endif; ?>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-xs-8">
				<div class="form-group">
					<?php echo $this->Form->label('titulo', null, array('class' => 'col-xs-2 control-label')); ?>
					<div class="col-xs-10">
						<?php echo $this->Form->input('titulo', array('rows' => 2)); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('detalles', null, array('class' => 'col-xs-2 control-label')); ?>
					<div class="col-xs-10">
						<?php echo $this->Form->input('detalles', array('rows' => 12, 'class' => 'ckeditor')); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('Attachment.0.attachment', null, array('class' => 'col-xs-2 control-label')); ?>
					<div class="col-xs-10">
						<?php echo $this->Form->input('Attachment.0.attachment', array('type' => 'file', 'required' => false)); ?>
						<?php echo $this->Form->input('Attachment.0.model', array('type' => 'hidden', 'value' => 'Asignacione')); ?>
					</div>
				</div>

				<?php if ($this->request->data['Attachment']): ?>
				<div class="form-group">
					<?php echo $this->Form->label('Attachment.0.attachment', '', array('class' => 'col-xs-2 control-label')); ?>
					<div class="col-xs-10">
						<div class="list-group">
							<div class="col-xs-12">
								<a href="#" class="list-group-item active">
									<?php echo __('Attachments'); ?>
								</a>
								<?php foreach ($this->request->data['Attachment'] as $attachment): ?>
									<span class="list-group-item">
										<?php echo $attachment['name']; ?>
										<span class="badge btn btn-danger"><?php echo $this->Html->link('Eliminar', 	array('controller' => 'attachments', 'action' => 'delete', $attachment['id']), array('class' => 'fg-white')); ?></span>
										<span class="badge btn btn-info"><?php echo $this->Html->link('Descargar', 	array('action' => 'download', $attachment['id'], 'asignaciones'), array('class' => 'fg-white')); ?></span>
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
</div>
</div>