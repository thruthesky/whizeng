<?php
/**
 * @file functions.php
 */

/**
 * Load library
 */

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'style', td() . '/style.css' );
    wp_enqueue_style( 'base', td() . '/css/base.css' );
    wp_enqueue_style( 'layout', td() . '/css/layout.css' );
    wp_enqueue_style( 'module', td() . '/css/module.css' );
    wp_enqueue_style( 'module.header', td() . '/css/module.header.css' );
    wp_enqueue_style( 'module.content', td() . '/css/module.content.css' );
    wp_enqueue_style( 'module.sidebar', td() . '/css/module.sidebar.css' );
    wp_enqueue_style( 'module.data', td() . '/css/module.data.css' );
    wp_enqueue_style( 'module.footer', td() . '/css/module.footer.css' );
    wp_enqueue_style( 'module.grid', td() . '/css/module.grid.css' );
    wp_enqueue_style( 'state', td() . '/css/state.css' );
    wp_enqueue_style( 'state.header', td() . '/css/state.header.css' );
    wp_enqueue_style( 'theme', td() . '/css/theme.css' );
    wp_enqueue_style( 'register', td() . '/css/register.css' );



    wp_enqueue_script( 'theme', td() . '/js/theme.js', array('jquery') );

    wp_enqueue_style( 'my-slider-v3', td() . '/css/my-slider-v3.css' );
    wp_enqueue_script( 'my-slider-v3', td() . '/js/my-slider-v3.js', array('jquery') );

});


abc_register_route( array(
    'log-in',
    'register',
    'help',
    'about-us',
    'level-test',
    'enrollment',
    'curriculum',
    'reservation',
) );







add_action('after_setup_theme', function () {
    if ( function_exists('remove_admin_bar') ) remove_admin_bar(true);
    load_theme_textdomain('whizeng', get_template_directory());
});
