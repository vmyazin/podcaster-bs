<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

	<!-- Pinterest -->
	<meta name="p:domain_verify" content="9a5341658aa049243b3cc7e9f569ec93"/>
    
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/img/favicons/manifest.json">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri() ?>/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:700|Nunito+Sans:400,600" rel="stylesheet">
    
    <!--wordpress head-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!--[if lt IE 8]>
      <p class="ancient-browser-alert">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a>.</p>
    <![endif]-->
    
    
    <div class="container page-container">
      <?php do_action('before'); ?> 
      <header role="banner" class="row main-header">
        <div class="main-navigation">
          <div class="col-md-12">
          <?php /*
            <nav class="navbar navbar-default" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
                  <span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              
              <div class="collapse navbar-collapse navbar-primary-collapse">
                <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
                <?php dynamic_sidebar('navbar-right'); ?> 
              </div><!--.navbar-collapse-->
            </nav>
          */ ?>
          </div>
        </div><!--.main-navigation-->

        <div class="row row-with-vspace site-branding">
          <div class="col-md-4 col-md-offset-4 site-title">
            <h1 class="site-title-heading">
              <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home" alt="<?php bloginfo('name'); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri() ?>/img/EJP-logo-c.svg" />
              </a>
            </h1>
          </div>
          <div class="col-md-4 page-header-top-right">
            <div class="site-description">
              <small>
                <?php bloginfo('description'); ?> 
              </small>
            </div>
            <div class="sr-only">
              <a href="#content" title="<?php esc_attr_e('Skip to content', 'bootstrap-basic'); ?>"><?php _e('Skip to content', 'bootstrap-basic'); ?></a>
            </div>
            <?php if (is_active_sidebar('header-right')) { ?> 
            <div class="pull-right">
              <?php dynamic_sidebar('header-right'); ?> 
            </div>
            <div class="clearfix"></div>
            <?php } // endif; ?> 
          </div>
        </div><!--.site-branding-->
        
      </header>
      
      
      <div id="content" class="row row-with-vspace site-content">
