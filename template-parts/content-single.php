<?php
/**
* Template part for displaying single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('recensility-post-singular'); ?>>
<div class="recensility-posts hidden no-padding">
    <header class="entry-header">
       <div class="page-header no-margin">
         <h1 class="recensility-posts-heading white">
           <span>
             <?php the_title(); ?>
           </span>
           <span class="recensility-posts-heading-tags">
               <?php
               if ( 'post' == get_post_type() ) {
                   /*
                   translators: used between list items, there is a space after the comma
                   $tags_list = get_the_category_list( '', esc_html_x( ', ', 'list item separator', 'recensility' ) );
                   */
                   $categories_list = get_the_category_list( esc_html__( ', ', 'recensility' ) );
                   if ( $categories_list ) {
                       /* translators: 1: list of tags. */
                       printf(esc_html__( '%1$s', 'recensility' ), $categories_list ); // WPCS: XSS OK.
                   }
               }
               ?>
          </span>
        </h1>
       </div>
        <?php /* the_title( sprintf( '<h1 class="recensility-posts-heading white"><span><!--<a href="%s" rel="bookmark">-->', esc_url( get_permalink() ) ), '<!--</a>--></span></h1>' ); 
         if ( !(recensility_get_option('hide_post_categories')) ) {  recensility_single_cats(); } */
         ?>
         

        <?php recensility_single_postmeta(); ?>
    </header><!-- .entry-header -->

    <div class="entry-content relative clearfix">
            <?php
            if ( has_post_thumbnail() ) {
                if ( !(recensility_get_option('hide_thumbnail')) ) {
                    if ( !(recensility_get_option('hide_thumbnail_single')) ) {
                        if ( recensility_get_option('thumbnail_link') == 'no' ) {
                            the_post_thumbnail('recensility-featured-image', array('class' => 'recensility-post-thumbnail-single'));
                        } else { ?>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'recensility' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('recensility-featured-image', array('class' => 'recensility-post-thumbnail-single')); ?></a>
                <?php   }
                    }
                }
            }

            the_content( sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'recensility' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ) );

            wp_link_pages( array(
             'before'      => '<div class="page-links hidden white inline-block"><span class="page-links-title">' . esc_html__( 'Pages:', 'recensility' ) . '</span>',
             'after'       => '</div>',
             'link_before' => '<span>',
             'link_after'  => '</span>',
             ) );
             ?>
</div>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php if ( !(recensility_get_option('hide_post_tags')) ) { ?><?php recensility_post_tags(); ?><?php } ?>
    </footer><!-- .entry-footer -->

    <?php if ( !(recensility_get_option('hide_author_bio_box')) ) { echo wp_kses_post( force_balance_tags( recensility_add_author_bio_box() ) ); } ?>

</article>
