<table class="table table-condensed table-bordered">
	<thead>
		<tr>
			<th>&nbsp;</th>
			<th>Codigo</th>
			<th>Titulo</th>
			<th>Responsable</th>
			<th>Progreso</th>
			<th>Adjuntos</th>
		</tr>
	</thead>
	<tbody>
		<?php if (empty($asignaciones)): ?>
			<tr>
				<td colspan="6">No hay asignaciones registradas</td>
			</tr>
		<?php else: ?>
			<?php foreach ($asignaciones as $asignacione): ?>
				<tr>
					<td><span class="glyphicon glyphicon-chevron-down"></span></td>
					<td><?php echo $asignacione['Asignacione']['codigo']; ?></td>
					<td><?php echo $asignacione['Asignacione']['titulo']; ?></td>
					<td><?php echo $asignacione['Responsable']['name']; ?></td>
					<td>
						<div class="progress">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
								<span>20%</span>
							</div>
						</div>
					</td>
					<td><span class="glyphicon glyphicon-download-alt"></span></td>
				</tr>
				<tr class="hidden">
					<td colspan="6">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									<h4>Detallles</h4>
									<table class="table table-condensed table-bordered">
										<thead>
											<tr>
												<th>Fecha de asignacion</th>
												<th>Titulo</th>
												<th>Asignador</th>
												<th>Responsable</th>
												<th>Progreso</th>
												<th>Acciones</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($asignacione['ChildrenAsignacione'] as $children_asignacione): ?>
												<tr>
													<td><?php echo $children_asignacione['Asignacione']['fecha_asignacion']; ?></td>
													<td><?php echo $children_asignacione['Asignacione']['titulo']; ?></td>
													<td><?php echo $children_asignacione['Asignador']['name']; ?></td>
													<td><?php echo $children_asignacione['Responsable']['name']; ?></td>
													<td>
														<div class="progress">
															<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
																<span>90%</span>
															</div>
														</div>
													</td>
													<td>
														<span class="glyphicon glyphicon-plus"></span>
														<span class="glyphicon glyphicon-search"></span>
														<span class="glyphicon glyphicon-envelope"></span>
													</td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
	</tbody>
</table>