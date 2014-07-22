<?php $this->Html->addCrumb(__('Autenticacion'), '/users/login'); ?>
<div class="container users form">
	<div class="grid fluid">
		<div class="row">
			<div class="span4 offset4 bg-white padding20">
                <?php echo $this->Form->create('User', array(
                    'url' => array('controller' => 'users', 'action' => 'login'),
                    'inputDefaults' => array('div' => array('class' => 'input-control text'), 'class' => 'span12', 'label' => false)
                    )); ?>
                    <fieldset>
                        <legend><?php echo __('Signin'); ?></legend>
                        <?php
                        echo $this->Form->label('username');
                        echo $this->Form->input('username', array('autofocus' => true));
                        echo $this->Form->label('password');
                        echo $this->Form->input('password');
                        ?>
                    </fieldset>
                    <div class="form-actions">
                        <button type="submit" class="button success">Acceder</button>
                    </div>
                <?php echo $this->Form->end(); ?>
			</div>
        </div>
    </div>
</div>