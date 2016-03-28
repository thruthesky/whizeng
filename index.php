<?php
get_header();


/**
 * @brief routes
 */
if ( abc_registered_route( $segment = segment(0) )) {
    include get_template_directory() . "/page/$segment.php";
}
else if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        get_template_part( 'content', get_post_format() );
    }
}

get_footer();