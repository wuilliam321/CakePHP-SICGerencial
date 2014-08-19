<div class="page_title2">
<div class="container">

    <div class="title"><h1><?php echo __('Directorios'); ?></h1></div>
    <div class="two_third">
    	<div class="pagenation">&nbsp;<?php echo $this->Html->link(__('Home'), '/'); ?> <i>/</i> <?php echo __('Directorios list'); ?></div>
    </div>
    <div class="one_third last text-right">
    	<?php echo $this->Html->link(__('<i class="fa fa-plus fa-lg"></i> %s</a>', __('Add Directorio')), array('action' => 'add'), array('escape' => false)); ?>
    </div>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="container">

	<div class="content_fullwidth">
		<?php if (empty($directorios)): ?>
			<?php echo __('No hay directorios registrados'); ?>
		<?php else: ?>
			<?php foreach ($directorios as $directorio): ?>
				<div class="one_third">
					<div class="framed-box">
						<div class="framed-box-wrap">
							<div class="pricing-title">
								<h4 class="nocaps">
									<?php echo $directorio['Directorio']['codigo']; ?>

			        				<?php if(sizeof($directorio['Attachment']) > 0): ?>
										<i title="<?php echo __('Tiene adjuntos'); ?>"><span class="fa fa-paperclip"></span></i>
									<?php endif; ?>
								</h4>
								<p>
									<i>Inicio:</i> <?php echo $directorio['Directorio']['fecha_inicio']; ?>
									<i>Fin:</i> <?php echo $directorio['Directorio']['fecha_fin']; ?>
								</p>
							</div>
							<div class="pricing-text-list">
								<?php if (empty($directorio['Punto'])): ?>
									<?php echo __('No hay puntos asignacion al directorio'); ?>
								<?php else: ?>
									<ul class="list1">
										<?php foreach ($directorio['Punto'] as $punto): ?>
											<li><i class="fa fa-chevron-circle-right"></i> <?php echo $punto['titulo']; ?></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
								<br />
								<?php echo $this->Html->link(__('<i class="fa fa-eye"></i> %s', __('Ver Directorio')), array('action' => 'edit', $directorio['Directorio']['id']), array('class' => 'but_calendar', 'escape' => false)); ?>
								<?php echo $this->Form->postLink(__('<i class="fa fa-check"></i> %s', __('Finalizar')), array('action' => 'finalizar', $directorio['Directorio']['id']), array('class' => 'but_bookmark', 'escape' => false)); ?>
							</div>
						</div>

					</div>
				</div><!-- end section -->
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>
