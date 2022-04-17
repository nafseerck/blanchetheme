<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="<?php bloginfo('template_directory')?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory')?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>

<nav class="navbar navbar-expand-md navbar-dark justify-content-center">
<div class="container">
    <a class="navbar-brand abs" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory')?>/images/logo.png" alt="logo" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="collapsingNavbar">
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'menu_class'        => 'navbar-nav',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        <div class="navbar-nav ml-auto">
            <?php  wp_nav_menu(array('theme_location'=>'right_menu','container'=>'','items_wrap' => '%3$s')); ?>
        </div>
    </div>
</div>
</nav>
</header>
<div class="container">
<div class="row">