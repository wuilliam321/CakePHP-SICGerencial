<div class="page_title2">
<div class="container">

    <div class="title"><h1><?php if ($asignacione['Asignacione']['codigo']): ?><?php echo h($asignacione['Asignacione']['codigo']); ?> - <?php endif; ?><?php echo __('Asignacione details'); ?></h1></div>
    <div class="two_third">
    	<div class="pagenation">&nbsp;<?php echo $this->Html->link(__('Home'), '/'); ?> <i>/</i> <?php echo $this->Html->link(__('Asignaciones list'), array('action' => 'index')); ?> <i>/</i> <?php if ($asignacione['Asignacione']['parent_id']): ?>  <?php echo $this->Html->link(__('Asignacione Superior'), array('action' => 'view', $asignacione['Asignacione']['parent_id'])); ?> <i>/</i> <?php echo __('Asignacione'); ?> <?php else: ?> <?php echo __('Asignacione'); ?> <?php endif; ?></div>
    </div>
    <div class="one_third last text-right">
    	<?php if ($auth_user['id'] == $asignacione['Asignacione']['responsable_id']): ?>
    		<?php echo $this->Html->link(__('<i class="fa fa-bar-chart-o fa-lg"></i> %s</a>', __('Avance')), array('controller' => 'avances', 'action' => 'add', $asignacione['Asignacione']['id']), array('escape' => false)); ?>
    		<i>|</i>
		<?php endif; ?>
    	<?php if ($auth_user['id'] == $asignacione['Asignacione']['asignador_id']): ?>
    		<?php echo $this->Html->link(__('<i class="fa fa-pencil fa-lg"></i> %s</a>', __('Edit')), array('action' => 'edit', $asignacione['Asignacione']['id']), array('escape' => false)); ?>
    	 	<i>|</i>
    		<?php echo $this->Form->postLink(__('<i class="fa fa-check-square fa-lg"></i> %s</a>', __('Finalizar')), array('controller' => 'asignaciones', 'action' => 'finalizar', $asignacione['Asignacione']['id']), array('escape' => false)); ?>
    		<i>|</i>
    	<?php endif; ?>
    	<?php echo $this->Html->link(__('<i class="fa fa-chevron-left fa-lg"></i> %s</a>', __('Volver')), 'javascript: window.history.go(-1)', array('onclick' => "return confirm('Esta seguro(a) que desea salir y perder los cambios?');", 'escape' => false)); ?>
    </div>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="container">

	<div class="content_fullwidth">

		<?php if ($asignacione['Asignacione']['codigo']): ?>
			<div class="one_fifth">
		        <h6><?php echo __('Codigo'); ?></h6>
		        <p><?php echo h($asignacione['Asignacione']['codigo']); ?></p>
	        </div>
	    <?php endif; ?>
		<div class="one_fifth">
	        <h6><?php echo __('Asignador'); ?></h6>
	        <p><?php echo $asignacione['Asignador']['name']; ?></p>
        </div>
		<div class="one_fifth">
	        <h6><?php echo __('Responsable'); ?></h6>
	        <p><?php echo $asignacione['Responsable']['name']; ?></p>
        </div>
		<div class="one_fifth">
	        <h6><?php echo __('Fecha Inicio'); ?></h6>
	        <p><?php echo h($asignacione['Asignacione']['fecha_asignacion']); ?></p>
        </div>
		<div class="one_fifth last">
	        <h6><?php echo __('Fecha Fin'); ?></h6>
	        <p><?php echo h($asignacione['Asignacione']['fecha_entrega']); ?></p>
        </div>
        <div class="margin_top3"></div>

		<div class="blog_post">	
			<div class="blog_postcontent">
				<h3><?php echo $asignacione['Asignacione']['titulo']; ?></h3>
				<ul class="post_meta_links">
					<li class="post_comments"><i>Creada:</i> <?php echo h($asignacione['Asignacione']['created']); ?></li>
					<li class="post_comments"><i>Inicio:</i> <?php echo $asignacione['Asignacione']['fecha_asignacion']; ?></li>
					<li class="post_comments"><i>Fin:</i> <?php echo $asignacione['Asignacione']['fecha_entrega']; ?></li>
					<li class="post_by"><i>Asignador:</i> <?php echo $asignacione['Asignador']['name']; ?></li>
					<li class="post_categoty"><i>Responsable:</i> <?php echo $asignacione['Responsable']['name']; ?></li>
				</ul>
				<div class="clearfix"></div>
				<div class="progreso one_full">
					<div class="three_fourth">
						<div class="progress_bar ui-progress-bar ui-container">
							<div class="ui-progress" data-progress="<?php echo $this->Number->precision($asignacione['Asignacione']['progreso_tiempo'], 0); ?>%"><span class="ui-label"><b class="value"><?php echo $this->Number->precision($asignacione['Asignacione']['progreso_tiempo'], 0); ?>%</b></span></div>
						</div><!-- end section -->
					</div>
					<div class="one_fourth last">
						<h5><?php echo __('Tiempo Transcurrido'); ?></h5>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="progreso one_full">
					<div class="three_fourth">
						<div class="progress_bar ui-progress-bar ui-container">
							<?php if ($asignacione['Asignacione']['parent_id']): ?>
								<div class="ui-progress green" data-progress="<?php echo $this->Number->precision($asignacione['Asignacione']['progreso'], 0); ?>%"><span class="ui-label"><b class="value"><?php echo $this->Number->precision($asignacione['Asignacione']['progreso'], 0); ?>%</b></span></div>
							<?php else: ?>
								<div class="ui-progress green" data-progress="<?php echo $this->Number->precision($asignacione['Asignacione']['progreso_fisico'], 0); ?>%"><span class="ui-label"><b class="value"><?php echo $this->Number->precision($asignacione['Asignacione']['progreso_fisico'], 0); ?>%</b></span></div>
							<?php endif; ?>
						</div><!-- end section -->
					</div>
					<div class="one_fourth last">
						<h5><?php echo __('Progreso Fisico'); ?></h5>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="margin_top1"></div>
				<p>
					<?php echo $asignacione['Asignacione']['detalles'] ?>
				</p>
			</div>
		</div><!-- /# end post -->

		<div class="margin_top5"></div>
        <div class="two_third">
			<div class="margin_top5"></div>
			<div class="desgloce">
				<h1><?php echo __('Desgloce de la asignacion'); ?></h1>
		        <?php if (empty($asignacione['ChildrenAsignacione'])): ?>
		        	<?php echo __('No se ha desglozado la presente asignacion'); ?>
				<?php else: ?>
					<?php foreach ($asignacione['ChildrenAsignacione'] as $children_asignacione): ?>
						<?php //if (($auth_user['id'] == $children_asignacione['Asignacione']['responsable_id']) || ($auth_user['group_id'] == 1)): ?>
							<div class="blog_post asignacion">	
								<div class="blog_postcontent">
									<h3><?php echo $this->Html->link($children_asignacione['Asignacione']['titulo'], array('action' => 'view', $children_asignacione['Asignacione']['id']), array('escape' => false)); ?></h3>
									<ul class="post_meta_links">
										<li class="post_comments"><i>Creada:</i> <?php echo h($children_asignacione['Asignacione']['created']); ?></li>
										<li class="post_comments"><i>Inicio:</i> <?php echo $children_asignacione['Asignacione']['fecha_asignacion']; ?></li>
										<li class="post_comments"><i>Fin:</i> <?php echo $children_asignacione['Asignacione']['fecha_entrega']; ?></li>
										<li class="post_by"><i>Asignador:</i> <?php echo $children_asignacione['Asignador']['name']; ?></li>
										<li class="post_categoty"><i>Responsable:</i> <?php echo $children_asignacione['Responsable']['name']; ?></li>
										<?php if(sizeof($children_asignacione['Attachment']) > 0): ?>
											<li class="post_comments"><span title="<?php echo __('Tiene adjuntos'); ?>"><span class="fa fa-paperclip"></span></span></li>
										<?php endif; ?>
										<?php if ($auth_user['id'] == $children_asignacione['Asignacione']['asignador_id']): ?>
											<li><?php echo $this->Html->link(__('<i class="fa fa-pencil fa-lg"></i> %s</a>', __('Edit')), array('action' => 'edit', $children_asignacione['Asignacione']['id']), array('escape' => false)); ?></li>
											<li><?php echo $this->Form->postLink(__('<i class="fa fa-check fa-lg"></i> %s</a>', __('Finalizar')), array('action' => 'finalizar', $children_asignacione['Asignacione']['id']), array('escape' => false), __('Esta seguro(a) que desea finalizar esta asignacion?')); ?></li>
											<li><?php echo $this->Form->postLink(__('<i class="fa fa-times fa-lg"></i> %s</a>', __('Delete')), array('action' => 'delete', $children_asignacione['Asignacione']['id']), array('escape' => false), 'Esta seguro(a) que desea eliminar este registro?'); ?></li>
										<?php endif; ?>
									</ul>
									<div class="clearfix"></div>
									<div class="progreso one_full">
										<div class="two_third">
								            <div class="progress_bar ui-progress-bar ui-container">
								            	<div class="ui-progress" data-progress="<?php echo $this->Number->precision($children_asignacione['Asignacione']['progreso'], 0); ?>%"><span class="ui-label"><b class="value"><?php echo $this->Number->precision($children_asignacione['Asignacione']['progreso'], 0); ?>%</b></span></div>
								            </div><!-- end section -->
							           </div>
							           <div class="one_third last">
							           		<h5><?php echo __('del %s Asignado', $children_asignacione['Asignacione']['porcentaje_asignado'] . '%'); ?></h5>
							           	</div>
						            </div>
									<div class="clearfix"></div>
									<div class="margin_top1"></div>
									<div class="readmore">
										<?php echo $children_asignacione['Asignacione']['detalles']; ?>
										<?php if(sizeof($children_asignacione['Attachment']) > 0): ?>
											<div class="margin_top1"></div>
											<h6><?php echo __('Attachments'); ?></h6>
											<ul class="arrows_list1">
												<?php foreach ($children_asignacione['Attachment'] as $attachment): ?>
													<li>
														<?php echo $this->Html->link('<i class="fa fa-download"></i>&nbsp;', array('action' => 'download', $attachment['id'], 'comunicaciones'), array('escape' => false)); ?>
														<?php echo $attachment['name']; ?>
														<i><?php echo $this->Number->toReadableSize($attachment['size']); ?></i>
													</li>
												<?php endforeach; ?>
											</ul>
										<?php endif; ?>
									</div>
									<?php if (($auth_user['id'] == $children_asignacione['Asignacione']['responsable_id']) && ($children_asignacione['Asignacione']['progreso'] < 100)): ?>
						           		<div class="clearfix"></div>
					           			<div class="one_full text-right">
											<?php echo $this->Html->link(__('<i class="fa fa-bar-chart-o fa-lg"></i> %s</a>', __('Agregar Avance')), array('controller' => 'avances', 'action' => 'add', $children_asignacione['Asignacione']['id']), array('escape' => false, 'class' => 'but_wifi')); ?>
				           				</div>
									<?php endif; ?>
								</div>
							</div><!-- /# end post -->
							<div class="margin_top5"></div>
							<div class="clearfix"></div>
						<?php //endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
				<div class="margin_top3"></div>
				<div class="text-right">
					<?php if ( !($asignacione['Asignacione']['progreso'] || $asignacione['Asignacione']['progreso_fisico']) && (($auth_user['id'] == $asignacione['Asignacione']['responsable_id']) || ($auth_user['id'] == $asignacione['Asignacione']['asignador_id']))): ?>
						<?php echo $this->Html->link('<i class="fa fa-tag fa-lg"></i> ' . __('Delegar'), array('action' => 'add', $asignacione['Asignacione']['id']), array('class' => 'but_wifi', 'escape' => false)); ?>
					<?php endif; ?>
				</div>
			</div>

        	<div class="avances">
		        <h1><?php echo __('Registro de avances'); ?></h1>
		        <?php if (empty($avances)): ?>
		        	<?php echo __('No hay avances registrados en la asignacion'); ?>
				<?php else: ?>
					<?php foreach ($avances as $avance): ?>
						<?php //if (($auth_user['id'] == $avance['Avance']['user_id']) || ($auth_user['group_id'] == 1)): ?>
							<div class="avance">
								<div class="one_fourth">
				        			<ul class="tabs full">
										<li class="animate zoomIn" data-anim-type="zoomIn">
											<?php echo $this->Html->link('<i class="fa fa-bar-chart-o"></i>' . $avance['Avance']['porcentaje_avanzado'] . '%', '#content', array('escape' => false)); ?>
										</li>
									</ul>
								</div>
								<div class="three_fourth last">
									<i>
										<strong><?php echo $avance['User']['name']; ?></strong> el <?php echo $avance['Avance']['created']; ?> en <?php echo $this->Html->link($this->Text->truncate($avance['Asignacione']['titulo'], 40), array('action' => 'view', $avance['Asignacione']['id']), array('escape' => false)); ?>
										<?php if(sizeof($avance['Attachment']) > 0): ?>
											<i title="<?php echo __('Tiene adjuntos'); ?>"><span class="fa fa-paperclip"></span></i>
										<?php endif; ?>
										<?php if ($auth_user['id'] == $avance['Avance']['user_id']): ?>
											<?php echo $this->Html->link('<span class="fa fa-pencil"></span>', array('controller' => 'avances', 'action' => 'edit', $avance['Avance']['id']), array('escape' => false)); ?>
											<?php echo $this->Form->postLink('<span class="fa fa-times"></span>', array('controller' => 'avances', 'action' => 'delete', $avance['Avance']['id']), array('escape' => false)); ?>
										<?php endif; ?>
									</i>
									<div>
										<p><?php echo strip_tags($avance['Avance']['detalles']); ?>
										</p>
										<?php if(sizeof($avance['Attachment']) > 0): ?>
											<div class="margin_top1"></div>
											<ul class="arrows_list1">
												<?php foreach ($avance['Attachment'] as $attachment): ?>
													<li>
														<?php echo $this->Html->link('<i class="fa fa-download"></i>&nbsp;', array('action' => 'download', $attachment['id'], 'comunicaciones'), array('escape' => false)); ?>
														<?php echo $attachment['name']; ?>
														<i><?php echo $this->Number->toReadableSize($attachment['size']); ?></i>
													</li>
												<?php endforeach; ?>
											</ul>
										<?php endif; ?>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						<?php //endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
				<div class="margin_top3"></div>
				<div class="text-right">
					<?php if ($auth_user['id'] == $asignacione['Asignacione']['responsable_id']): ?>
					 	<?php echo $this->Html->link('<i class="fa fa-bar-chart-o fa-lg"></i> ' . __('Add Avance'), array('controller' => 'avances', 'action' => 'add', $asignacione['Asignacione']['id']), array('class' => 'but_wifi', 'escape' => false)); ?>
					 <?php endif; ?>
				</div>
			</div>
			<div class="clearfix"></div>
        </div>


		<div class="one_third last">
			<div class="attachments">
		        <h6><?php echo __('Attachments'); ?></h6>

				<?php if (empty($asignacione['Attachment'])): ?>
					<p><?php echo __('No hay adjuntos'); ?></p>
				<?php else: ?>
					<ul class="arrows_list1">
						<?php foreach ($asignacione['Attachment'] as $attachment): ?>
							<li>
								<?php echo $this->Html->link('<i class="fa fa-download"></i> ', array('action' => 'download', $attachment['id'], 'asignaciones'), array('escape' => false)); ?>
								<?php echo $attachment['name']; ?>
								<i><?php echo $this->Number->toReadableSize($attachment['size']); ?></i>
								<?php echo $this->Form->postLink(' <span class="fa fa-times"></span> ' . __('Delete'), array('controller' => 'adjuntos', 'action' => 'delete', $attachment['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $attachment['id'])); ?>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="clearfix"></div>
			<div class="margin_top3"></div>
			<div class="colaboradores">
		        <h6><?php echo __('Colaboradores'); ?></h6>

				<?php if (empty($asignacione['User'])): ?>
					<p><?php echo __('No hay colaboradores'); ?></p>
				<?php else: ?>
					<ul class="arrows_list1">
						<?php foreach ($asignacione['User'] as $user): ?>
							<li>
								<a href="#"><i class="fa fa-angle-right"></i></a> <?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?>
								<i><?php echo $user['cargo']; ?></i>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="clearfix"></div>
        </div>	
        <div class="clearfix"></div>
	</div>
</div>