<table class="table table-condensed table-bordered table-striped">
	<thead>
		<tr>
			<th class="col-xs-0">&nbsp;</th>
			<th class="col-xs-1">Codigo</th>
			<th>Titulo</th>
			<th>Remitente</th>
			<th>Fecha de Remision</th>
			<th>Fecha de Culminacion</th>
			<th class="col-xs-1">Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php if (empty($comunicaciones)): ?>
			<tr>
				<td colspan="7"><?php echo __('No hay comunicaciones registradas'); ?></td>
			</tr>
		<?php else: ?>
			<?php foreach ($comunicaciones as $comunicacione): ?>
				<tr>
					<td class="text-center"><span class="glyphicon glyphicon-chevron-down do-show block-display"></span></td>
					<td><?php echo $comunicacione['Comunicacione']['codigo']; ?></td>
					<td><?php echo $this->Text->truncate($comunicacione['Comunicacione']['titulo'], 180); ?></td>
					<td><?php echo $comunicacione['Remitente']['name']; ?></td>
					<td><?php echo $comunicacione['Comunicacione']['fecha_remision']; ?></td>
					<td><?php echo $comunicacione['Comunicacione']['fecha_fin']; ?></td>
					<td class="text-right">
						<?php if ($comunicacione['Attachment']): ?>
							<div class="dropdown inline">
								<?php echo $this->Html->link('<span class="glyphicon glyphicon-download-alt"></span>', '#', array('class' => 'btn btn-default btn-xs', 'escape' => false, 'data-toggle' => 'dropdown')); ?>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
									<?php foreach ($comunicacione['Attachment'] as $attachment): ?>
										<li role="presentation"><?php echo $this->Html->link($attachment['name'], array('action' => 'download', $attachment['id'], 'comunicaciones'), array('tabindex' => '-1', 'role' => 'menuitem')); ?>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endif; ?>
						<div class="btn-group">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('action' => 'edit', $comunicacione['Comunicacione']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-share-alt"></span>', array('action' => 'add', $comunicacione['Comunicacione']['id']), array('class' => 'btn btn-info btn-xs', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $comunicacione['Comunicacione']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false)); ?>
						</div>
					</td>
				</tr>
				<tr style="display:none">
					<td colspan="7">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									<p><?php echo $comunicacione['Comunicacione']['detalles']; ?></p>
									<table class="table table-condensed table-bordered table-hover">
										<tbody>
											<?php if (empty($comunicacione['ChildrenComunicacione'])): ?>
												<tr>
													<td><?php echo __('No hay respuestas a la comunicacion'); ?></td>
												</tr>
											<?php else: ?>
											<?php foreach ($comunicacione['ChildrenComunicacione'] as $children_comunicacione): ?>
													<tr>
														<th><span class="glyphicon glyphicon-chevron-down do-show block-display"></span></th>
														<th><?php echo $children_comunicacione['Remitente']['name']; ?></th>
														<th><?php echo $this->Text->truncate($children_comunicacione['Comunicacione']['detalles'], 80); ?></th>
														<th><?php echo $children_comunicacione['Comunicacione']['fecha_remision']; ?></th>
														<th class="col-xs-1 text-right">
															<?php if ($children_comunicacione['Attachment']): ?>
																<div class="dropdown inline">
																	<?php echo $this->Html->link('<span class="glyphicon glyphicon-download-alt"></span>', '#', array('class' => 'btn btn-default btn-xs', 'escape' => false, 'data-toggle' => 'dropdown')); ?>
																	<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
																		<?php foreach ($children_comunicacione['Attachment'] as $attachment): ?>
																			<li role="presentation"><?php echo $this->Html->link($attachment['name'], array('action' => 'download', $attachment['id'], 'comunicaciones'), array('tabindex' => '-1', 'role' => 'menuitem')); ?>
																			</li>
																		<?php endforeach; ?>
																	</ul>
																</div>
															<?php endif; ?>
															<div class="btn-group">
																<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('action' => 'edit', $children_comunicacione['Comunicacione']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
																<?php echo $this->Html->link('<span class="glyphicon glyphicon-share-alt"></span>', array('action' => 'add', $children_comunicacione['Comunicacione']['id']), array('class' => 'btn btn-info btn-xs', 'escape' => false)); ?>
																<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('controller' => 'comunicaciones', 'action' => 'delete', $children_comunicacione['Comunicacione']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false), 'return confirm("Esta seguro(a) que desea eliminar este registro?"'); ?>
															</div>
														</th>
													</tr>
													<tr style="display:none">
														<td colspan="5"><?php echo $children_comunicacione['Comunicacione']['detalles']; ?></td>
													</tr>
												<?php endforeach; ?>
											</tbody>
										<?php endif; ?>
									</table>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 text-right">
									<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-check"></span> ' . __('Finalizar'), array('action' => 'finalizar', $comunicacione['Comunicacione']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false)); ?>
								</div>
							</div>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
	</tbody>
</table>