<?php
get_header();


/**
 * @brief routes
 */
$segment = segment(0);
$path = get_template_directory() . "/page/$segment.php";

if ( file_exists($path) ) {
    include $path;
}
else if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        get_template_part( 'content', get_post_format() );
    }
}

get_footer();