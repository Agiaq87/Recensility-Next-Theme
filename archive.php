<?php
/**
* The template for displaying archive pages.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

get_header(); ?>

<div class="recensility-main-wrapper hidden no-margin left relative no-padding clearfix" id="recensility-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="recensility-main-wrapper-inside clearfix">

<?php recensility_top_widgets(); ?>

<div class="recensility-posts-wrapper" id="recensility-posts-wrapper">

<div class="recensility-posts hidden relative no-padding">

<header class="page-header no-margin">
<h1 class="recensility-posts-heading white"><span><i class="far fa-folder-open"></i>
<?php echo specific_theme_archive_title(get_the_archive_title()); ?></span>
</h1>
<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
</header>

<div class="recensility-posts-content">
<?php if (have_posts()) : ?>
    <div>
    <?php $recensility_total_posts = $wp_query->post_count; ?>
    <?php $recensility_post_counter=1; while (have_posts()) : the_post();?>
    <div class="the-post-content">
        <div class="recensility-posts-lastest">
                             <a class="recensility-posts-container-lastest-img" href="<?php echo get_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'ri-recent-thumbnails') ?></a>
			 </div>
			 <div class="recensility-posts-lastest-preamble">
			 		<a class="recensility-posts-lastest-preamble-title-item font18" href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a>
           <p class="recensility-posts-lastest-preamble-title-date font14">di <strong class="main-color-text"><?php echo get_the_author() ?></strong>, pubblicato il <strong class="main-color-text"><?php echo get_the_date() ?></strong>, categorie: <?php the_category(' '); ?></p>
           <p class="recensility-posts-lastest-preamble-title-excerpt"><?php echo substr(get_the_excerpt(),0,300).'...  ' ?><strong><a href="<?php echo get_permalink() ?>">Continua a leggere</a></strong></p>
       </div>
    </div>

    <?php $recensility_post_counter++; endwhile; ?>
    </div>
    <div class="clear"></div>

    <?php recensility_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>
</div>

</div>

<?php recensility_bottom_widgets(); ?>

</div>
</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
