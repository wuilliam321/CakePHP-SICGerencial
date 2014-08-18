<div class="page_title2">
<div class="container">

    <div class="title"><h1><?php echo __('Add Avance'); ?></h1></div>
    <div class="two_third">
    	<div class="pagenation">&nbsp;<?php echo $this->Html->link(__('Home'), '/'); ?> <i>/</i> <?php echo $this->Html->link(__('Asignaciones list'), array('action' => 'index')); ?> <?php if ($asignacione['Asignacione']['codigo']): ?> <i>/</i> <?php echo $this->Html->link($asignacione['Asignacione']['codigo'], array('controller' => 'asignaciones', 'action' => 'view', $asignacione['Asignacione']['id'])); ?><?php endif; ?> <i>/</i>  <?php echo __('Avance'); ?></div>
    </div>
    <div class="one_third last text-right">
    	<?php echo $this->Html->link(__('<i class="fa fa-chevron-left fa-lg"></i> %s</a>', __('Volver')), 'javascript: window.history.go(-1)', array('onclick' => "return confirm('Esta seguro(a) que desea salir y perder los cambios?');", 'escape' => false)); ?>
    </div>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="container">

	<div class="content_fullwidth">
		<?php echo $this->Form->create('Avance', array('type' => 'file', 'class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('label' => false, 'div' => array('class' => 'col-xs-12'), 'class' => 'form-control'))); ?>
	<fieldset>
		<legend><?php echo __('Datos de la asignacion'); ?></legend>
		<div class="row">
			<div class="col-xs-4 left-sidebar">
				<div class="form-group">
					<?php echo $this->Form->label('porcentaje_avanzado', null, array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<?php echo $this->Form->input('porcentaje_avanzado', array('max' => 100, 'min' => 0, 'value' => '', 'div' => array('class' => 'input-group'), 'after' => '<div class="input-group-addon">%</div>', 'escape' => false)); ?>
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
					<?php echo $this->Form->label('user_id', __('Responsable'), array('class' => 'col-xs-4 control-label')); ?>
					<div class="col-xs-8">
						<div class="col-xs-12">
							<p><?php echo $asignacione['Responsable']['name']; ?></p>
						</div>
					</div>
				</div>
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
			</div>
			<div class="col-xs-8">

				<div class="form-group">
					<?php echo $this->Form->label('detalles', null, array('class' => 'col-xs-2 control-label')); ?>
					<div class="col-xs-10">
						<?php echo $this->Form->input('detalles', array('rows' => 12, 'class' => 'ckeditor')); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->label('Attachment.0.attachment', null, array('class' => 'col-xs-2 control-label')); ?>
					<div class="col-xs-10">
						<?php echo $this->Form->input('Attachment.0.attachment', array('type' => 'file', 'required' => false, 'empty' => true)); ?>
						<?php echo $this->Form->input('Attachment.0.model', array('type' => 'hidden', 'value' => 'Avance')); ?>
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
</div>
</div>