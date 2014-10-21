<div class="page_title2">
<div class="container">

    <div class="title"><h1><?php echo __('Comunicaciones'); ?></h1></div>
    <div class="two_third">
    	<div class="pagenation">&nbsp;<?php echo $this->Html->link(__('Home'), '/'); ?> <i>/</i> <?php echo __('Comunicaciones list'); ?></div>
    </div>
    <div class="one_third last text-right">
    	<?php echo $this->Html->link(__('<i class="fa fa-plus fa-lg"></i> %s</a>', __('Add Comunicacione')), array('action' => 'add'), array('escape' => false)); ?>
    </div>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="container">

	<div class="content_fullwidth">
		<?php if (empty($comunicaciones)): ?>
			<?php echo __('No hay comunicaciones registradas'); ?>
		<?php else: ?>
			<div class="pricing-tables full">
			    <div class="cont-list">
			    	<ul>
						<?php foreach ($comunicaciones as $comunicacione): ?>
			        		<li <?php echo ($comunicacione['Comunicacione']['completada']) ? ' class="opacity50"' : ''; ?>>
			        			<div class="col-xs-1"><?php echo $this->Html->link($comunicacione['Comunicacione']['codigo'], array('action' => 'view', $comunicacione['Comunicacione']['id'])); ?></div>
			        			<div class="col-xs-2"><?php echo $comunicacione['Remitente']['name']; ?></div>
			        			<div class="col-xs-7"><?php echo $comunicacione['Comunicacioncategoria']['descripcion']; ?></div>
			        			<div class="col-xs-2">
			        				<?php if(sizeof($comunicacione['Attachment']) > 0): ?>
										<i title="<?php echo __('Tiene adjuntos'); ?>"><span class="fa fa-paperclip"></span></i>
									<?php endif; ?>
			        				<?php echo $comunicacione['Comunicacione']['fecha_remision']; ?>
			        			</div>
			        		</li>
			        	<?php endforeach; ?>
			        </ul>
			    </div>
			</div>
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