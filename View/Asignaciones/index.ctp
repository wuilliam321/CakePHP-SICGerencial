<div class="row">
	<div class="col-xs-12">
		<h2><?php echo __("Comunicaciones"); ?></h2>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 comunicaciones-list" data-url="<?php echo $this->Html->url(array('action' => 'getComunicaciones')); ?>"></div>
</div>

<div class="row">
	<div class="col-xs-12">
		<h2><?php echo __("Asignaciones"); ?></h2>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 asignaciones-list" data-url="<?php echo $this->Html->url(array('action' => 'getAsignaciones')); ?>"></div>
</div>