<div class="row">
	<div class="col-xs-12">
		<h2>
			<?php echo __("Comunicaciones"); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> ' . __('Nueva comunicacion'), array('controller' => 'comunicaciones', 'action' => 'add'), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
		</h2>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 comunicaciones-list" data-url="<?php echo $this->Html->url(array('controller' => 'comunicaciones', 'action' => 'getComunicaciones')); ?>"></div>
</div>

<div class="row">
	<div class="col-xs-12">
		<h2>
			<?php echo __("Asignaciones"); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> ' . __('Nueva asignacion'), array('action' => 'add'), array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
		</h2>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 asignaciones-list" data-url="<?php echo $this->Html->url(array('action' => 'getAsignaciones')); ?>"></div>
</div>