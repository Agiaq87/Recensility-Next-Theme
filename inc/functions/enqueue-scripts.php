<?php
/**
* Enqueue scripts and styles
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

add_action( 
    'wp_enqueue_scripts', 
    function() {
        wp_enqueue_style('recensility', get_template_directory_uri() . '/css/recensility.css', array(), NULL);
        wp_enqueue_style('recensilitymobile', get_template_directory_uri() . '/css/recensilitymobile.css', array(), NULL);
        wp_enqueue_style('all.min', get_template_directory_uri() . '/css/all.min.css', false, '5.4', 'all' );
        //wp_enqueue_style('Gudea', '//fonts.googleapis.com/css?family=Gudea', array(), NULL);
        wp_enqueue_script('fitvids', get_template_directory_uri() .'/js/jquery.fitvids.min.js', array( 'jquery' ), NULL, true);
        $recensility_sticky_menu = TRUE;
        $recensility_sticky_mobile_menu = TRUE;
        if ( !recensility_get_option('enable_sticky_mobile_menu') ) {
            $recensility_sticky_mobile_menu = FALSE;
        }
        $recensility_sticky_sidebar = TRUE;
        if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
        $recensility_sticky_sidebar = FALSE;
        }
        if ( is_404() ) {
            $recensility_sticky_sidebar = FALSE;
        }
        if ( $recensility_sticky_sidebar ) {
            wp_enqueue_script('ResizeSensor', get_template_directory_uri() .'/js/ResizeSensor.min.js', array( 'jquery' ), NULL, true);
            wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri() .'/assets/js/theia-sticky-sidebar.min.js', array( 'jquery' ), NULL, true);
        }
        wp_enqueue_script('customjs', get_template_directory_uri() .'/js/custom.js', array( 'jquery' ), NULL, true);
        
        //wp_enqueue_scripts('recensility', get_template_directory_uri() . '/js/recensility.js');
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    } 
);
