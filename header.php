<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.png" type="image/x-icon">
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <div class="site-branding">
                <a class="go-home" href="/"></a>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.png" />
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