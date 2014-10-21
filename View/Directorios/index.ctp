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
			<?php $i = 1; ?>
			<?php foreach ($directorios as $directorio): ?>
				<div class="one_third directorio<?php echo ($directorio['Directorio']['completada']) ? ' opacity50' : ''; ?>">
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
											<li><i class="fa fa-chevron-circle-right"></i> <?php echo $punto['titulo']; ?>:</li>
											<li><p class="margin20left"><small><?php echo $punto['detalles']; ?></small><p></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
								<br />
								<?php if ($directorio['Directorio']['completada']): ?>
									<?php echo $this->Html->link(__('<i class="fa fa-eye"></i> %s', __('Ver')), array('action' => 'view', $directorio['Directorio']['id']), array('class' => 'but_wifi', 'escape' => false)); ?>
								<?php endif; ?>
								<?php if ($auth_user['group_id'] == 1): ?>
									<?php echo $this->Html->link(__('<i class="fa fa-pencil"></i> %s', __('Editar')), array('action' => 'edit', $directorio['Directorio']['id']), array('class' => 'but_calendar', 'escape' => false)); ?>
									<?php echo $this->Form->postLink(__('<i class="fa fa-check"></i> %s', __('Finalizar')), array('action' => 'finalizar', $directorio['Directorio']['id']), array('class' => 'but_bookmark', 'escape' => false)); ?>
								<?php endif; ?>
							</div>
						</div>

					</div>
				</div><!-- end section -->
				<?php if ($i % 3 == 0): ?> <div class="clearfix"></div> <?php endif; ?>
				<?php $i++; ?>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>

	<div class="paging">
		<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>	</p>
		<p>
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</p>
	</div>
</div>
