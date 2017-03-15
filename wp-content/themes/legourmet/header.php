<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
            
        <?php wp_head(); ?>	 
</head>
<body data-spy="scroll" data-target="#homemenu" data-offset="150">
    <section  id="homemenu" class=" menu-section notSticky hidden-xs" data-uk-sticky="{top:-200, animation: 'uk-animation-slide-top', clsinactive: 'notSticky'}">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'headerleft',
                         'menu_class'=> 'menu nav',
                        'container_id' => 'leftmenu'
                        )); ?>
                </div>
                <div class="col-lg-2 text-center col-md-2 col-sm-2">
                    <a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt=""></a>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'headerright',
                        'menu_class'=> 'menu nav',
                        'container_id' => 'rightmenu'
                        )); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="visible-xs mobile-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-8">
                    <a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt=""></a>
                </div>
                <div class="col-xs-4">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#xsmenu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
            <?php wp_nav_menu(array(
            'theme_location' => 'XSmenu',
            'container_id' => 'xsmenu',
             'container_class' => 'menu-mobile-menu-container collapse navbar-collapse'
            )); ?>
        </div>
        
    </section>