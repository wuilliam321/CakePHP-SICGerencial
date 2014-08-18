<div class="page_title2">
<div class="container">

    <div class="title"><h1><?php echo __('Edit Comunicacione'); ?></h1></div>
    <div class="two_third">
    	<div class="pagenation">&nbsp;<?php echo $this->Html->link(__('Home'), '/'); ?> <i>/</i> <?php echo $this->Html->link(__('Comunicaciones list'), array('action' => 'index')); ?> <?php if ($parent['Comunicacione']['id']): ?> <i>/</i> <?php echo $this->Html->link(__('Comunicacione'), array('action' => 'view', $parent['Comunicacione']['id'])); ?><?php endif; ?><i>/</i> <?php echo __('Add'); ?></div>
    </div>
    <div class="one_third last text-right">
    	<?php echo $this->Html->link(__('<i class="fa fa-chevron-left fa-lg"></i> %s</a>', __('Volver')), 'javascript: window.history.go(-1)', array('onclick' => "return confirm('Esta seguro(a) que desea salir y perder los cambios?');", 'escape' => false)); ?>
    </div>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="container">

	<div class="content_fullwidth">
<?php echo $this->Form->create('Comunicacione', array('type' => 'file', 'class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('label' => false, 'div' => array('class' => 'col-xs-12'), 'class' => 'form-control'))); ?>
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
						<?php echo $this->Form->label('remitente_id', null, array('class' => 'col-xs-4 control-label')); ?>
						<div class="col-xs-8">
							<div class="col-xs-12">
								<p><?php echo $parent['Remitente']['name']; ?></p>
							</div>
						</div>
					</div>
					<div class="form-group">
						<?php echo $this->Form->label('comunicacioncategoria_id', null, array('class' => 'col-xs-4 control-label')); ?>
						<div class="col-xs-8">
							<div class="col-xs-12">
								<p><?php echo $parent['Comunicacioncategoria']['descripcion']; ?></p>
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
				</div>
			<?php endif; ?>
			<div class="col-xs-<?php echo (isset($parent['Comunicacione']['codigo'])) ? '8' : '12'; ?>">
				<?php if (!isset($parent['Comunicacione']['codigo'])): ?>
					<div class="form-group">
						<?php echo $this->Form->label('codigo', null, array('class' => 'col-xs-2 control-label')); ?>
						<div class="col-xs-2">
							<?php echo $this->Form->input('codigo'); ?>
						</div>
					</div>
				<?php endif; ?>

				<?php if (!isset($parent['Comunicacione']['id'])): ?>
					<div class="form-group">
						<?php echo $this->Form->label('comunicacioncategoria_id', null, array('class' => 'col-xs-2 control-label')); ?>
						<div class="col-xs-10">
							<?php echo $this->Form->input('comunicacioncategoria_id'); ?>
						</div>
					</div>
				<?php else: ?>
					<?php echo $this->Form->input('comunicacioncategoria_id', array('type' => 'hidden')); ?>
				<?php endif; ?>

				<div class="form-group">
					<?php echo $this->Form->label('User', null, array('class' => 'col-xs-2 control-label')); ?>
					<div class="col-xs-10">
						<?php echo $this->Form->input('User'); ?>
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
						<?php echo $this->Form->input('Attachment.0.model', array('type' => 'hidden', 'value' => 'Comunicacione')); ?>
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
										<span class="badge btn btn-info"><?php echo $this->Html->link('Descargar', 	array('action' => 'download', $attachment['id'], 'comunicaciones'), array('class' => 'fg-white')); ?></span>
									</span>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
				<?php endif; ?>

				<?php if ($this->request->data['Comunicacione']['codigo']): ?>
					<div class="form-group">
						<?php echo $this->Form->label('fecha_fin', null, array('class' => 'col-xs-2 control-label')); ?>
						<div class="col-xs-10">
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
	</div>
</div>