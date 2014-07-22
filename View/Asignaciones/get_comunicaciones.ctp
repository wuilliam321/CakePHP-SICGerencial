<table class="table table-condensed table-bordered">
	<thead>
		<tr>
			<th>&nbsp;</th>
			<th>Codigo</th>
			<th>Titulo</th>
			<th>Correcciones</th>
			<th>Progreso</th>
			<th>Adjuntos</th>
		</tr>
	</thead>
	<tbody>
		<?php if (empty($comunicaciones)): ?>
			<tr>
				<td colspan="6">No hay comunicaciones registradas</td>
			</tr>
		<?php else: ?>
			<?php foreach ($comunicaciones as $comunicacione): ?>
				<tr>
					<td><span class="glyphicon glyphicon-chevron-down"></span></td>
					<td><?php echo $comunicacione['Asignacione']['codigo']; ?></td>
					<td><?php echo $comunicacione['Asignacione']['titulo']; ?></td>
					<td>3</td>
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
									<h4>Registro de actividades</h4>
									<table class="table table-condensed table-bordered">
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
											<?php foreach ($comunicacione['ChildrenComunicacione'] as $children_comunicacione): ?>
												<tr>
													<td><?php echo $children_comunicacione['Asignacione']['fecha_asignacion']; ?></td>
													<td><?php echo $children_comunicacione['Asignacione']['detalles']; ?></td>
													<td><?php echo $children_comunicacione['Asignador']['name']; ?></td>
													<td><?php echo $children_comunicacione['Responsable']['name']; ?></td>
													<td>
														<div class="progress">
															<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
																<span>90%</span>
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