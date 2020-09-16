<?php
/**
* The file for displaying the search form
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/
?>

<form role="search" method="get" class="recensility-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<label>
    <span class="screen-reader-text"><i class="far fa-search"></i><?php echo esc_html_x( 'Search for:', 'label', 'recensility' ); ?></span>
    <input type="search" class="recensility-search-field no-border" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'recensility' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
</label>
<input type="submit" class="recensility-search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'recensility' ); ?>" />
</form>
