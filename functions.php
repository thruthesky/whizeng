<?php
/**
 * @file functions.php
 */



add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'style', td() . '/style.css' );
    wp_enqueue_style( 'base', td() . '/css/base.css' );
    wp_enqueue_style( 'layout', td() . '/css/layout.css' );
    wp_enqueue_style( 'module', td() . '/css/module.css' );
    wp_enqueue_style( 'module.header', td() . '/css/module.header.css' );
    //wp_enqueue_style( 'module.footer', td() . '/css/module.footer.css' );
    wp_enqueue_style( 'module.content', td() . '/css/module.content.css' );
    wp_enqueue_style( 'module.sidebar', td() . '/css/module.sidebar.css' );
    wp_enqueue_style( 'state', td() . '/css/state.css' );
    wp_enqueue_style( 'theme', td() . '/css/theme.css' );
    wp_enqueue_script( 'wp-util' );
});
