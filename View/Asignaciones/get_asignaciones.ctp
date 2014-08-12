<table class="table table-condensed table-bordered table-striped">
	<thead>
		<tr>
			<th class="col-xs-0">&nbsp;</th>
			<th class="col-xs-1">Codigo</th>
			<th>Titulo</th>
			<th>Asignador</th>
			<th>Responsable</th>
			<th>Progreso</th>
			<th class="col-xs-1">Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php if (empty($asignaciones)): ?>
			<tr>
				<td colspan="7"><?php echo __('No hay asignaciones registradas'); ?></td>
			</tr>
		<?php else: ?>
			<?php foreach ($asignaciones as $asignacione): ?>
				<tr>
					<td class="text-center"><span class="glyphicon glyphicon-chevron-down do-show block-display"></span></td>
					<td><?php echo $asignacione['Asignacione']['codigo']; ?></td>
					<td><?php echo $asignacione['Asignacione']['titulo']; ?></td>
					<td><?php echo $asignacione['Asignador']['name']; ?></td>
					<td><?php echo $asignacione['Responsable']['name']; ?></td>
					<td>
						<div class="row">
							<div class="col-xs-3">
								<small><?php echo $asignacione['Asignacione']['fecha_asignacion']; ?></small>
							</div>
							<div class="col-xs-6">
								<div class="progress">
									<div class="progress-bar progress-bar-<?php echo $asignacione['Asignacione']['bar_class']; ?>" role="progressbar" aria-valuenow="<?php echo $asignacione['Asignacione']['progreso']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $asignacione['Asignacione']['progreso']; ?>%">
										<span><?php echo $this->Number->precision($asignacione['Asignacione']['progreso'], 0); ?>%</span>
									</div>
								</div>
							</div>
							<div class="col-xs-3">
								<small><?php echo $asignacione['Asignacione']['fecha_entrega']; ?></small>
							</div>
						</div>
					</td>
					<td class="text-right">
						<?php if ($asignacione['Attachment']): ?>
							<div class="dropdown inline">
								<?php echo $this->Html->link('<span class="glyphicon glyphicon-download-alt"></span>', '#', array('class' => 'btn btn-default btn-xs', 'escape' => false, 'data-toggle' => 'dropdown')); ?>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
									<?php foreach ($asignacione['Attachment'] as $attachment): ?>
										<li role="presentation"><?php echo $this->Html->link($attachment['name'], array('action' => 'download', $attachment['id'], 'asignaciones'), array('tabindex' => '-1', 'role' => 'menuitem')); ?>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endif; ?>
						<div class="btn-group">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('action' => 'edit', $asignacione['Asignacione']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
								<?php echo $this->Html->link('<span class="glyphicon glyphicon-stats"></span>', array('controller' => 'avances', 'action' => 'add', $asignacione['Asignacione']['id']), array('class' => 'btn btn-success btn-xs', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-check"></span>', array('controller' => 'asignaciones', 'action' => 'finalizar', $asignacione['Asignacione']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false)); ?>
						</div>
					</td>
				</tr>
				<tr style="display:none">
					<td colspan="7">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									<p><?php echo $asignacione['Asignacione']['detalles']; ?></p>
									<h4>
										<?php echo __('Registro de avances'); ?>
									</h4>
									<table class="table table-condensed table-bordered table-hover">
										<thead>
											<tr>
												<th><?php echo __('Responsable'); ?></th>
												<th><?php echo __('Fecha'); ?></th>
												<th><?php echo __('Detalles'); ?></th>
												<th><?php echo __('Porcentaje Avanzado'); ?></th>
												<th class="col-xs-1"><?php echo __('Acciones'); ?></th>
											</tr>
										</thead>
										<tbody>
											<?php if (empty($avances)): ?>
												<tr>
													<td colspan="6"><?php echo __('No hay avances registrados en la asignacion'); ?></td>
												</tr>
											<?php else: ?>
												<?php foreach ($avances as $avance): ?>
													<tr>
														<td><?php echo $avance['User']['name']; ?></td>
														<td><?php echo $avance['Avance']['created']; ?></td>
														<td><?php echo $avance['Avance']['detalles']; ?></td>
														<td><?php echo $avance['Avance']['porcentaje_avanzado']; ?>%</td>
														<td class="text-right">
															<?php if ($avance['Attachment']): ?>
																<div class="dropdown inline">
																	<?php echo $this->Html->link('<span class="glyphicon glyphicon-download-alt"></span>', '#', array('class' => 'btn btn-default btn-xs', 'escape' => false, 'data-toggle' => 'dropdown')); ?>
																	<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
																		<?php foreach ($avance['Attachment'] as $attachment): ?>
																			<li role="presentation"><?php echo $this->Html->link($attachment['name'], array('action' => 'download', $attachment['id'], 'avances'), array('tabindex' => '-1', 'role' => 'menuitem')); ?>
																			</li>
																		<?php endforeach; ?>
																	</ul>
																</div>
															<?php endif; ?>
														<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('controller' => 'avances', 'action' => 'edit', $avance['Avance']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
														<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-check"></span>', array('controller' => 'avances', 'action' => 'delete', $avance['Avance']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false)); ?>
														</td>
													</tr>
												<?php endforeach; ?>
											<?php endif; ?>
										</tbody>
									</table>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<h4>
										<?php echo __('Desgloce de la asignacion'); ?>
										<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> ' . __('Delegar'), array('action' => 'add', $asignacione['Asignacione']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
									</h4>
									<table class="table table-condensed table-bordered table-hover">
										<thead>
											<tr>
												<th><?php echo __('Titulo'); ?></th>
												<th><?php echo __('Asignador'); ?></th>
												<th><?php echo __('Responsable'); ?></th>
												<th><?php echo __('Detalles'); ?></th>
												<th><?php echo __('% Asignado'); ?></th>
												<th><?php echo __('Progreso'); ?></th>
												<th class="col-xs-1"><?php echo __('Acciones'); ?></th>
											</tr>
										</thead>
										<tbody>
											<?php if (empty($asignacione['ChildrenAsignacione'])): ?>
												<tr>
													<td colspan="7"><?php echo __('No se ha desglozado la presente asignacion'); ?></td>
												</tr>
											<?php else: ?>
												<?php foreach ($asignacione['ChildrenAsignacione'] as $children_asignacione): ?>
													<tr>
														<td><?php echo $children_asignacione['Asignacione']['titulo']; ?></td>
														<td><?php echo $children_asignacione['Asignador']['name']; ?></td>
														<td><?php echo $children_asignacione['Responsable']['name']; ?></td>
														<td><?php echo $children_asignacione['Asignacione']['detalles']; ?></td>
														<td><?php echo $children_asignacione['Asignacione']['porcentaje_asignado']; ?>%</td>
														<td>
															<div class="row">
																<div class="col-xs-3">
																	<small><?php echo $children_asignacione['Asignacione']['fecha_asignacion']; ?></small>
																</div>
																<div class="col-xs-6">
																	<div class="progress">
																		<div class="progress-bar progress-bar-<?php echo $children_asignacione['Asignacione']['bar_class']; ?>" role="progressbar" aria-valuenow="<?php echo $children_asignacione['Asignacione']['progreso']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $children_asignacione['Asignacione']['progreso']; ?>%">
																			<span><?php echo $children_asignacione['Asignacione']['progreso']; ?>%</span>
																		</div>
																	</div>
																</div>
																<div class="col-xs-3">
																	<small><?php echo $children_asignacione['Asignacione']['fecha_entrega']; ?></small>
																</div>
															</div>
														</td>
														<td class="text-right">
															<?php if ($children_asignacione['Attachment']): ?>
																<div class="dropdown inline">
																	<?php echo $this->Html->link('<span class="glyphicon glyphicon-download-alt"></span>', '#', array('class' => 'btn btn-default btn-xs', 'escape' => false, 'data-toggle' => 'dropdown')); ?>
																	<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
																		<?php foreach ($children_asignacione['Attachment'] as $attachment): ?>
																			<li role="presentation"><?php echo $this->Html->link($attachment['name'], array('action' => 'download', $attachment['id'], 'asignaciones'), array('tabindex' => '-1', 'role' => 'menuitem')); ?>
																			</li>
																		<?php endforeach; ?>
																	</ul>
																</div>
															<?php endif; ?>
															<div class="btn-group">
																<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('action' => 'edit', $children_asignacione['Asignacione']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
																<?php echo $this->Html->link('<span class="glyphicon glyphicon-stats"></span>', array('controller' => 'avances', 'action' => 'add', $children_asignacione['Asignacione']['id']), array('class' => 'btn btn-success btn-xs', 'escape' => false)); ?>
																<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-check"></span>', array('controller' => 'asignaciones', 'action' => 'finalizar', $children_asignacione['Asignacione']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false)); ?>
															</div>
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
									<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-check"></span> ' . __('Finalizar'), array('controller' => 'asignaciones', 'action' => 'finalizar', $asignacione['Asignacione']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false)); ?>
								</div>
							</div>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
	</tbody>
</table>