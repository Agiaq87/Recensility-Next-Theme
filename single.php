<?php
/**
* The template for displaying all single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

get_header(); ?>

<div class="recensility-main-wrapper hidden left no-margin relative no-padding clearfix" id="recensility-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="recensility-main-wrapper-inside clearfix">

<?php recensility_top_widgets(); ?>
<div class="recensility-posts-wrapper" id="recensility-posts-wrapper">
<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'single' ); ?>

    <?php the_post_navigation(array('prev_text' => esc_html__( '&larr; %title', 'recensility' ), 'next_text' => esc_html__( '%title &rarr;', 'recensility' ))); ?>

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
