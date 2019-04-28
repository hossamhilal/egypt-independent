<?php
define('DIR_URI', get_template_directory_uri() );
define('CSS_URI', get_template_directory_uri() .'/css/');
define('JS_URI', get_template_directory_uri() .'/js/');
add_action( 'wp_enqueue_scripts', 'theme_files' );
function theme_files() {
    wp_enqueue_style('font-awesome',  CSS_URI . 'font-awesome.min.css');
    wp_enqueue_style('owl-carousel', CSS_URI . 'owl.carousel.min.css');
    wp_enqueue_style('bootstrap', CSS_URI . 'bootstrap.min.css');
    wp_enqueue_style('main-style', CSS_URI . 'style.css');
    wp_enqueue_style('style', DIR_URI);

    wp_enqueue_script('popper',JS_URI . 'popper.min.js',array('jquery'),'null', true);
    wp_enqueue_script('bootstrap-js',JS_URI . 'bootstrap.min.js',array('jquery'),'null', true);
    wp_enqueue_script('owl',JS_URI . 'owl.carousel.min.js',array('jquery'),'null', true);
    wp_enqueue_script('edit',JS_URI . 'edit.js',array('jquery'),'null', true);
}

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';



function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');


// REGISTER THE NAVBER
add_action( 'after_setup_theme', 'register_my_menus' );
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header' ),
            'footer' => __( 'footer' )
        )
    );
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}



// ADD ACTIVE CLASS TO NAV ITEM
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}


add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme_h_menu',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme_h_menu',
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme_h_menu',
    ));
}

