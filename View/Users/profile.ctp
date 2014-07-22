<?php $this->Html->addCrumb(__('Asignaciones'), '/asignaciones/main'); ?>
<?php $this->Html->addCrumb(__('Profile'), "/users/profile"); ?>
<div class="container users form">
	<div class="grid fluid">
		<div class="row">
			<div class="span12 bg-white padding20">
				<div class="span10 bg-white">
					<h2><?php echo __('Modificar Perfil de %s %s', strtoupper($this->request->data['User']['first_name']), strtoupper($this->request->data['User']['last_name'])); ?></h2>
				</div>
				<div class="span2 actions bg-white text-right">
					<div class="tile half bg-orange">
						<?php echo $this->Html->link(
							'<div class="tile-content icon"><i class="icon-list"></i></div>',
							array('controller' => 'atenciones', 'action' => 'main'),
							array(
								'class' => 'fg-white',
								'title' => __('List'),
								'escape' => false
							)
						); ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="span12 bg-white padding20">
				<fieldset>
					<div class="row">
						<div class="span12">
							<?php echo $this->Form->create('User', array('inputDefaults' => array('div' => array('class' => 'input-control text'), 'class' => 'span12', 'label' => false))); ?>
							    <fieldset>
							        <legend><?php echo __('Datos del Usuario'); ?></legend>
							        <?php if ($auth_user['group_id'] == 99): ?>
							        	<p><strong class="text-alert">Alerta! Usuario bloqueado.</strong> Debe comunicarse con el administrador de sistema para recibir los permisos correspondientes.</p>
							    	<?php endif; ?>
							        <div class="row">
							            <div class="span3">
							                <label><?php echo __('Username'); ?></label>
							                <?php echo $this->Form->input('id'); ?>
							                <span><?php echo h($this->request->data['User']['username']); ?></span>
							            </div>
							            <div class="span3 required">
							                <label><?php echo __('Cargo'); ?></label>
							                <?php echo $this->Form->input('cargo'); ?>
							            </div>
						            </div>							            
							        <div class="row">
							            <div class="span3 required">
							                <label><?php echo __('First Name'); ?></label>
							                <span><?php echo h($this->request->data['User']['first_name']); ?></span>
							            </div>
							            <div class="span3 required">
							                <label><?php echo __('Last Name'); ?></label>
							                <span><?php echo h($this->request->data['User']['last_name']); ?></span>
							            </div>
						        		<?php if ($auth_user['group_id'] == 1): ?>
								            <div class="span4 required">
								                <h2><?php echo __('Grupo al que pertenece'); ?></h2>
								                <?php echo $this->Form->input('group_id', array('type' => 'select', 'div' => array('class' => 'input-control select'), 'empty' => true)); ?>
								            </div>
							        	<?php endif; ?>
							        </div>
							        <hr />
							        <div class="row">
						        		<?php if ($auth_user['group_id'] == 1): ?>
								            <div class="span7 required">
								            	<h2><?php echo __('Sistemas a los que tiene acceso'); ?></h2>
								                <?php echo $this->Form->input('Sistema', array('multiple' => 'checkbox', 'div' => array('class' => 'input-control select'))); ?>
								            </div>
							        	<?php endif; ?>
							            <!-- <div class="span4 required">
							            	<h2><?php //echo __('Cambio de Clave'); ?></h2>
							                <?php //echo $this->Form->label('password', __('Clave actual')); ?>
							                <?php //echo $this->Form->input('password', array('value' => '', 'required' => false, 'div' => array('class' => 'input-control password'), 'after' => '<span class="btn-reveal"></span>')); ?>
							                <hr />
							                <?php //echo $this->Form->label('password_new', __('Clave nueva')); ?>
							                <?php //echo $this->Form->input('password_new', array('type' => 'password', 'value' => '', 'div' => array('class' => 'input-control password'), 'after' => '<span class="btn-reveal"></span>')); ?>
							                <?php //echo $this->Form->label('password_confirm', __('Confirmar clave')); ?>
							                <?php //echo $this->Form->input('password_confirm', array('type' => 'password', 'value' => '', 'div' => array('class' => 'input-control password'), 'after' => '<span class="btn-reveal"></span>')); ?>
							            </div> -->
						            </div>
							    </fieldset>
							    <div class="form-actions">
							        <button type="submit" class="button success"><?php echo __('Guardar'); ?></button>
							    </div>
							<?php echo $this->Form->end(); ?>
						</div>
					</div>
				</fieldset>
			</div>
                </div>
        </div>
</div>