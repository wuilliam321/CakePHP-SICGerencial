<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>Hoxa - Multipurpose HTML5 Template</title>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    
    <?php 
	echo $this->Html->meta('icon');

	echo $this->fetch('meta');
	echo $this->fetch('css');
	?>
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
   	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>css/reset.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/style.css" type="text/css" />
    
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>css/font-awesome/css/font-awesome.min.css">
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="<?php echo $this->webroot; ?>css/responsive-leyouts.css" type="text/css" />
    
    <!-- animations -->
    <link href="<?php echo $this->webroot; ?>js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
    
    <!-- mega menu -->
    <link href="<?php echo $this->webroot; ?>js/mainmenu/sticky.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>js/mainmenu/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>js/mainmenu/demo.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>js/mainmenu/menu.css" rel="stylesheet">
    
    <!-- slide panel -->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>js/slidepanel/slidepanel.css">
    
	<!-- tabs -->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>js/tabs/assets/css/responsive-tabs.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>js/tabs/assets/css/responsive-tabs2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>js/tabs/assets/css/responsive-tabs3.css">

    <!-- progressbar -->
  	<link rel="stylesheet" href="<?php echo $this->webroot; ?>js/progressbar/ui.progress-bar.css">
    
    <!-- accordion -->
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>js/accordion/accordion.css" type="text/css" media="all">
    
    <!-- Lightbox -->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>js/lightbox/jquery.fancybox.css" media="screen" />

	<?php
	echo $this->Html->css(array(
		'bootstrap-datetimepicker.min',
		'bootstrap-multiselect',
		'main'
	));
	?>
</head>

<body>


<div class="site_wrapper">
<header id="header">
   
	<div id="trueHeader">
    
	<div class="wrapper">
    
     <div class="container">
    
		<!-- Logo -->
		<div class="logo"><?php echo $this->Html->link('', '/', array('id' => 'logo')); ?></div>
		
	<!-- Menu -->
	<div class="menu_main">
        
	<div class="navbar yamm navbar-default">
    
    <div class="container">
      <div class="navbar-header">
        <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > <span>Menu</span>
          <button type="button" > <i class="fa fa-bars"></i></button>
        </div>
      </div>
      
      <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
      
        <?php $auth_user = $this->Session->read('Auth.User'); ?>
        <?php $controller = $this->request->params['controller']; ?>
        <ul class="nav navbar-nav">
            <li>
                <?php echo $this->Html->link(__('<i class="fa fa-list"></i> %s</a> ', __('Resumen')), array('controller' => 'resumen', 'action' => 'index'), array('escape' => false, 'class' => ($controller == 'resumen') ? 'active' : '')); ?>
            </li>
            <li>
                <?php echo $this->Html->link(__('<i class="fa fa-tag"></i> %s</a> ', __('Asignaciones')), array('controller' => 'asignaciones', 'action' => 'index'), array('escape' => false, 'class' => ($controller == 'asignaciones') ? 'active' : '')); ?>
            </li>
            <li>
                <?php echo $this->Html->link(__('<i class="fa fa-envelope"></i> %s</a> ', __('Comunicaciones')), array('controller' => 'comunicaciones', 'action' => 'index'), array('escape' => false, 'class' => ($controller == 'comunicaciones') ? 'active' : '')); ?>
            </li>
            <li>
                <?php echo $this->Html->link(__('<i class="fa fa-calendar"></i> %s</a> ', __('Directorios')), array('controller' => 'directorios', 'action' => 'index'), array('escape' => false, 'class' => ($controller == 'directorios') ? 'active' : '')); ?>
            </li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-cog fa-spin"></i> Administracion</a>
                <ul class="dropdown-menu two" role="menu">
                  <li> <a href="contact.html">Contact Variation 1</a> </li>
                  <li> <a href="contact2.html">Contact Variation 2</a> </li>
                  <li> <a href="contact3.html">Contact Variation 3</a> </li>
                </ul>
            </li>
            <li><?php echo $this->Html->link(__('<i class="fa fa-lock"></i> %s</a> ', __('Salir')), array('controller' => 'users', 'action' => 'logout'), array('escape' => false)); ?></li>
        </ul>
      </div>
      </div>
     </div>
     
	</div><!-- end menu -->
        
	</div>
		
	</div>
    
	</div>
    
</header>

<div class="clearfix"></div>

<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>

<div class="clearfix margin_top7"></div>

<div class="footer_graph"></div>

<div class="clearfix"></div>

<div class="footer1">
<div class="container">
	<div class="one_fourth animate" data-anim-type="fadeInUp">
