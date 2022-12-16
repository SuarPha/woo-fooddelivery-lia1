<?php
/**
 * Template Name: Full Width
 */

get_header();

add_action('full_width_content', 'do_full_width_content');

add_filter('body-class', 'add_full_body_class');
function add_full_body_class($classes)
{
    $classes[] = 'full-width-template';

    return $classes;
}

get_footer();
?>
