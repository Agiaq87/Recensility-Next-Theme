<?php
/**
* Other options
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

function recensility_other_options($wp_customize) {

    $wp_customize->add_section( 'sc_other_options', array( 'title' => esc_html__( 'Other Options', 'recensility' ), 'panel' => 'recensility_main_options_panel', 'priority' => 560 ) );

    $wp_customize->add_setting( 'recensility_options[enable_sticky_mobile_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'recensility_sanitize_checkbox', ) );

    $wp_customize->add_control( 'recensility_enable_sticky_mobile_menu_control', array( 'label' => esc_html__( 'Enable Sticky Menu on Small Screen', 'recensility' ), 'section' => 'sc_other_options', 'settings' => 'recensility_options[enable_sticky_mobile_menu]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'recensility_options[disable_primary_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'recensility_sanitize_checkbox', ) );

    $wp_customize->add_control( 'recensility_disable_primary_menu_control', array( 'label' => esc_html__( 'Disable Primary Menu', 'recensility' ), 'section' => 'sc_other_options', 'settings' => 'recensility_options[disable_primary_menu]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'recensility_options[disable_secondary_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'recensility_sanitize_checkbox', ) );

    $wp_customize->add_control( 'recensility_disable_secondary_menu_control', array( 'label' => esc_html__( 'Disable Secondary Menu', 'recensility' ), 'section' => 'sc_other_options', 'settings' => 'recensility_options[disable_secondary_menu]', 'type' => 'checkbox', ) );

}