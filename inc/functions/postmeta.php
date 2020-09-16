<?php
/**
* Post meta functions
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

if ( ! function_exists( 'recensility_post_tags' ) ) :
/**
 * Prints HTML with meta information for the tags.
 */
function recensility_post_tags() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'recensility' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="recensility-tags-links"><i class="far fa-bookmark"></i> ' . esc_html__( '%1$s', 'recensility' ) . '</span>', $tags_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'recensility_grid_cats' ) ) :
function recensility_grid_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'recensility' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="recensility-grid-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'recensility' ) . '</div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'recensility_grid_postmeta' ) ) :
function recensility_grid_postmeta() { ?>
    <?php if ( !(recensility_get_option('hide_post_author_home')) || !(recensility_get_option('hide_posted_date_home')) || !(recensility_get_option('hide_comments_link_home')) ) { ?>
    <div class="recensility-grid-post-footer full-width">
    <?php if ( !(recensility_get_option('hide_post_author_home')) ) { ?><span class="recensility-grid-post-author recensility-grid-post-meta inline-block"><a class="white inline-block" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(recensility_get_option('hide_posted_date_home')) ) { ?><span class="recensility-grid-post-date recensility-grid-post-meta inline-block"><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(recensility_get_option('hide_comments_link_home')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="recensility-grid-post-comment recensility-grid-post-meta inline-block"><?php comments_popup_link( esc_attr__( 'Leave a comment', 'recensility' ), esc_attr__( '1 Comment', 'recensility' ), esc_attr__( '% Comments', 'recensility' ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'recensility_single_cats' ) ) :
function recensility_single_cats() {
    if ( 'post' == get_post_type() ) {
        $categories_list = get_the_category_list( esc_html__( ', ', 'recensility' ) );
        if ( $categories_list ) {
            printf( '<div class="recensility-entry-meta-single white main-color recensility-entry-meta-single-top"><span class="recensility-entry-meta-single-cats inline-block"><i class="far fa-folder-open"></i>&nbsp;' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'recensility' ) . '</span></div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'recensility_single_postmeta' ) ) :
function recensility_single_postmeta() { ?>
    <?php if ( !(recensility_get_option('hide_post_author')) || !(recensility_get_option('hide_posted_date')) || !(recensility_get_option('hide_comments_link')) || !(recensility_get_option('hide_post_edit')) ) { ?>
    <div class="recensility-entry-meta-single white main-color">
    <?php if ( !(recensility_get_option('hide_post_author')) ) { ?><span class="recensility-entry-meta-single-author inline-block"><i class="far fa-user-circle"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(recensility_get_option('hide_posted_date')) ) { ?><span class="recensility-entry-meta-single-date inline-block"><i class="far fa-clock-o"></i>&nbsp;<?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(recensility_get_option('hide_comments_link')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="recensility-entry-meta-single-comments inline-block"><i class="far fa-comments-o"></i>&nbsp;<?php comments_popup_link( esc_attr__( 'Leave a comment', 'recensility' ), esc_attr__( '1 Comment', 'recensility' ), esc_attr__( '% Comments', 'recensility' ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(recensility_get_option('hide_post_edit')) ) { ?><?php edit_post_link( esc_html__( 'Edit', 'recensility' ), '<span class="edit-link">&nbsp;&nbsp;<i class="far fa-pencil"></i>', '</span>' ); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;
