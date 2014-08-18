<div class="page_title2">
<div class="container">

    <div class="title"><h1><?php echo __('Asignaciones'); ?></h1></div>
    <div class="two_third">
    	<div class="pagenation">&nbsp;<?php echo $this->Html->link(__('Home'), '/'); ?> <i>/</i> <?php echo __('Asignaciones list'); ?></div>
    </div>
    <div class="one_third last text-right">
    	<?php echo $this->Html->link(__('<i class="fa fa-plus fa-lg"></i> %s</a>', __('Add Asignacione')), array('action' => 'add'), array('escape' => false)); ?>
    </div>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="container">

	<div class="content_fullwidth">
		<?php if (empty($asignaciones)): ?>
			<?php echo __('No hay asignaciones registradas'); ?>
		<?php else: ?>
			<?php foreach ($asignaciones as $asignacione): ?>
				<div class="blog_post">	
					<div class="blog_postcontent">
						<h3><?php echo $this->Html->link($asignacione['Asignacione']['codigo'] . ' / ' . $this->Text->truncate($asignacione['Asignacione']['titulo'], 120) . __(' <small><i class="fa fa-share"></i> %s</small>', __('Ver detalles')), array('action' => 'view', $asignacione['Asignacione']['id']), array('escape' => false)); ?></h3>
						<ul class="post_meta_links">
							<li class="post_comments"><i>Creada:</i> <?php echo h($asignacione['Asignacione']['created']); ?></li>
							<li class="post_comments"><i>Inicio:</i> <?php echo $asignacione['Asignacione']['fecha_asignacion']; ?></li>
							<li class="post_comments"><i>Fin:</i> <?php echo $asignacione['Asignacione']['fecha_entrega']; ?></li>
							<li class="post_by"><i>Asignador:</i> <?php echo $asignacione['Asignador']['name']; ?></li>
							<li class="post_categoty"><i>Responsable:</i> <?php echo $asignacione['Responsable']['name']; ?></li>
							<?php if ($auth_user['id'] == $asignacione['Asignacione']['responsable_id']): ?>
								<li><?php echo $this->Html->link(__('<i class="fa fa-bar-chart-o fa-lg"></i> %s</a>', __('Avance')), array('controller' => 'avances', 'action' => 'add', $asignacione['Asignacione']['id']), array('escape' => false)); ?></li>
							<?php endif; ?>
							<?php if ($auth_user['id'] == $asignacione['Asignacione']['asignador_id']): ?>
								<li><?php echo $this->Html->link(__('<i class="fa fa-pencil fa-lg"></i> %s</a>', __('Edit')), array('action' => 'edit', $asignacione['Asignacione']['id']), array('escape' => false)); ?></li>
								<li><?php echo $this->Form->postLink(__('<i class="fa fa-times fa-lg"></i> %s</a>', __('Delete')), array('action' => 'delete', $asignacione['Asignacione']['id']), array('escape' => false), 'Esta seguro(a) que desea eliminar este registro?'); ?></li>
							<?php endif; ?>
						</ul>
						<div class="clearfix"></div>
			            <div class="progress_bar ui-progress-bar ui-container">
			            	<div class="ui-progress" data-progress="<?php echo $this->Number->precision($asignacione['Asignacione']['progreso'], 0); ?>%"><span class="ui-label"><b class="value"><?php echo $this->Number->precision($asignacione['Asignacione']['progreso'], 0); ?>%</b></span></div>
			            </div><!-- end section -->
						<div class="clearfix"></div>
			            <div class="progress_bar ui-progress-bar ui-container">
			            	<div class="ui-progress green" data-progress="<?php echo $this->Number->precision($asignacione['Asignacione']['progreso'], 0); ?>%"><span class="ui-label"><b class="value"><?php echo $this->Number->precision($asignacione['Asignacione']['progreso'], 0); ?>%</b></span></div>
			            </div><!-- end section -->
						<div class="clearfix"></div>
						<div class="margin_top1"></div>
						<p>
							<?php echo $this->Text->truncate($asignacione['Asignacione']['detalles'], 400); ?>
						</p>
					</div>
				</div><!-- /# end post -->
				<div class="margin_top5"></div>
				<div class="clearfix"></div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>

</div><!-- end content area -->