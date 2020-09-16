<?php
/**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

get_header(); ?>

<div class='recensility-main-wrapper hidden no-margin left relative no-padding clearfix' id='recensility-main-wrapper' itemscope='itemscope' itemtype='http://schema.org/Blog' role='main'>
<div class='theiaStickySidebar'>
<div class="recensility-main-wrapper-inside clearfix">

<?php recensility_top_widgets(); ?>

<div class="recensility-posts-wrapper" id="recensility-posts-wrapper">
  <div class="recensility-posts hidden relative no-padding">

  <header class="page-header no-margin">
  <h1 class="recensility-posts-heading white">
    <span>
  <?php echo get_the_title(); ?>
   </span>
  </h1>
</div>
<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php
    if ( comments_open() || get_comments_number() ) :
            comments_template();
    endif;
    ?>

<?php endwhile; ?>
<div class="clear"></div>

</div>

<?php recensility_bottom_widgets(); ?>

</div>
</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
