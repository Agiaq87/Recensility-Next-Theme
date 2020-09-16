<?php
/**
* The header for recensility theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo( 'name' ) ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class('recensility-animated recensility-fadein'); ?> id="recensility-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<div class="recensility-outer-wrapper-full no-padding">
<div class="recensility-outer-wrapper no-margin full-width relative no-padding">

<?php if ( !(recensility_get_option('disable_secondary_menu')) ) { ?>
<div class="recensility-container recensility-secondary-menu-container clearfix">
<div class="recensility-secondary-menu-container-inside clearfix">

<nav class="recensility-nav-secondary" id="recensility-secondary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
<?php 
    wp_nav_menu( 
        array( 
                'theme_location' => 'secondary', 
                'menu_id' => 'recensility-menu-secondary-navigation', 
                'menu_class' => 'recensility-secondary-nav-menu recensility-menu-secondary', 
                'fallback_cb' => 'recensility_top_fallback_menu' 
            ) 
    ); ?>
</nav>

</div>
</div>
<?php } ?>

<div class="recensility-container relative" id="recensility-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="recensility-head-content hidden no-background-color relative no-padding clearfix" id="recensility-head-content">

<?php if ( get_header_image() ) : ?>
<div class="recensility-header-image clearfix">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="block">
    <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="" class="recensility-header-img block"/>
</a>
</div>
<?php endif; ?>

<?php if ( !(recensility_get_option('hide_header_content')) ) { ?>
<div class="recensility-header-inside clearfix">
<div class="left" id="recensility-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="block">
        <img src="<?php echo esc_url( recensility_custom_logo() ); ?>" alt="" class="block no margin no-padding"/>
    </a>
    </div>
<?php else: ?>
    <div class="site-branding">
      <h1 class="recensility-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <p class="recensility-site-description"><?php bloginfo( 'description' ); ?></p>
    </div>
<?php endif; ?>
</div>

<div id="recensility-header-banner">
<?php dynamic_sidebar( 'recensility-header-banner' ); ?>
</div>
</div>
<?php } ?>

</div>
</div>

<div class="recensility-container recensility-primary-menu-container clearfix">
<div class="recensility-primary-menu-container-inside clearfix">
<?php if ( !(recensility_get_option('disable_primary_menu')) ) { ?>

<nav class="recensility-nav-primary" id="recensility-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
    <div id="recensility-menu-primary-silencer">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'recensility-menu-primary-navigation', 'menu_class' => 'recensility-nav-primary-menu recensility-menu-primary', 'fallback_cb' => 'recensility_fallback_menu', ) ); ?>
    </div>
</nav>

<?php if ( !(recensility_get_option('hide_header_social_buttons')) ) { recensility_header_social_buttons(); } ?>

<div class="recensility-social-search-box no-border relative">
<?php get_search_form(); ?>
</div>

<?php } ?>
</div>
</div>

<div class="recensility-container clearfix relative" id="recensility-wrapper">
<div class="recensility-content-wrapper no-background-color relative no-padding clearfix" id="recensility-content-wrapper">
