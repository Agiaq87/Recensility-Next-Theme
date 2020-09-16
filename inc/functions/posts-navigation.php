<?php
/**
* Posts navigation functions
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

if ( ! function_exists( 'recensility_wp_pagenavi' ) ) :
function recensility_wp_pagenavi() {
    ?>
    <nav class="navigation posts-navigation clearfix" role="navigation">
        <?php wp_pagenavi(); ?>
    </nav><!-- .navigation -->
    <?php
}
endif;

if ( ! function_exists( 'recensility_posts_navigation' ) ) :
function recensility_posts_navigation() {
    if ( function_exists( 'wp_pagenavi' ) ) {
        recensility_wp_pagenavi();
    } else {
        the_posts_navigation(array('prev_text' => esc_html__( '&larr; Older posts', 'recensility' ), 'next_text' => esc_html__( 'Newer posts &rarr;', 'recensility' )));
    }
}
endif;