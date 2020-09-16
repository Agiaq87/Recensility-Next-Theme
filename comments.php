<?php
/**
* The template for displaying comments
*
* This is the template that displays the area of the page that contains both the current comments
* and the comment form.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
* If the current post is protected by a password and
* the visitor has not yet entered the password we will
* return early without loading the comments.
*/
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area hidden relative no-padding">

    <?php
    if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $recensility_comment_count = get_comments_number();
            if ( 1 === $recensility_comment_count ) {
                printf(
                    esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'recensility' ),
                    '<span>' . get_the_title() . '</span>'
                );
            } else {
                printf( 
                    esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $recensility_comment_count, 'comments title', 'recensility' ) ),
                    number_format_i18n( $recensility_comment_count ),
                    '<span>' . get_the_title() . '</span>'
                );
            }
            ?>
        </h2>

        <?php the_comments_navigation(); ?>

        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'      => 'ol',
                    'short_ping' => true,
                ) );
            ?>
        </ol>

        <?php the_comments_navigation();

        if ( ! comments_open() ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'recensility' ); ?></p>
        <?php
        endif;

    endif;

    comment_form();
    ?>

</div>