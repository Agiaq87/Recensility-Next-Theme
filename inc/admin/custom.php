<?php
/**
* Customizer Options
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

// Header styles
if ( ! function_exists( 'recensility_header_style' ) ) :
function recensility_header_style() {
    $header_text_color = get_header_textcolor();
    if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) { return; }
    ?>
    <style type="text/css">
    <?php if ( ! display_header_text() ) : ?>
        .recensility-site-title, .recensility-site-description {position: absolute;clip: rect(1px, 1px, 1px, 1px);}
    <?php else : ?>
        .recensility-site-title, .recensility-site-title a, .recensility-site-description {color: #<?php echo esc_attr( $header_text_color ); ?>;}
    <?php endif; ?>
    </style>
    <?php
}
endif;