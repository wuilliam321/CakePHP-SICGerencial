<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
    <title>Sistema de Comunicacion Gerencial</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    
    <!-- Favicon --> 
    <link rel="shortcut icon" href="<?php echo $this->webroot; ?>images/favicon.ico">
    
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
    
    <!-- forms -->
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>js/form/sky-forms.css" type="text/css" media="all">
    
 
</head>

<body>


<div class="site_wrapper">
<header id="header">
    
    
    <div id="trueHeader">
    
    <div class="wrapper">
    
     <div class="container">
    
        <!-- Logo -->
        <div class="logo"><a href="index.html" id="logo"></a></div>
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
      
        <ul class="nav navbar-nav">
            <li><?php echo $this->Html->link(__('<i class="fa fa-unlock-alt"></i> %s</a> ', __('Ingresar')), array('controller' => 'users', 'action' => 'login'), array('escape' => false)); ?></li>
        </ul>
      </div>
      </div>
     </div>
     
    </div><!-- end menu -->
        
    </div>
        
    </div>
    
    </div>
    
</header>

<div class="clearfix margin_top1"></div>

<div class="container">
    <div class="row">
        <div class="one_full">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Session->flash('auth'); ?>
        </div>
    </div>
</div>
<div class="clearfix"></div>

<div class="page_title2">
<div class="container">

    <div class="title"><h1><?php echo __('Login form'); ?></h1></div>
    
    <div class="pagenation">&nbsp;<?php echo $this->Html->link(__('Home'), '/'); ?> <i>/</i> <?php echo __('Login form'); ?></div>
    
</div>
</div><!-- end page title -->  

<div class="clearfix"></div>

<div class="container">

    <div class="content_fullwidth lessmar">
    
        
      <div class="login_form">      
            <?php echo $this->Form->create('User', array('id' => 'sky-form', 'class' => 'sky-form','url' => array('controller' => 'users', 'action' => 'login'),'inputDefaults' => array('div' => false, 'label' => false))); ?>
                <header><?php echo __('Ingreso al sistema'); ?></header>
                <fieldset>                  
                    <section>
                        <div class="row">
                            <?php echo $this->Form->label('username', null, array('class' => 'label col col-4')); ?>
                            <div class="col col-8">
                                <label class="input">
                                    <i class="icon-append icon-user"></i>
                                    <?php echo $this->Form->input('username'); ?>
                                </label>
                            </div>
                        </div>
                    </section>
                    
                    <section>
                        <div class="row">
                            <?php echo $this->Form->label('password', null, array('class' => 'label col col-4')); ?>
                            <div class="col col-8">
                                <label class="input">
                                    <i class="icon-append icon-lock"></i>
                                    <?php echo $this->Form->input('password'); ?>
                                </label>
                                <div class="note"><a href="#sky-form2" class="modal-opener">Olvido su clave?</a></div>
                            </div>
                        </div>
                    </section>
                </fieldset>
                <footer>
                    <div class="fright">
                    <button type="submit" class="button">Ingresar</button>
                    </div>
                    
                </footer>
            <?php echo $this->Form->end(); ?>
        </div>
        
        <form action="http://gsrthemes.com/hoxa/fullwidth/demo-recovery.php" id="sky-form2" class="sky-form submited sky-form-modal">
            <header>Recuperar Clave</header>

            <div class="message">
                <i class="icon-ok"></i>
                <p>Para cambiar la clave comunicarse con el administrador de sistemas<br><a href="login.html#" class="modal-closer">Cerrar</a></p>
            </div>
            
        </form>

    </div>

</div><!-- end content area -->

<div class="clearfix margin_top7"></div>

<div class="footer_graph"></div>

<div class="clearfix"></div>

