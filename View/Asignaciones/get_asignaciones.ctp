<table class="table table-condensed table-bordered table-striped">
<!-- 	<thead>
		<tr>
			<th>&nbsp;</th>
			<th>Codigo</th>
			<th>Titulo</th>
			<th>Responsable</th>
			<th>Progreso</th>
			<th>Adjuntos</th>
		</tr>
	</thead> -->
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
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $asignacione['Asignacione']['progreso']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $asignacione['Asignacione']['progreso']; ?>%">
										<span><?php echo $asignacione['Asignacione']['progreso']; ?>%</span>
									</div>
								</div>
							</div>
							<div class="col-xs-3">
								<small><?php echo $asignacione['Asignacione']['fecha_entrega']; ?></small>
							</div>
						</div>
					</td>
					<td>
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-download-alt"></span>', array('action' => 'edit', $asignacione['Asignacione']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('action' => 'edit', $asignacione['Asignacione']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
					</td>
				</tr>
				<tr style="display:none">
					<td colspan="7">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									<p><?php echo $asignacione['Asignacione']['detalles']; ?></p>
									<h4>
										<?php echo __('Desgloce de la asignacion'); ?>
										<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> ' . __('Delegar'), array('action' => 'add', 'I', $asignacione['Asignacione']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
									</h4>
									<table class="table table-condensed table-bordered table-hover">
										<thead>
											<tr>
												<th><?php echo __('Titulo'); ?></th>
												<th><?php echo __('Asignador'); ?></th>
												<th><?php echo __('Responsable'); ?></th>
												<th><?php echo __('% Asignado'); ?></th>
												<th><?php echo __('Progreso'); ?></th>
												<th><?php echo __('Acciones'); ?></th>
											</tr>
										</thead>
										<tbody>
											<?php if (empty($asignacione['ChildrenAsignacione'])): ?>
												<tr>
													<td colspan="6"><?php echo __('No hay detalles de las asignaciones'); ?></td>
												</tr>
											<?php else: ?>
												<?php foreach ($asignacione['ChildrenAsignacione'] as $children_asignacione): ?>
													<tr>
														<td><?php echo $children_asignacione['Asignacione']['titulo']; ?></td>
														<td><?php echo $children_asignacione['Asignador']['name']; ?></td>
														<td><?php echo $children_asignacione['Responsable']['name']; ?></td>
														<td><?php echo $children_asignacione['Asignacione']['porcentaje_asignado']; ?>%</td>
														<td>
															<div class="row">
																<div class="col-xs-3">
																	<small><?php echo $children_asignacione['Asignacione']['fecha_asignacion']; ?></small>
																</div>
																<div class="col-xs-6">
																	<div class="progress">
																		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $children_asignacione['Asignacione']['progreso']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $children_asignacione['Asignacione']['progreso']; ?>%">
																			<span><?php echo $children_asignacione['Asignacione']['progreso']; ?>%</span>
																		</div>
																	</div>
																</div>
																<div class="col-xs-3">
																	<small><?php echo $children_asignacione['Asignacione']['fecha_entrega']; ?></small>
																</div>
															</div>
														</td>
														<td>
														<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('action' => 'edit', $children_asignacione['Asignacione']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
															<span class="glyphicon glyphicon-plus"></span>
															<span class="glyphicon glyphicon-search"></span>
															<span class="glyphicon glyphicon-envelope"></span>
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
									<h4><?php echo __('Record de avances del responsable: ') . $asignacione['Responsable']['name']; ?></h4>
									<table class="table table-condensed table-bordered table-hover">
										<thead>
											<tr>
												<th><?php echo __('Fecha'); ?></th>
												<th><?php echo __('Detalles'); ?></th>
												<th><?php echo __('Porcentaje Avanzado'); ?></th>
												<th><?php echo __('Acciones'); ?></th>
											</tr>
										</thead>
										<tbody>
											<?php if (empty($asignacione['Avance'])): ?>
												<tr>
													<td colspan="6"><?php echo __('No hay avances registrados en la asignacion'); ?></td>
												</tr>
											<?php else: ?>
												<?php foreach ($asignacione['Avance'] as $avance): ?>
													<tr>
														<td><?php echo $avance['Avance']['created']; ?></td>
														<td><?php echo $avance['Avance']['detalles']; ?></td>
														<td>
															<div class="progress">
																<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $avance['Avance']['porcentaje_avanzado']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $avance['Avance']['porcentaje_avanzado']; ?>%">
																	<span><?php echo $avance['Avance']['porcentaje_avanzado']; ?>%</span>
																</div>
															</div>
														</td>
														<td>
														<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('controller' => 'avances', 'action' => 'edit', $avance['Avance']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
															<span class="glyphicon glyphicon-plus"></span>
															<span class="glyphicon glyphicon-search"></span>
															<span class="glyphicon glyphicon-envelope"></span>
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
									<?php echo $this->Html->link('<span class="glyphicon glyphicon-stats"></span> ' . __('Agregar avance'), array('controller' => 'avances', 'action' => 'add', $asignacione['Asignacione']['id']), array('class' => 'btn btn-success btn-xs', 'escape' => false)); ?>
								</div>
							</div>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
	</tbody>
</table>