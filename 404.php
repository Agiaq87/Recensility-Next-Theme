<?php
/**
* The template for displaying 404 pages (not found).
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
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

<div class="recensility-posts-wrapper" id="recensility-posts-wrapper">

<div class="recensility-posts hidden relative no-padding">

<header class="page-header no-margin">
  <h1 class="recensility-posts-heading white"><span><?php esc_html_e( 'Ti preghiamo di scusarci, qualcosa è andato storto... ', 'recensility' ); ?></span></h1>
</header><!-- .page-header -->

<div class="recensility-posts-content">

    <p><?php esc_html_e( 'Puoi tornare indietro, navigare sul menù o scegliere tra le seguenti alternative:', 'recensility' ); ?></p>

    <?php get_search_form(); ?>

    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

    <div>
        <h2><?php esc_html_e( 'Le categorie più ricercate', 'recensility' ); ?></h2>
        <ul>
        <?php
                wp_list_categories( array(
                        'orderby'    => 'count',
                        'order'      => 'DESC',
                        'show_count' => 1,
                        'title_li'   => '',
                        'number'     => 10,
                ) );
        ?>
        </ul>
    </div>

    <?php
        $recensility_archive_content = '<p>' . sprintf( esc_html__( 'Guarda nell\'archivio mensile. %1$s', 'recensility' ), convert_smilies( ':)' ) ) . '</p>';
        the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$recensility_archive_content" );
    ?>

    <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

</div>

</div>

</div><!--/#recensility-posts-wrapper -->

</div>
</div>
</div><!-- /#recensility-main-wrapper -->

<?php get_footer(); ?>
