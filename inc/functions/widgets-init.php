<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

function recensility_widgets_init() {

register_sidebar(array(
    'id' => 'recensility-header-banner',
    'name' => esc_html__( 'Header Banner', 'recensility' ),
    'description' => esc_html__( 'This sidebar is located on the header of the web page.', 'recensility' ),
    'before_widget' => '<div id="%1$s" class="recensility-header-widget widget   %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="recensility-widget-title white">',
    'after_title' => '</h2>'));

register_sidebar(array(
    'id' => 'recensility-sidebar-one',
    'name' => esc_html__( 'Main Sidebar', 'recensility' ),
    'description' => esc_html__( 'This sidebar is normally located on the left-hand side of web page.', 'recensility' ),
    'before_widget' => '<div id="%1$s" class="recensility-side-widget widget   %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="recensility-widget-title white"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'recensility-home-top-widgets',
    'name' => esc_html__( 'Top Widgets (Home Page Only)', 'recensility' ),
    'description' => esc_html__( 'This widget area is located at the top of homepage.', 'recensility' ),
    'before_widget' => '<div id="%1$s" class="recensility-main-widget widget   %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="recensility-widget-title white"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'recensility-top-widgets',
    'name' => esc_html__( 'Top Widgets (Every Page)', 'recensility' ),
    'description' => esc_html__( 'This widget area is located at the top of every page.', 'recensility' ),
    'before_widget' => '<div id="%1$s" class="recensility-main-widget widget   %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="recensility-widget-title white"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'recensility-center-up-home-widgets',
    'name' => esc_html__( 'Sotto TEMI TECH di Top Trend (Home Page Only)', 'recensility' ),
    'description' => esc_html__( 'This widget area is located at the center of homepage.', 'recensility' ),
    'before_widget' => '<div id="%1$s" class="recensility-main-widget widget   %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="recensility-widget-title white"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'recensility-center-up-2-home-widgets',
    'name' => esc_html__( 'Sopra Recensioni (Home Page Only)', 'recensility' ),
    'description' => esc_html__( 'This widget area is located at the center of homepage.', 'recensility' ),
    'before_widget' => '<div id="%1$s" class="recensility-main-widget widget   %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="recensility-widget-title white"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'recensility-center-up-3-home-widgets',
    'name' => esc_html__( 'Widget at center (AFTER UP) of page (Home Page Only)', 'recensility' ),
    'description' => esc_html__( 'This widget area is located at the center of homepage.', 'recensility' ),
    'before_widget' => '<div id="%1$s" class="recensility-main-widget widget   %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="recensility-widget-title white"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'recensility-center-down-home-widgets',
    'name' => esc_html__( 'Ultimo Widget sotto PROGETTI TUTORIAL NOVITÀ', 'recensility' ),
    'description' => esc_html__( 'This widget area is located at the center of homepage.', 'recensility' ),
    'before_widget' => '<div id="%1$s" class="recensility-main-widget widget   %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="recensility-widget-title white"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'recensility-center-down-2-home-widgets',
    'name' => esc_html__( 'PRE FOOTER (Home Page Only)', 'recensility' ),
    'description' => esc_html__( 'This widget area is located at the center of homepage.', 'recensility' ),
    'before_widget' => '<div id="%1$s" class="recensility-main-widget widget   %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="recensility-widget-title white"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'recensility-center-down-3-home-widgets',
    'name' => esc_html__( 'Widget at center (AFTER DOWN) of page (Home Page Only)', 'recensility' ),
    'description' => esc_html__( 'This widget area is located at the center of homepage.', 'recensility' ),
    'before_widget' => '<div id="%1$s" class="recensility-main-widget widget   %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="recensility-widget-title white"><span>',
    'after_title' => '</span></h2>'));


register_sidebar(array(
    'id' => 'recensility-home-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Home Page Only)', 'recensility' ),
    'description' => esc_html__( 'This widget area is located at the bottom of homepage.', 'recensility' ),
    'before_widget' => '<div id="%1$s" class="recensility-main-widget widget   %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="recensility-widget-title white"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'recensility-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Every Page)', 'recensility' ),
    'description' => esc_html__( 'This widget area is located at the bottom of every page.', 'recensility' ),
    'before_widget' => '<div id="%1$s" class="recensility-main-widget widget   %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="recensility-widget-title white"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'recensility-footer-1',
    'name' => esc_html__( 'Footer 1', 'recensility' ),
    'description' => esc_html__( 'This sidebar is located on the left bottom of web page.', 'recensility' ),
    'before_widget' => '<div id="%1$s" class="recensility-footer-widget widget   %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="recensility-widget-title white"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'recensility-footer-2',
    'name' => esc_html__( 'Footer 2', 'recensility' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'recensility' ),
    'before_widget' => '<div id="%1$s" class="recensility-footer-widget widget   %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="recensility-widget-title white"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'recensility-footer-3',
    'name' => esc_html__( 'Footer 3', 'recensility' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'recensility' ),
    'before_widget' => '<div id="%1$s" class="recensility-footer-widget widget   %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="recensility-widget-title white"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'recensility-footer-4',
    'name' => esc_html__( 'Footer 4', 'recensility' ),
    'description' => esc_html__( 'This sidebar is located on the right bottom of web page.', 'recensility' ),
    'before_widget' => '<div id="%1$s" class="recensility-footer-widget widget   %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="recensility-widget-title white"><span>',
    'after_title' => '</span></h2>'));

}
add_action( 'widgets_init', 'recensility_widgets_init' );


function recensility_top_widgets() { ?>

<?php if ( is_active_sidebar( 'recensility-home-top-widgets' ) || is_active_sidebar( 'recensility-top-widgets' ) ) : ?>
<div class="recensility-featured-posts-area   relative no-margin no-padding recensility-featured-posts-area-top clearfix">
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'recensility-home-top-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'recensility-top-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function recensility_bottom_widgets() { ?>

<?php if ( is_active_sidebar( 'recensility-home-bottom-widgets' ) || is_active_sidebar( 'recensility-bottom-widgets' ) ) : ?>
<div class='recensility-featured-posts-area   relative no-margin no-padding recensility-featured-posts-area-bottom clearfix'>
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'recensility-home-bottom-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'recensility-bottom-widgets' ); ?>
</div>
<?php endif; ?>

<?php }
