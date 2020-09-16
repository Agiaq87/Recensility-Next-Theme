<?php
/**
* Recommended plugins options
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

function recensility_recomm_plugin_options($wp_customize) {

    // Customizer Section: Recommended Plugins
    $wp_customize->add_section( 'sc_recommended_plugins', array( 'title' => esc_html__( 'Recommended Plugins', 'recensility' ), 'panel' => 'recensility_main_options_panel', 'priority' => 880 ));

    $wp_customize->add_setting( 'recensility_options[recommended_plugins]', array( 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'recensility_sanitize_recommended_plugins' ) );

    $wp_customize->add_control( new recensility_Customize_Recommended_Plugins( $wp_customize, 'recensility_recommended_plugins_control', array( 'label' => esc_html__( 'Recommended Plugins', 'recensility' ), 'section' => 'sc_recommended_plugins', 'settings' => 'recensility_options[recommended_plugins]', 'type' => 'tdna-recommended-wpplugins' ) ) );

}