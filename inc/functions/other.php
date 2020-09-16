<?php
/**
* More Custom Functions
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

function recensility_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $recensility_custom_logo_id = get_theme_mod( 'custom_logo' );
    $recensility_logo = wp_get_attachment_image_src( $recensility_custom_logo_id , 'full' );
    return $recensility_logo[0];
}

function recensility_category_id_class($classes) {
        global $post;
        foreach((get_the_category($post->ID)) as $category) {
            $classes [] = 'wpcat-' . $category->cat_ID . '-id';
        }
        return $classes;
}
add_filter('post_class', 'recensility_category_id_class');

function recensility_excerpt_more($more) {
       if ( is_admin() ) {
         return $more;
       }
       return '...';
}
add_filter('excerpt_more', 'recensility_excerpt_more');

function recensility_body_classes( $classes ) {
    if ( is_multi_author() ) {
        $classes[] = 'recensility-group-blog';
    }

    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
       $classes[] = 'recensility-layout-full-width';
    }

    if ( is_404() ) {
        $classes[] = 'recensility-layout-full-width';
    }

    if ( !is_active_sidebar( 'recensility-home-bottom-widgets' ) && !is_active_sidebar( 'recensility-single-bottom-widgets' ) && !is_active_sidebar( 'recensility-singular-bottom-widgets' ) && !is_active_sidebar( 'recensility-bottom-widgets' ) ) {
        $classes[] = 'recensility-no-bottom-widgets';
    }

    return $classes;
}
add_filter( 'body_class', 'recensility_body_classes' );

function recensility_post_style() {
       $post_style = 'grid';
       return $post_style;
}

function recensility_grid_thumb_style() {
       $thumb_style = 'recensility-square-image';
       return $thumb_style;
}

function recensility_post_grid_cols() {
       $post_column = 'recensility-3-col';
       return $post_column;
}
