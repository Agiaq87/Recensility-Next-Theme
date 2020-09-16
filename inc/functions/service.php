<?php
/**
* Service function that display three postcard for shop, download and street price
*
* @package recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

if(!function_exists('specific_theme_archive_title')){
  function specific_theme_archive_title( $title ) {
      if ( is_category() ) {
          $title = single_cat_title( '', false );
      } elseif ( is_tag() ) {
          $title = single_tag_title( '', false );
      } elseif ( is_author() ) {
          $title = '<span class="vcard">' . get_the_author() . '</span>';
      } elseif ( is_post_type_archive() ) {
          $title = post_type_archive_title( '', false );
      } elseif ( is_tax() ) {
          $title = single_term_title( '', false );
      }

      return $title;
  }

  add_filter( 'get_the_archive_title', 'specific_theme_archive_title' );
}
