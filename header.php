<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <div class="site-branding">
                <img class="logo" src="<?php echo get_template_directory_uri() ?>/assets/logo.png" />
            </div>
            <nav id="site-navigation" class="site-navigation">
                <div class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'primary-menu',
                    'container' => false,
                ));
                ?>
            </nav>
        </div>
    </header>
    <div class="content">