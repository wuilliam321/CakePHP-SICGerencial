<div class="page_title2">
<div class="container">

    <div class="title"><h1><?php echo __('Add Categoria de Comunicacion'); ?></h1></div>
    <div class="two_third">
    	<div class="pagenation">&nbsp;<?php echo $this->Html->link(__('Home'), '/'); ?> <i>/</i> <?php echo $this->Html->link(__('Categorias de Comunicacion list'), array('action' => 'index')); ?> <i>/</i> <?php echo __('Add'); ?></div>
    </div>
    <div class="one_third last text-right">
    	<?php echo $this->Html->link(__('<i class="fa fa-chevron-left fa-lg"></i> %s</a>', __('Volver')), 'javascript: window.history.go(-1)', array('onclick' => "return confirm('Esta seguro(a) que desea salir y perder los cambios?');", 'escape' => false)); ?>
    </div>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="container">

	<div class="content_fullwidth">
		<?php echo $this->Form->create('Comunicacioncategoria', array('type' => 'file', 'class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('label' => false, 'div' => array('class' => 'col-xs-12'), 'class' => 'form-control'))); ?>
			<fieldset>
				<legend><?php echo __('Datos de la categoria de comunicacion'); ?></legend>
				<div class="row">
					<div class="col-xs-6 left-sidebar">
						<div class="form-group">
							<?php echo $this->Form->label('descripcion', null, array('class' => 'col-xs-2 control-label')); ?>
							<div class="col-xs-10">
								<?php echo $this->Form->input('descripcion'); ?>
							</div>
						</div>
						<div class="form-group">
							<?php echo $this->Form->label('dependencia_id', null, array('class' => 'col-xs-2 control-label')); ?>
							<div class="col-xs-10">
								<?php echo $this->Form->input('dependencia_id'); ?>
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