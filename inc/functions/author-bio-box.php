<?php
/**
* Author bio box
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

function recensility_add_author_bio_box() {
    $content='';
    if (is_single()) {
        $content .= '
            <div class="recensility-author-bio no-background-color">
            <div class="recensility-author-bio-top hidden">
            <div class="recensility-author-bio-text font18 left">
                <h4>'.esc_html__( 'Author: ', 'recensility' ).'<span>'. get_the_author_link() .'</span></h4>'. get_the_author_meta('description',get_query_var('author') ) .'
            </div>
            </div>
            </div>
        ';
    }
    return $content;
}