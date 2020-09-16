<?php
/**
* recensility functions and definitions.
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

define( 'recensility_PROURL', 'https://Alessandro Giaquinto.com/recensility-pro-wordpress-theme/' );
define( 'recensility_CONTACTURL', 'https://Alessandro Giaquinto.com/contact/' );
define( 'recensility_THEMEOPTIONSDIR', get_template_directory() . '/inc/admin' );

// Add new constant that returns true if WooCommerce is active
define( 'recensility_WOOCOMMERCE_ACTIVE', class_exists( 'WooCommerce' ) );

require_once( recensility_THEMEOPTIONSDIR . '/customizer.php' );

function recensility_get_option($option) {
    $recensility_options = get_option('recensility_options');
    if ((is_array($recensility_options)) && (array_key_exists($option, $recensility_options))) {
        return $recensility_options[$option];
    }
    else {
        return '';
    }
}

if ( ! function_exists( 'recensility_setup' ) ) :

    
function recensility_setup() {

    global $wp_version;

    load_theme_textdomain( 'recensility', get_template_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    if ( function_exists( 'add_image_size' ) ) {
        add_image_size( 'recensility-large-image',  1230, 9999, false );
        add_image_size( 'recensility-featured-image',  892, 9999, false );
        add_image_size( 'recensility-horizontal-image',  480, 360, true );
        add_image_size( 'recensility-square-image',  480, 480, true );
        add_image_size( 'recensility-vertical-image',  480, 640, true );
        add_image_size( 'recensility-hauto-image',  480, 9999, false );
        add_image_size( 'recensility-mini-image',  100, 100, true );
    }

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
    'primary' => esc_html__('Primary Menu', 'recensility'),
    'secondary' => esc_html__('Secondary Menu', 'recensility'),
    'social-menu' => esc_html__( 'Social Menu', 'recensility'),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    $markup = array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' );
    add_theme_support( 'html5', $markup );

    add_theme_support( 'custom-logo', array(
        'height'      => 90,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    // Support for Custom Header
    add_theme_support( 'custom-header', apply_filters( 'recensility_custom_header_args', array(
    'default-image'          => '',
    'default-text-color'     => '333333',
    'width'                  => 1250,
    'height'                 => 200,
    'flex-height'            => true,
    'wp-head-callback'       => 'recensility_header_style',
    'uploads'                => true,
    ) ) );

    // Set up the WordPress core custom background feature.
    $background_args = array(
            'default-color'          => 'eeeeee',
            'default-image'          => get_template_directory_uri() .'/assets/images/background.png',
            'default-repeat'         => 'repeat',
            'default-position-x'     => 'left',
            'default-position-y'     => 'top',
            'default-size'           => 'auto',
            'default-attachment'     => 'fixed',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => 'admin_head_callback_func',
            'admin-preview-callback' => 'admin_preview_callback_func',
    );
    add_theme_support( 'custom-background', apply_filters( 'recensility_custom_background_args', $background_args) );

    // Support for Custom Editor Style
    add_editor_style( 'css/editor-style.css' );

}
endif;
add_action( 'after_setup_theme', 'recensility_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function recensility_content_width() {
    $content_width = 892;

    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
       $content_width = 1230;
    }
    if ( is_404() ) {
        $content_width = 1230;
    }

    $GLOBALS['content_width'] = apply_filters( 'recensility_content_width', $content_width );
}
add_action( 'template_redirect', 'recensility_content_width', 0 );

require_once get_template_directory() . '/inc/functions/enqueue-scripts.php';
require_once get_template_directory() . '/inc/functions/widgets-init.php';
require_once get_template_directory() . '/inc/functions/social-buttons.php';
require_once get_template_directory() . '/inc/functions/author-bio-box.php';
require_once get_template_directory() . '/inc/functions/postmeta.php';
require_once get_template_directory() . '/inc/functions/posts-navigation.php';
require_once get_template_directory() . '/inc/functions/menu.php';
require_once get_template_directory() . '/inc/functions/other.php';
require_once get_template_directory() . '/inc/functions/service.php';
require_once get_template_directory() . '/inc/admin/custom.php';