<!--         <h4 class="lmb">About Hoxa</h4>
        
        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined an chunks as necessary, making this the first true generator on the Internet. Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites.</p>
        <br /> -->
	</div><!-- end address -->
    
    <div class="one_fourth animate" data-anim-type="fadeInUp">
<!--     <div class="qlinks">
    
    	<h4 class="lmb">Useful Links</h4>
        
        <ul>
            <li><a href="404.html#"><i class="fa fa-angle-right"></i> Home Page Variations</a></li>
            <li><a href="404.html#"><i class="fa fa-angle-right"></i> Awsome Slidershows</a></li>
            <li><a href="404.html#"><i class="fa fa-angle-right"></i> Features and Typography</a></li>
            <li><a href="404.html#"><i class="fa fa-angle-right"></i> Different &amp; Unique Pages</a></li>
            <li><a href="404.html#"><i class="fa fa-angle-right"></i> Single and Portfolios</a></li>
            <li><a href="404.html#"><i class="fa fa-angle-right"></i> Recent Blogs or News</a></li>
            <li><a href="404.html#"><i class="fa fa-angle-right"></i> Layered PSD Files</a></li>
        </ul>
        
    </div> -->
	</div><!-- end links -->
        
    <div class="one_fourth animate" data-anim-type="fadeInUp">
<!--     <div class="siteinfo">
    
    	<h4 class="lmb">About Hoxa</h4>
        
        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined an chunks as necessary, making this the first true generator on the Internet. Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites.</p>
        <br />
        
	</div> -->
    </div><!-- end site info -->
    
    <div class="one_fourth last animate" data-anim-type="fadeInUp"><!-- 
        
        <h4>Flickr Photos</h4>
        
        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined an chunks as necessary, making this the first true generator on the Internet. Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites.</p>
        <br /> -->
        
    </div><!-- end flickr -->
    
    
</div>
</div><!-- end footer -->

<div class="clearfix"></div>

<div class="copyright_info">
<div class="container">

	<div class="clearfix divider_dashed10"></div>
    
    <div class="one_half animate" data-anim-type="fadeInRight">
    
        Copyright © 2014 hoxa.com. All rights reserved.  <a href="404.html#">Terms of Use</a> | <a href="404.html#">Privacy Policy</a>
        
    </div>
    
    <div class="one_half last">
        
        CMERIDA
            
    </div>
    
</div>
<?php //echo $this->element('sql_dump'); ?>
</div><!-- end copyright info -->


<a href="404.html#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->

</div>

    
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/jquery-2.1.0.min.js"></script>

<!-- animations -->
<script src="<?php echo $this->webroot; ?>js/animations/js/animations.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>js/animations/js/smoothscroll.js" type="text/javascript"></script>

<!-- slide panel -->
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/slidepanel/slidepanel.js"></script>

<!-- mega menu -->
<script src="<?php echo $this->webroot; ?>js/mainmenu/bootstrap.min.js"></script> 
<script src="<?php echo $this->webroot; ?>js/mainmenu/customeUI.js"></script> 

<!-- jquery jcarousel -->
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/carousel/jquery.jcarousel.min.js"></script>

<!-- scroll up -->
<script src="<?php echo $this->webroot; ?>js/scrolltotop/totop.js" type="text/javascript"></script>

<!-- tabs -->
<script src="<?php echo $this->webroot; ?>js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script>

<!-- jquery jcarousel -->
<script type="text/javascript">
(function($) {
 "use strict";

	jQuery(document).ready(function() {
			jQuery('#mycarouselthree').jcarousel();
	});
	
})(jQuery);
</script>
<!-- progress bar -->
<script src="<?php echo $this->webroot; ?>js/progressbar/progress.js" type="text/javascript" charset="utf-8"></script>

<!-- accordion -->
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/accordion/custom.js"></script>

<!-- sticky menu -->
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/mainmenu/sticky.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/mainmenu/modernizr.custom.75180.js"></script>

<!-- cubeportfolio -->
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/cubeportfolio/main.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/cubeportfolio/main5.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/cubeportfolio/main6.js"></script>

<!-- carousel -->
<script defer src="<?php echo $this->webroot; ?>js/carousel/jquery.flexslider.js"></script>
<script defer src="<?php echo $this->webroot; ?>js/carousel/custom.js"></script>

<!-- lightbox -->
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/lightbox/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/lightbox/custom.js"></script>

<?php 
echo $this->Html->script(array(
    'moment',
    'bootstrap-datetimepicker.min',
    'bootstrap-multiselect',
    'ckeditor',
    'adapters/jquery',
    'readmore.min',
    'main'
));
echo $this->fetch('script');
?>
</body>
</html>

