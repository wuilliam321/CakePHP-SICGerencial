<div class="row">
	<div class="col-xs-2">
		<!-- Nav tabs -->
		<ul class="nav nav-pills nav-stacked" role="tablist">
			<li class="active"><?php echo $this->Html->link('Resumen', '#resume', array('role' => 'tab', 'data-toggle' => 'tab')); ?></li>
			<li><?php echo $this->Html->link('Asignaciones <span class="badge" id="numero_asignaciones">0</span>', '#asignaciones', array('role' => 'tab', 'data-toggle' => 'tab', 'escape' => false)); ?></li>
			<li><?php echo $this->Html->link('Comunicaciones <span class="badge" id="numero_comunicaciones">0</span>', '#comunicaciones', array('role' => 'tab', 'data-toggle' => 'tab', 'escape' => false)); ?></li>
			<li><?php echo $this->Html->link('Directorios <span class="badge" id="numero_directorios">0</span>', '#directorios', array('role' => 'tab', 'data-toggle' => 'tab', 'escape' => false)); ?></li>
		</ul>
	</div>
	<div class="col-xs-10">
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane active" id="resume">
			</div>
			<div class="tab-pane" id="asignaciones">
				<div class="row">
					<div class="col-xs-12">
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> ' . __('Nueva asignacion'), array('action' => 'add'), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
						<hr />
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 asignaciones-list" data-url="<?php echo $this->Html->url(array('action' => 'getAsignaciones')); ?>"></div>
				</div>
			</div>
			<div class="tab-pane" id="comunicaciones">
				<div class="row">
					<div class="col-xs-12">
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> ' . __('Nueva comunicacion'), array('controller' => 'comunicaciones', 'action' => 'add'), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
						<hr />
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 comunicaciones-list" data-url="<?php echo $this->Html->url(array('controller' => 'comunicaciones', 'action' => 'getComunicaciones')); ?>"></div>
				</div>
			</div>
			<div class="tab-pane" id="directorios">
				<div class="row">
					<div class="col-xs-12">
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> ' . __('Nuevo directorio'), array('controller' => 'directorios', 'action' => 'add'), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
						<hr />
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 directorios-list" data-url="<?php echo $this->Html->url(array('controller' => 'directorios', 'action' => 'getDirectorios')); ?>"></div>
				</div>
			</div>
		</div>
	</div>
</div>
