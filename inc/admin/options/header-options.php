<?php
/**
* Header options
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

function recensility_header_options($wp_customize) {

    // Header
    $wp_customize->add_section( 'sc_recensility_header', array( 'title' => esc_html__( 'Header Options', 'recensility' ), 'panel' => 'recensility_main_options_panel', 'priority' => 240 ) );

    $wp_customize->add_setting( 'recensility_options[hide_header_content]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'recensility_sanitize_checkbox', ) );

    $wp_customize->add_control( 'recensility_hide_header_content_control', array( 'label' => esc_html__( 'Hide Header Content', 'recensility' ), 'section' => 'sc_recensility_header', 'settings' => 'recensility_options[hide_header_content]', 'type' => 'checkbox', ) );
/*
    $wp_customize->add_setting( 'recensility_options[hide_content]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'recensility_sanitize_checkbox', ) );

    $wp_customize->add_control( 'recensility_hide_header_content_control', array( 'label' => esc_html__( 'Test', 'recensility' ), 'section' => 'sc_recensility_header', 'settings' => 'recensility_options[hide_header_content]', 'type' => 'checkbox', ) );
*/}
