<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#navbar-menu" data-offset="0">

<!--  MAIN HEADER -->
<header class="site-header">
    <div class="main-nav">
        <div class="logo-box">
            <a href="index.html">
                <img src="<?php the_field('logo', 'option'); ?>" alt="logo" class="img-fluid" width="100%">
            </a>
        </div>
        <div class="nav-menu">
            <?php
            wp_nav_menu(
                array(
                    'menu' => ' ',
                    'container' => '',
                    'container_class' => false,
                    'menu_class' => '',
                    'menu_id' => '',
                    'depth' => 2,
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker(),
                )
            );
            ?>
        </div>
    </div>
    <div class="right-nav">
        <?php if (get_field('social', 'option')): ?>
            <?php while (has_sub_field('social', 'option')): ?>
                <a href="<?php the_sub_field('link'); ?>"> <?php the_sub_field('icon'); ?> </a>
            <?php endwhile; ?>
        <?php endif; ?>
        <span class="search-btn"> <i class="fa fa-search" aria-hidden="true"></i> </span>
    </div>
    <div class="overlay"></div>
    <div class="nav-btn"><span></span> <span></span> <span></span></div>
</header>
