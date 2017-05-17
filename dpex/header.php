<?php  $stylesheetUrl = get_stylesheet_directory_uri(); ?>

<!doctype html>  

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
	
	<link rel="stylesheet" href="<?php echo $stylesheetUrl; ?>/assets/slick/slick.css" >
	<link rel="stylesheet" href="<?php echo $stylesheetUrl; ?>/assets/slick/slick-theme.css" >
	
	<link rel="stylesheet" href="<?php echo $stylesheetUrl; ?>/css/style.css" >
	
	
	<script type="text/javascript" src="<?php echo $stylesheetUrl; ?>/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo $stylesheetUrl; ?>/assets/parallax.js-1.4.2/parallax.min.js"></script>
	<script type="text/javascript" src="<?php echo $stylesheetUrl; ?>/assets/scroll-up/scroll-up.js"></script>
	<script type="text/javascript" src="<?php echo $stylesheetUrl; ?>/assets/slick/slick.js"></script>
	<script type="text/javascript" src="<?php echo $stylesheetUrl; ?>/js/functions.js"></script>
	<script type="text/javascript" src="<?php echo $stylesheetUrl; ?>/js/global.js"></script>
	
</head>
	
<body <?php body_class(); ?>>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <?php if (has_nav_menu("main_nav")): ?>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only"><?php _e('Navigation', 'simple-bootstrap'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php endif ?>
                    <a class="navbar-brand" title="<?php bloginfo('description'); ?>" href="<?php echo site_url(); ?>">
                        <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
                            <img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                        <?php else : ?>
                            <?php bloginfo('name'); ?>
                        <?php endif; ?>
                    </a>
                </div>

                <?php if (has_nav_menu("main_nav")): ?>
                <div id="main-menu" class="collapse navbar-collapse">
                    <?php
                        simple_bootstrap_display_main_menu2();
                    ?>
                </div>
                <?php endif ?>

            </div>
        </nav>
    </header>
