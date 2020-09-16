<?php
/**
* Template part for displaying posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/
?>

<div id="post-<?php the_ID(); ?>" class="recensility-grid-post left no-margin <?php echo esc_attr( recensility_post_grid_cols() ); ?>">
<div class="recensility-grid-post-inside">

    <?php if ( has_post_thumbnail() ) { ?>
    <?php if ( !(recensility_get_option('hide_thumbnail')) ) { ?>
    <div class="recensility-grid-post-thumbnail hidden no-margin full-width relative">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo esc_attr( sprintf( __( 'Permanent Link to %s', 'recensility' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail(recensility_grid_thumb_style(), array('class' => 'recensility-grid-post-thumbnail-img')); ?></a>
        <?php recensility_grid_postmeta(); ?>
    </div>
    <?php } else { ?>
    <div class="recensility-grid-post-thumbnail hidden no-margin full-width relative">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo esc_attr( sprintf( __( 'Permanent Link to %s', 'recensility' ), the_title_attribute( 'echo=0' ) ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-image-4-4.jpg' ); ?>" class="recensility-grid-post-thumbnail-img"/></a>
        <?php recensility_grid_postmeta(); ?>
    </div>
    <?php } ?>
    <?php } else { ?>
    <div class="recensility-grid-post-thumbnail hidden no-margin full-width relative">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo esc_attr( sprintf( __( 'Permanent Link to %s', 'recensility' ), the_title_attribute( 'echo=0' ) ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-image-4-4.jpg' ); ?>" class="recensility-grid-post-thumbnail-img"/></a>
        <?php recensility_grid_postmeta(); ?>
    </div>
    <?php } ?>

    <div class="recensility-grid-post-details full-width">
    <?php if ( !(recensility_get_option('hide_post_categories_home')) ) { ?><?php recensility_grid_cats(); ?><?php } ?>

    <?php the_title( sprintf( '<h3 class="recensility-grid-post-title no-margin"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
    </div>

</div>
</div>