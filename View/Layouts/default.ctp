<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array(
			'bootstrap.min',
			'bootstrap-theme.min',
			'bootstrap-multiselect',
			'main'
		));
		echo $this->Html->script(array(
			'jquery-1.11.0.min',
			'bootstrap.min',
			'bootstrap-multiselect',
			'main'
		));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php echo $this->Html->link(__('Sistema de Control de Comunicacion Gerencial'), '/', array('class' => 'navbar-brand')); ?>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Link</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php $auth_user = $this->Session->read('Auth.User'); ?>
					<?php if ($auth_user): ?>
						<li><a href="#"><?php echo $auth_user['name']; ?></a></li>
						<li><?php echo $this->Html->link('Salir', array('controller' => 'users', 'action' => 'logout')); ?></li>
					<?php else: ?>
						<li><?php echo $this->Html->link('Ingresar', array('controller' => 'users', 'action' => 'login')); ?></li>
					<?php endif; ?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<?php echo $this->Html->getCrumbList(array('class' => 'breadcrumb', 'separator' => '', 'lastClass' => array('class' => 'active')), array('text' => '<span class="glyphicon glyphicon-home"></span>', 'escape' => false)); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<?php echo $this->Session->flash(); ?>
			</div>
		</div>
		<?php echo $this->fetch('content'); ?>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
