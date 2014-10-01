<div class="page_title2">
<div class="container">

    <div class="title"><h1><?php echo __('Categorias de Comunicacion'); ?></h1></div>
    <div class="two_third">
    	<div class="pagenation">&nbsp;<?php echo $this->Html->link(__('Home'), '/'); ?> <i>/</i> <?php echo __('Categorias de Comunicacion list'); ?></div>
    </div>
    <div class="one_third last text-right">
    	<?php echo $this->Html->link(__('<i class="fa fa-plus fa-lg"></i> %s</a>', __('Add Categoria de Comunicacion')), array('action' => 'add'), array('escape' => false)); ?>
    </div>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="container">

	<div class="content_fullwidth">
		<?php if (empty($comunicacioncategorias)): ?>
			<?php echo __('No hay categorias registradas'); ?>
		<?php else: ?>
			<table class="table-list">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
						<th><?php echo $this->Paginator->sort('dependencia_id'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>
				<?php foreach ($comunicacioncategorias as $comunicacioncategoria): ?>
					<tbody>
						<tr>
							<td><?php echo h($comunicacioncategoria['Comunicacioncategoria']['id']); ?>&nbsp;</td>
							<td><?php echo h($comunicacioncategoria['Comunicacioncategoria']['descripcion']); ?>&nbsp;</td>
							<td><?php echo isset($comunicacioncategoria['Dependencia']['iniciales']) ? $this->Html->link($comunicacioncategoria['Dependencia']['iniciales'], array('controller' => 'dependencias', 'action' => 'view', $comunicacioncategoria['Dependencia']['id'])) : 'Todas'; ?></td>
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('action' => 'view', $comunicacioncategoria['Comunicacioncategoria']['id'])); ?>
								<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $comunicacioncategoria['Comunicacioncategoria']['id'])); ?>
								<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $comunicacioncategoria['Comunicacioncategoria']['id']), array(), __('Are you sure you want to delete # %s?', $comunicacioncategoria['Comunicacioncategoria']['id'])); ?>
							</td>
						</tr>
					</tbody>
				<?php endforeach; ?>
			</table>
			<p>
				<?php echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));?>
			</p>
			<div class="paging">
				<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
				?>
			</div>
		<?php endif; ?>
	</div>
	<div class="margin_top5"></div>
	<div class="clearfix"></div>
</div><!-- end content area -->