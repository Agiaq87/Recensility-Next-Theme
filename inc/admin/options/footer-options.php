<?php
/**
* Footer options
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

function recensility_footer_options($wp_customize) {

    $wp_customize->add_section( 'sc_recensility_footer', array( 'title' => esc_html__( 'Footer', 'recensility' ), 'panel' => 'recensility_main_options_panel', 'priority' => 440 ) );

    $wp_customize->add_setting( 'recensility_options[footer_text]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'recensility_sanitize_html', ) );

    $wp_customize->add_control( 'recensility_footer_text_control', array( 'label' => esc_html__( 'Footer copyright notice', 'recensility' ), 'section' => 'sc_recensility_footer', 'settings' => 'recensility_options[footer_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'recensility_options[hide_footer_widgets]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'recensility_sanitize_checkbox', ) );

    $wp_customize->add_control( 'recensility_hide_footer_widgets_control', array( 'label' => esc_html__( 'Hide Footer Widgets', 'recensility' ), 'section' => 'sc_recensility_footer', 'settings' => 'recensility_options[hide_footer_widgets]', 'type' => 'checkbox', ) );

}