<div class="footer1">
<div class="container">
    
    <div class="one_fourth animate" data-anim-type="fadeInUp">
        <ul class="faddress">
            <li><img src="<?php echo $this->webroot; ?>images/footer-logo.png" alt="" /></li>
            <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; 2901 Marmora Road, Glassgow,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seattle, WA 98122-1090</li>
            <li><i class="fa fa-phone"></i>&nbsp; 1 -234 -456 -7890</li>
            <li><i class="fa fa-print"></i>&nbsp; 1 -234 -456 -7890</li>
            <li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> info@yourdomain.com</a></li>
            <li><img src="<?php echo $this->webroot; ?>images/footer-wmap.png" alt="" /></li>
        </ul>
    </div><!-- end address -->
    
    <div class="one_fourth animate" data-anim-type="fadeInUp">
    <div class="qlinks">
    
        <h4 class="lmb">Useful Links</h4>
        
        <ul>
            <li><a href="login.html#"><i class="fa fa-angle-right"></i> Home Page Variations</a></li>
            <li><a href="login.html#"><i class="fa fa-angle-right"></i> Awsome Slidershows</a></li>
            <li><a href="login.html#"><i class="fa fa-angle-right"></i> Features and Typography</a></li>
            <li><a href="login.html#"><i class="fa fa-angle-right"></i> Different &amp; Unique Pages</a></li>
            <li><a href="login.html#"><i class="fa fa-angle-right"></i> Single and Portfolios</a></li>
            <li><a href="login.html#"><i class="fa fa-angle-right"></i> Recent Blogs or News</a></li>
            <li><a href="login.html#"><i class="fa fa-angle-right"></i> Layered PSD Files</a></li>
        </ul>
        
    </div>
    </div><!-- end links -->
        
    <div class="one_fourth animate" data-anim-type="fadeInUp">
    <div class="siteinfo">
    
        <h4 class="lmb">About Hoxa</h4>
        
        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined an chunks as necessary, making this the first true generator on the Internet. Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites.</p>
        <br />
        <a href="login.html#">Read more <i class="fa fa-long-arrow-right"></i></a>
        
    </div>
    </div><!-- end site info -->
    
    <div class="one_fourth last animate" data-anim-type="fadeInUp">
    
        <h4 class="lmb">About Hoxa</h4>
        
        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined an chunks as necessary, making this the first true generator on the Internet. Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites.</p>
        <br />
        
    </div><!-- end flickr -->
    
    
</div>
</div><!-- end footer -->

<div class="clearfix"></div>

<div class="copyright_info">
<div class="container">

    <div class="clearfix divider_dashed10"></div>
    
    <div class="one_half animate" data-anim-type="fadeInRight">
    
        Copyright © 2014 hoxa.com. All rights reserved.  <a href="login.html#">Terms of Use</a> | <a href="login.html#">Privacy Policy</a>
        
    </div>
    
</div>
</div><!-- end copyright info -->


<a href="login.html#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->


</div>

    
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/universal/jquery.js"></script>

<!-- style switcher -->
<script src="<?php echo $this->webroot; ?>js/style-switcher/jquery-1.js"></script>

<!-- animations -->
<script src="<?php echo $this->webroot; ?>js/animations/js/animations.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>js/animations/js/smoothscroll.js" type="text/javascript"></script>


<!-- mega menu -->
<script src="<?php echo $this->webroot; ?>js/mainmenu/bootstrap.min.js"></script> 
<script src="<?php echo $this->webroot; ?>js/mainmenu/customeUI.js"></script> 

<!-- scroll up -->
<script src="<?php echo $this->webroot; ?>js/scrolltotop/totop.js" type="text/javascript"></script>

<!-- tabs -->
<script src="<?php echo $this->webroot; ?>js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script>

<!-- sticky menu -->
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/mainmenu/sticky.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/mainmenu/modernizr.custom.75180.js"></script>

<script src="<?php echo $this->webroot; ?>js/form/jquery.form.min.js"></script>
<script src="<?php echo $this->webroot; ?>js/form/jquery.validate.min.js"></script>
<script src="<?php echo $this->webroot; ?>js/form/jquery.modal.js"></script>
<script src="<?php echo $this->webroot; ?>js/form/jquery.validate-login.js"></script>

<!-- lightbox -->
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/lightbox/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/lightbox/custom.js"></script>



</body>
</html>