<div class="page_title2">
<div class="container">

    <div class="title"><h1><?php echo __('Add Directorio'); ?></h1></div>
    <div class="two_third">
    	<div class="pagenation">&nbsp;<?php echo $this->Html->link(__('Home'), '/'); ?> <i>/</i> <?php echo $this->Html->link(__('Directorios list'), array('action' => 'index')); ?> <i>/</i> <?php echo __('Add'); ?></div>
    </div>
    <div class="one_third last text-right">
    	<?php echo $this->Html->link(__('<i class="fa fa-chevron-left fa-lg"></i> %s</a>', __('Volver')), 'javascript: window.history.go(-1)', array('onclick' => "return confirm('Esta seguro(a) que desea salir y perder los cambios?');", 'escape' => false)); ?>
    </div>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="container">

	<div class="content_fullwidth">
<?php echo $this->Form->create('Directorio', array('type' => 'file', 'class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('label' => false, 'div' => array('class' => 'col-xs-12'), 'class' => 'form-control'))); ?>
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
					<?php echo $this->Form->label('Attachment.0.attachment', null, array('class' => 'col-xs-2 control-label')); ?>
					<div class="col-xs-10">
						<?php echo $this->Form->input('Attachment.0.attachment', array('type' => 'file', 'required' => false, 'empty' => true)); ?>
						<?php echo $this->Form->input('Attachment.0.model', array('type' => 'hidden', 'value' => 'Directorio')); ?>
					</div>
				</div>

				<hr />
				<h3><?php echo __('Agenda del directorio'); ?></h3>
				<h4><?php echo __('Primer Punto'); ?></h4>
				<div class="form-group">
					<?php echo $this->Form->label('Punto.0.titulo', null, array('class' => 'col-xs-2 control-label')); ?>
					<div class="col-xs-10">
						<?php echo $this->Form->input('Punto.0.titulo'); ?>
					</div>
				</div>
				<div class="form-group">
					<?php echo $this->Form->label('Punto.0.detalles', null, array('class' => 'col-xs-2 control-label')); ?>
					<div class="col-xs-10">
						<?php echo $this->Form->input('Punto.0.detalles', array('rows' => 2)); ?>
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