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
					<td><?php echo $comunicacione['Comunicacione']['titulo']; ?></td>
					<td><?php echo $comunicacione['Remitente']['name']; ?></td>
					<td><?php echo $comunicacione['Comunicacione']['fecha_remision']; ?></td>
					<td><?php echo $comunicacione['Comunicacione']['fecha_fin']; ?></td>
					<td>
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-download-alt"></span>', array('action' => 'edit', $comunicacione['Comunicacione']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('action' => 'edit', $comunicacione['Comunicacione']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
						<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $comunicacione['Comunicacione']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false)); ?>
					</td>
				</tr>
				<tr style="display:none">
					<td colspan="7">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									<p><?php echo $comunicacione['Comunicacione']['detalles']; ?></p>
									<h4>
										<?php echo __('Historial de comunicacion'); ?>
										<?php echo $this->Html->link('<span class="glyphicon glyphicon-share-alt"></span> ' . __('Responder'), array('action' => 'add', $comunicacione['Comunicacione']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
									</h4>
									<table class="table table-condensed table-bordered table-hover">
										<thead>
											<tr>
												<th><?php echo __('Titulo'); ?></th>
												<th><?php echo __('Remitente'); ?></th>
												<th><?php echo __('Extracto'); ?></th>
												<th><?php echo __('Fecha de Remision'); ?></th>
												<th class="col-xs-1"><?php echo __('Acciones'); ?></th>
											</tr>
										</thead>
										<tbody>
											<?php if (empty($comunicacione['ChildrenComunicacione'])): ?>
												<tr>
													<td colspan="6"><?php echo __('No hay respuestas a la comunicacion'); ?></td>
												</tr>
											<?php else: ?>
												<?php foreach ($comunicacione['ChildrenComunicacione'] as $children_comunicacione): ?>
													<tr>
														<td><?php echo $children_comunicacione['Comunicacione']['titulo']; ?></td>
														<td><?php echo $children_comunicacione['Remitente']['name']; ?></td>
														<td><?php echo $this->Text->truncate($children_comunicacione['Comunicacione']['detalles'], 100); ?></td>
														<td><?php echo $children_comunicacione['Comunicacione']['fecha_remision']; ?></td>
														<td>
															<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('action' => 'edit', $children_comunicacione['Comunicacione']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
															<?php echo $this->Html->link('<span class="glyphicon glyphicon-share-alt"></span>', array('action' => 'add', $children_comunicacione['Comunicacione']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
															<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('controller' => 'comunicaciones', 'action' => 'delete', $children_comunicacione['Comunicacione']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false), 'return confirm("Esta seguro(a) que desea eliminar este registro?"'); ?>
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