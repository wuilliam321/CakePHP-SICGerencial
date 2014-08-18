<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> ' . __('Nuevo directorio'), array('action' => 'add'), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
<table class="table table-condensed table-bordered table-striped">
	<thead>
		<tr>
			<th class="col-xs-0">&nbsp;</th>
			<th class="col-xs-1">Codigo</th>
			<th>Objetivo</th>
			<th>Fecha</th>
			<th class="col-xs-1">Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php if (empty($directorios)): ?>
			<tr>
				<td colspan="5"><?php echo __('No hay directorios registrados'); ?></td>
			</tr>
		<?php else: ?>
			<?php foreach ($directorios as $directorio): ?>
				<tr>
					<td class="text-center"><span class="glyphicon glyphicon-chevron-down do-show block-display" alt="<?php echo $directorio['Directorio']['id']; ?>"></span></td>
					<td><?php echo $directorio['Directorio']['codigo']; ?></td>
					<td><?php echo $directorio['Directorio']['objetivo']; ?></td>
					<td><?php echo $directorio['Directorio']['fecha_inicio']; ?></td>
					<td class="text-right">
						<?php if ($directorio['Attachment']): ?>
							<div class="dropdown inline">
								<?php echo $this->Html->link('<span class="glyphicon glyphicon-download-alt"></span>', '#', array('class' => 'btn btn-default btn-xs', 'escape' => false, 'data-toggle' => 'dropdown')); ?>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
									<?php foreach ($directorio['Attachment'] as $attachment): ?>
										<li role="presentation"><?php echo $this->Html->link($attachment['name'], array('action' => 'download', $attachment['id'], 'directorios'), array('tabindex' => '-1', 'role' => 'menuitem')); ?>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endif; ?>
						<div class="btn-group">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('action' => 'edit', $directorio['Directorio']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $directorio['Directorio']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false)); ?>
						</div>
					</td>
				</tr>
				<tr style="display:none">
					<td colspan="5">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									<p><?php echo $directorio['Directorio']['detalles']; ?></p>
									<h4>
										<?php echo __('Puntos a tratar'); ?>
										<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> ' . __('Nuevo punto'), array('controller' => 'puntos', 'action' => 'add', $directorio['Directorio']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
									</h4>
									<table class="table table-condensed table-bordered table-hover">
										<thead>
											<tr>
												<th><?php echo __('Detalles'); ?></th>
												<th class="col-xs-1"><?php echo __('Acciones'); ?></th>
											</tr>
										</thead>
										<tbody>
											<?php if (empty($directorio['Punto'])): ?>
												<tr>
													<td colspan="2"><?php echo __('No hay puntos asignacion al directorio'); ?></td>
												</tr>
											<?php else: ?>
												<?php foreach ($directorio['Punto'] as $punto): ?>
													<tr>
														<td><?php echo $punto['detalles']; ?></td>
														<td class="text-right">
															<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('controller' => 'puntos', 'action' => 'edit', $punto['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
															<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('controller' => 'puntos', 'action' => 'delete', $punto['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false), 'return confirm("Esta seguro(a) que desea eliminar este registro?"'); ?>
														</td>
													</tr>
												<?php endforeach; ?>
											<?php endif; ?>
										</tbody>
									</table>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 text-right">
									<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-check"></span> ' . __('Finalizar'), array('action' => 'finalizar', $directorio['Directorio']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false)); ?>
								</div>
							</div>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
	</tbody>
</table>