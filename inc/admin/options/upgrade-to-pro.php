<?php
/**
* Upgrade to pro options
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

function recensility_upgrade_to_pro($wp_customize) {

    $wp_customize->add_section( 'sc_recensility_upgrade', array( 'title' => esc_html__( 'Upgrade to Pro Version', 'recensility' ), 'priority' => 400 ) );
    
    $wp_customize->add_setting( 'recensility_options[upgrade_text]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );
    
    $wp_customize->add_control( new recensility_Customize_Static_Text_Control( $wp_customize, 'recensility_upgrade_text_control', array(
        'label'       => esc_html__( 'recensility Pro', 'recensility' ),
        'section'     => 'sc_recensility_upgrade',
        'settings' => 'recensility_options[upgrade_text]',
        'description' => esc_html__( 'Do you enjoy recensility? Upgrade to recensility Pro now and get:', 'recensility' ).
            '<ul class="recensility-customizer-pro-features">' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Color Options', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Font Options', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Layout Options', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'News Ticker', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Custom Page Templates', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Custom Post Templates', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Posts Grid-Layout Styles (2/3/4 Columns)', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Posts Grid-Thumbnails Styles (Horizontal/Square/Vertical/Auto Height)', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Featured Posts Widgets with Layout Styles (2/3/4 Columns) and Thumbnail Styles (Horizontal/Square/Vertical/Auto Height) : These widgets displays recent/popular/random posts or posts from a given category or tag.', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Tabbed Widget', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Social Profiles Widget and About Me Widget', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Widget Areas', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '2 Header Layouts (full-width header or header+728x90 ad)', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Post Share Buttons', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Related Posts with Thumbnails', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Author Bio Box with Social Buttons', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Sticky Menu/Sticky Sidebars with enable/disable capability', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Built-in Contact Form', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'WooCommerce Support', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Search Engine Optimized', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Customizer options', 'recensility' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Features...', 'recensility' ) . '</li>' .
            '</ul>'.
            '<strong><a href="'.recensility_PROURL.'" class="button button-primary" target="_blank"><i class="fa fa-shopping-cart"></i> ' . esc_html__( 'Upgrade To recensility PRO', 'recensility' ) . '</a></strong>'
    ) ) ); 

}