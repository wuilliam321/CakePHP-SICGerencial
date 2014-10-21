<div class="page_title2">
<div class="container">

    <div class="title"><h1><?php if ($comunicacione['Comunicacione']['codigo']): ?><?php echo h($comunicacione['Comunicacione']['codigo']); ?> - <?php endif; ?><?php echo $comunicacione['Comunicacioncategoria']['descripcion']; ?></h1></div>
    <div class="two_third">
    	<div class="pagenation">&nbsp;<?php echo $this->Html->link(__('Home'), '/'); ?> <i>/</i> <?php echo $this->Html->link(__('Comunicaciones list'), array('action' => 'index')); ?> <i>/</i> <?php echo __('Details'); ?></div>
    </div>
    <div class="one_third last text-right">
    	<?php if ($auth_user['id'] == $comunicacione['Comunicacione']['remitente_id']): ?>
    		<?php echo $this->Html->link(__('<i class="fa fa-pencil fa-lg"></i> %s</a>', __('Edit')), array('action' => 'edit', $comunicacione['Comunicacione']['id']), array('escape' => false)); ?>
    	 	<i>|</i>
    		<?php echo $this->Form->postLink(__('<i class="fa fa-check-square fa-lg"></i> %s</a>', __('Finalizar')), array('action' => 'finalizar', $comunicacione['Comunicacione']['id']), array('escape' => false)); ?>
    		<i>|</i>
    	<?php endif; ?>
    	<?php if (in_array($auth_user['id'], $reciben_ids)): ?>
    		<?php echo $this->Html->link(__('<i class="fa fa-reply fa-lg"></i> %s</a>', __('Responder')), array('action' => 'add', $comunicacione['Comunicacione']['id']), array('escape' => false)); ?>
    		<i>|</i>
    	<?php endif; ?>
    	<?php echo $this->Html->link(__('<i class="fa fa-chevron-left fa-lg"></i> %s</a>', __('Volver')), 'javascript: window.history.go(-1)', array('onclick' => "return confirm('Esta seguro(a) que desea salir y perder los cambios?');", 'escape' => false)); ?>
    </div>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="container">

	<div class="content_fullwidth comunicaciones-details">


		<?php if ($comunicacione['Comunicacione']['codigo']): ?>
			<div class="one_fifth">
		        <h6><?php echo __('Codigo'); ?></h6>
		        <p><?php echo h($comunicacione['Comunicacione']['codigo']); ?></p>
	        </div>
	    <?php endif; ?>
		<div class="one_fifth">
	        <h6><?php echo __('Remitente'); ?></h6>
	        <p><?php echo $comunicacione['Remitente']['name']; ?></p>
        </div>
		<div class="one_fifth">
	        <h6><?php echo __('Fecha Remision'); ?></h6>
	        <p><?php echo h($comunicacione['Comunicacione']['fecha_remision']); ?></p>
        </div>
        <?php if ($comunicacione['Comunicacione']['fecha_fin']): ?>
			<div class="one_fifth">
		        <h6><?php echo __('Fecha Fin'); ?></h6>
		        <p><?php echo h($comunicacione['Comunicacione']['fecha_fin']); ?></p>
	        </div>
	    <?php endif; ?>
		<div class="one_fifth last">
	        <h6><?php echo __('Destinatarios'); ?></h6>
	        <ul class="arrows_list1">
	        	<?php foreach($comunicacione['User'] as $user): ?>
	        		<li><i class="fa fa-angle-right"></i> <?php echo $user['name']; ?></li>
	        	<?php endforeach; ?>
	        </ul>
        </div>
        <div class="margin_top3"></div>

		<div class="blog_post">	
			<div class="blog_postcontent comment">
				<p>
					<?php echo $comunicacione['Comunicacione']['detalles'] ?>
				</p>
				<?php if(sizeof($comunicacione['Attachment']) > 0): ?>
					<div class="margin_top1"></div>
					<h6><?php echo __('Attachments'); ?></h6>
					<ul class="arrows_list1">
						<?php foreach ($comunicacione['Attachment'] as $attachment): ?>
							<li>
								<?php echo $this->Html->link('<i class="fa fa-download"></i>&nbsp;', array('action' => 'download', $attachment['id'], 'comunicaciones'), array('escape' => false)); ?>
								<?php echo $attachment['name']; ?>
								<i><?php echo $this->Number->toReadableSize($attachment['size']); ?></i>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div><!-- /# end post -->
		<div class="clearfix divider_dashed9"></div>

        <div class="clearfix"></div>
		<h4><?php echo __('Respuestas'); ?></h4>
		<div class="mar_top_bottom_lines_small3"></div>
		<?php if (empty($comunicacione['ChildComunicacione'])): ?>
			<?php echo __('No hay respuestas a la comunicacion'); ?>
		<?php else: ?>
				<?php foreach ($comunicacione['ChildComunicacione'] as $children_comunicacione): ?>
					<div class="comment_wrap <?php echo ($children_comunicacione['Comunicacione']['level'] > 0) ? 'chaild level' . $children_comunicacione['Comunicacione']['level'] : ''; ?>">
						<div class="gravatar"><img src="<?php echo $this->webroot; ?>images/blog/people_img.jpg" alt=""></div>
						<div class="comment_content">
							<div class="comment_meta">

								<div class="comment_author"><?php echo $children_comunicacione['Remitente']['name']; ?> - <i><?php echo $children_comunicacione['Comunicacione']['fecha_remision']; ?></i>
									<?php if(sizeof($children_comunicacione['Attachment']) > 0): ?>
										<i title="<?php echo __('Tiene adjuntos'); ?>"><span class="fa fa-paperclip"></span></i>
									<?php endif; ?>

    							<?php echo $this->Html->link('<i class="fa fa-reply fa-lg"></i> <small>Responder</small>', array('action' => 'add', $children_comunicacione['Comunicacione']['id']), array('escape' => false)); ?>
								<?php if ($auth_user['id'] == $children_comunicacione['Comunicacione']['remitente_id']): ?>
									<?php // echo $this->Html->link('<i class="fa fa-pencil"></i> <small>Editar</small>', array('action' => 'edit', $children_comunicacione['Comunicacione']['id']), array('escape' => false)); ?>
									<?php // echo $this->Form->postLink('<span class="fa fa-times"></span>', array('action' => 'delete', $children_comunicacione['Comunicacione']['id']), array('escape' => false)); ?>
								<?php endif; ?></div>                   
			                    
							</div>
							<div class="comment_text">
								<p><?php echo $children_comunicacione['Comunicacione']['detalles']; ?></p>
								<?php if(sizeof($children_comunicacione['Attachment']) > 0): ?>
									<div class="margin_top1"></div>
									<h6><?php echo __('Attachments'); ?></h6>
									<ul class="arrows_list1">
										<?php foreach ($children_comunicacione['Attachment'] as $attachment): ?>
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
					<?php endforeach; ?>
			<?php endif; ?>
	</div>
</div>