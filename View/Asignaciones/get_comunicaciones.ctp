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
		<?php if (empty($comunicaciones)): ?>
			<tr>
				<td colspan="6">No hay comunicaciones registradas</td>
			</tr>
		<?php else: ?>
			<?php foreach ($comunicaciones as $comunicacione): ?>
				<tr>
					<td class="text-center"><span class="glyphicon glyphicon-chevron-down do-show block-display"></span></td>
					<td><?php echo $comunicacione['Asignacione']['codigo']; ?></td>
					<td><?php echo $comunicacione['Asignacione']['titulo']; ?></td>
					<td><?php echo $comunicacione['Responsable']['name']; ?></td>
					<td>
						<div class="progress">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $comunicacione['Asignacione']['progreso']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $comunicacione['Asignacione']['progreso']; ?>%">
								<span><?php echo $comunicacione['Asignacione']['progreso']; ?>%</span>
							</div>
						</div>
					</td>
					<td>
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-download-alt"></span>', array('action' => 'edit', $comunicacione['Asignacione']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('action' => 'edit', $comunicacione['Asignacione']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
					</td>
				</tr>
				<tr style="display:none">
					<td colspan="6">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									<p><?php echo $comunicacione['Asignacione']['detalles']; ?></p>
									<h4>Registro de actividades</h4>
									<table class="table table-condensed table-bordered table-hover">
										<thead>
											<tr>
												<th>Fecha de remision</th>
												<th>Detalles</th>
												<th>De</th>
												<th>Para</th>
												<th>Progreso</th>
												<th>Fecha de recepcion</th>
												<th>Tiempo de respuesta</th>
												<th>Tiempo de recepcion</th>
												<th>Acciones</th>
											</tr>
										</thead>
										<tbody>
											<?php if (empty($comunicacione['ChildrenComunicacione'])): ?>
												<tr>
													<td colspan="9">No hay registro de actividades</td>
												</tr>
											<?php else: ?>
												<?php foreach ($comunicacione['ChildrenComunicacione'] as $children_comunicacione): ?>
													<tr>
														<td><?php echo $children_comunicacione['Asignacione']['fecha_asignacion']; ?></td>
														<td><?php echo $children_comunicacione['Asignacione']['detalles']; ?></td>
														<td><?php echo $children_comunicacione['Asignador']['name']; ?></td>
														<td><?php echo $children_comunicacione['Responsable']['name']; ?></td>
														<td>
															<div class="progress">
																<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $children_comunicacione['Asignacione']['progreso']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $children_comunicacione['Asignacione']['progreso']; ?>%">
																	<span><?php echo $children_comunicacione['Asignacione']['progreso']; ?>%</span>
																</div>
															</div>
														</td>
														<td><?php echo $children_comunicacione['Asignacione']['fecha_recepcion']; ?></td>
														<td>1 hora y 2 minutos</td>
														<td>2 dias y 1 hora</td>
														<td>
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
								<div class="col-xs-12 text-right">
									<button class="btn btn-danger btn-sm">Finalizar</button> <button class="btn btn-primary btn-sm">Responder</button>
								</div>
							</div>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
	</tbody>
</table>