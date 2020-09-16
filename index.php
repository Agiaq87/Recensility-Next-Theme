<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/
get_header();
?>
<div class="recensility-main-wrapper hidden no-margin left relative no-padding clearfix" id="recensility-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="recensility-main-wrapper-inside clearfix">
<?php recensility_top_widgets(); ?>
<div class="recensility-posts-wrapper" id="recensility-posts-wrapper">
<div class="recensility-posts hidden relative no-padding">

<h1 class="recensility-posts-heading white"><span><i class="fas fa-bullhorn"></i> ULTIMO ARTICOLO PUBBLICATO </span></h1>
<div class="recensility-posts-content-lastest hidden no-padding">
    <div class="recensility-posts-container-lastest no-padding">
<?php
$t1 = new WP_Query( array( 'show_post' => 1,'author' => '-2' ) );
if($t1->have_posts()){
  $t1 = $t1->the_post();
}
?>
        <div class="the-post-content">
                <div class="recensility-posts-lastest">
                    <a class="recensility-posts-container-lastest-img" href="<?php echo get_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'ri-recent-thumbnails') ?></a>
                </div>
                <div class="recensility-posts-lastest-preamble">
                    <a class="recensility-posts-lastest-preamble-title-item font18" href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a>
                      <p class="recensility-posts-lastest-preamble-title-date font14">di <strong class="main-color-text"><?php echo get_the_author() ?></strong>, pubblicato il <strong class="main-color-text"><?php echo get_the_date() ?></strong> <?php  the_category(' '); ?></p>
                      <p class="recensility-posts-lastest-preamble-title-excerpt"><?php echo substr(get_the_excerpt(),0,300).'... ' ?><strong><a href="<?php echo get_permalink() ?>">Continua a leggere</a></strong></p>
                </div>
        </div>
    </div>
</div>

<?php if ( !(recensility_get_option('hide_posts_heading')) ) { ?>
<?php if(is_home() && !is_paged()) { ?>
<?php if ( recensility_get_option('posts_heading') ) : ?>
<h1 class="recensility-posts-heading white"><span><i class="fas fa-bell"></i> <?php echo esc_html( recensility_get_option('posts_heading') ); ?></span></h1>
<?php else : ?>
<h1 class="recensility-posts-heading white"><span><i class="fas fa-bell"></i> <?php echo esc_html_e( 'Ultimi articoli pubblicati', 'recensility' ); ?></span></h1>
<?php endif; ?>
<?php } ?>
<?php } ?>
<div class="recensility-posts-content-lastest hidden no-padding">
<?php if (have_posts()) : ?>
    <div class="recensility-posts-container-lastest no-padding">
<?php
$t1 = new WP_Query( array( 'category_name' => 'SMARTPHONE' ) );
if($t1->have_posts()){
  $t1 = $t1->the_post();
}
?>
  <div class="the-post-content">
	<div class="recensility-posts-lastest">
             <a class="recensility-posts-container-lastest-img" href="<?php echo get_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'ri-recent-thumbnails') ?></a>
	</div>
			 <div class="recensility-posts-lastest-preamble">
			 		<a class="recensility-posts-lastest-preamble-title-item font18" href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a>
            <p class="recensility-posts-lastest-preamble-title-date font14">di <strong class="main-color-text"><?php echo get_the_author() ?></strong>, pubblicato il <strong class="main-color-text"><?php echo get_the_date() ?></strong> <?php  the_category(' '); ?></p>
             
            <p class="recensility-posts-lastest-preamble-title-excerpt"><?php echo substr(get_the_excerpt(),0,300).'... ' ?><strong><a href="<?php echo get_permalink() ?>">Continua a leggere</a></strong></p>
       </div>
  </div>
  </div>
     <div class="recensility-posts-container-lastest no-padding">
<?php
$t1 = new WP_Query( array( 'category_name' => 'BRAND' ) );
if($t1->have_posts()){
  $t1 = $t1->the_post();
}
?>
      <div class="the-post-content">
			 <div class="recensility-posts-lastest">
                             <a class="recensility-posts-container-lastest-img" href="<?php echo get_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'ri-recent-thumbnails') ?></a>
			 </div>
			 <div class="recensility-posts-lastest-preamble">
			 		<a class="recensility-posts-lastest-preamble-title-item font18" href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a>
                                        <p class="recensility-posts-lastest-preamble-title-date font14">di <strong class="main-color-text"><?php echo get_the_author() ?></strong>, pubblicato il <strong class="main-color-text"><?php echo get_the_date() ?></strong> <?php  the_category(' '); ?></p>
                                         
                                        <p class="recensility-posts-lastest-preamble-title-excerpt"><?php echo substr(get_the_excerpt(),0,300).'... ' ?><strong><a href="<?php echo get_permalink() ?>"> Continua a leggere</a></strong></p>
			 </div>
    </div>
   </div>
    <div class="recensility-posts-container-lastest no-padding">
<?php
$t1 = new WP_Query( array( 'category_name' => 'TEMI TECH' ) );
if($t1->have_posts()){
  $t1 = $t1->the_post();
}
?>
      <div class="the-post-content">
			 <div class="recensility-posts-lastest">
                             <a class="recensility-posts-container-lastest-img" href="<?php echo get_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'ri-recent-thumbnails') ?></a>
			 </div>
			 <div class="recensility-posts-lastest-preamble">
			 		<a class=" font18" href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a>
            <p class="recensility-posts-lastest-preamble-title-date font14">di <strong class="main-color-text"><?php echo get_the_author() ?></strong>, pubblicato il <strong class="main-color-text"><?php echo get_the_date() ?></strong> <?php  the_category(' '); ?></p>
             <p class="recensility-posts-lastest-preamble-title-excerpt"><?php echo substr(get_the_excerpt(),0,300).'... ' ?><strong><a href="<?php echo get_permalink() ?>">Continua a leggere</a></strong></p>
       </div>
     </div>
    </div>
</div>
</div>
<?php dynamic_sidebar( 'recensility-center-up-home-widgets' ); ?>    
<?php dynamic_sidebar( 'recensility-center-up-2-home-widgets' ); ?>

<div class="recensility-posts">
<h1 class="recensility-posts-heading white"><span><i class="fas fa-microscope"></i> Recensioni</span></h1>
<div class="recensility-posts-content-lastest hidden no-padding">
    <div class="recensility-posts-container-lastest no-padding">
<?php
$t1 = new WP_Query( array( 'category_name' => 'DISPOSITIVI DA POLSO' ) );
if($t1->have_posts()){
  $t1 = $t1->the_post();
}
?>
      <div class="the-post-content">
        <div class="recensility-posts-lastest">
                              <a class="recensility-posts-container-lastest-img" href="<?php echo get_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'ri-recent-thumbnails') ?></a>
        </div>
        <div class="recensility-posts-lastest-preamble">
            <a class="recensility-posts-lastest-preamble-title-item font18" href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a>
                                          <p class="recensility-posts-lastest-preamble-title-date font14">di <strong class="main-color-text"><?php echo get_the_author() ?></strong>, pubblicato il <strong class="main-color-text"><?php echo get_the_date() ?></strong> <?php  the_category(' '); ?></p>
                                          
                                          <p class="recensility-posts-lastest-preamble-title-excerpt"><?php echo substr(get_the_excerpt(),0,300).'... ' ?><strong><a href="<?php echo get_permalink() ?>">Continua a leggere</a></strong></p>
        </div>
      </div>
    </div>
     <div class="recensility-posts-container-lastest no-padding">
<?php
$t1 = new WP_Query( array( 'category_name' => 'DISPOSITIVI AUDIO' ) );
if($t1->have_posts()){
  $t1 = $t1->the_post();
}
?>
      <div class="the-post-content">
			 <div class="recensility-posts-lastest">
                             <a class="recensility-posts-container-lastest-img" href="<?php echo get_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'ri-recent-thumbnails') ?></a>
			 </div>
			 <div class="recensility-posts-lastest-preamble">
			 		<a class="recensility-posts-lastest-preamble-title-item font18" href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a>
                                        <p class="recensility-posts-lastest-preamble-title-date font14">di <strong class="main-color-text"><?php echo get_the_author() ?></strong>, pubblicato il <strong class="main-color-text"><?php echo get_the_date() ?></strong> <?php  the_category(' '); ?></p>
                                         
                                        <p class="recensility-posts-lastest-preamble-title-excerpt"><?php echo substr(get_the_excerpt(),0,300).'... ' ?><strong><a href="<?php echo get_permalink() ?>">Continua a leggere</a></strong></p>
       </div>
    </div>
    </div>
    <div class="recensility-posts-container-lastest no-padding">
<?php
$t1 = new WP_Query( array( 'category_name' => 'UNBOXING' ) );
if($t1->have_posts()){
  $t1 = $t1->the_post();
}
?>
     <div class="the-post-content">   
			 <div class="recensility-posts-lastest">
                             <a class="recensility-posts-container-lastest-img" href="<?php echo get_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'ri-recent-thumbnails') ?></a>
			 </div>
			 <div class="recensility-posts-lastest-preamble">
			 		<a class="recensility-posts-lastest-preamble-title-item font18" href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a>
           <p class="recensility-posts-lastest-preamble-title-date font14">di <strong class="main-color-text"><?php echo get_the_author() ?></strong>, pubblicato il <strong class="main-color-text"><?php echo get_the_date() ?></strong> <?php  the_category(' '); ?></p>
           <p class="recensility-posts-lastest-preamble-title-excerpt"><?php echo substr(get_the_excerpt(),0,300).'... ' ?><strong><a href="<?php echo get_permalink() ?>">Continua a leggere</a></strong></p>
			 </div>
    </div>
</div>
</div>
<?php dynamic_sidebar( 'recensility-center-up-3-home-widgets' ); ?>
<?php dynamic_sidebar( 'recensility-center-down-home-widgets' ); ?>
<?php dynamic_sidebar( 'recensility-center-down-2-home-widgets' ); ?>
<div class="recensility-posts">
<h1 class="recensility-posts-heading white"><span><i class="fas fa-flask"></i> Progetti Tutorial Novità</span></h1>
<div class="recensility-posts-content-lastest hidden no-padding">
    <div class="recensility-posts-container-lastest no-padding">
<?php
$t1 = new WP_Query( array( 'category_name' => 'PROGETTI' ) );
if($t1->have_posts()){
  $t1 = $t1->the_post();
}
?>
    <div class="the-post-content">   
       <div class="recensility-posts-lastest">
          <a class="recensility-posts-container-lastest-img" href="<?php echo get_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'ri-recent-thumbnails') ?></a>
			 </div>
			 <div class="recensility-posts-lastest-preamble">
			 		<a class="recensility-posts-lastest-preamble-title-item font18" href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a>
            <p class="recensility-posts-lastest-preamble-title-date font14">di <strong class="main-color-text"><?php echo get_the_author() ?></strong>, pubblicato il <strong class="main-color-text"><?php echo get_the_date() ?></strong> <?php  the_category(' '); ?></p>
            <p class="recensility-posts-lastest-preamble-title-excerpt"><?php echo substr(get_the_excerpt(),0,300).'... ' ?><strong><a href="<?php echo get_permalink() ?>">Continua a leggere</a></strong></p>
       </div>
    </div>   
   </div>
  </div>

     <div class="recensility-posts-container-lastest no-padding">
<?php
$t1 = new WP_Query( array( 'category_name' => 'TUTORIAL' ) );
if($t1->have_posts()){
  $t1 = $t1->the_post();
}
?>
    <div class="the-post-content">
			 <div class="recensility-posts-lastest">
          <a class="recensility-posts-container-lastest-img" href="<?php echo get_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'ri-recent-thumbnails') ?></a>
			 </div>
			 <div class="recensility-posts-lastest-preamble">
			 		<a class="recensility-posts-lastest-preamble-title-item font18" href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a>
            <p class="recensility-posts-lastest-preamble-title-date font14">di <strong class="main-color-text"><?php echo get_the_author() ?></strong>, pubblicato il <strong class="main-color-text"><?php echo get_the_date() ?></strong> <?php  the_category(' '); ?></p>
            <p class="recensility-posts-lastest-preamble-title-excerpt"><?php echo substr(get_the_excerpt(),0,300).'... ' ?><strong><a href="<?php echo get_permalink() ?>">Continua a leggere</a></strong></p>
       </div>
</div>
    </div>
    <div class="recensility-posts-container-lastest no-padding">
<?php
$t1 = new WP_Query( array( 'category_name' => 'NOVITA\' DI RECENSILITY' ) );
if($t1->have_posts()){
  $t1 = $t1->the_post();
}
?>
    <div class="the-post-content">
			 <div class="recensility-posts-lastest">
          <a class="recensility-posts-container-lastest-img" href="<?php echo get_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'ri-recent-thumbnails') ?></a>
			 </div>
			 <div class="recensility-posts-lastest-preamble">
			 		<a class="recensility-posts-lastest-preamble-title-item font18" href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a>
            <p class="recensility-posts-lastest-preamble-title-date font14">di <strong class="main-color-text"><?php echo get_the_author() ?></strong>, pubblicato il <strong class="main-color-text"><?php echo get_the_date() ?></strong> <?php  the_category(' '); ?></p>
            <p class="recensility-posts-lastest-preamble-title-excerpt"><?php echo substr(get_the_excerpt(),0,300).'... ' ?><strong><a href="<?php echo get_permalink() ?>">Continua a leggere</a></strong></p>
			 </div>
    </div>
</div>
</div>

  <!-- Lastest 15 posts -->
  <h1 class="recensility-posts-heading white"><span><i class="fas fa-bullhorn"></i> potrebbe interessarti anche </span></h1>
  <div class="recensility-posts-content-lastest hidden no-padding">
      
          <?php
          $temp = new WP_Query( array( 'show_post' => 15,'author' => '-2' ) );
          while ($temp->have_posts()){
            $t1 = $temp->the_post();
          ?>
          <div class="recensility-posts-container-lastest no-padding">
            <div class="the-post-content">
                    <div class="recensility-posts-lastest">
                        <a class="recensility-posts-container-lastest-img" href="<?php echo get_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'ri-recent-thumbnails') ?></a>
                    </div>
                    <div class="recensility-posts-lastest-preamble">
                        <a class="recensility-posts-lastest-preamble-title-item font18" href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a>
                          <p class="recensility-posts-lastest-preamble-title-date font14">di <strong class="main-color-text"><?php echo get_the_author() ?></strong>, pubblicato il <strong class="main-color-text"><?php echo get_the_date() ?></strong> <?php  the_category(' '); ?></p>
                          <p class="recensility-posts-lastest-preamble-title-excerpt"><?php echo substr(get_the_excerpt(),0,300).'... ' ?><strong><a href="<?php echo get_permalink() ?>">Continua a leggere</a></strong></p>
                    </div>
            </div>
          </div>
          <?php } ?>
      
  </div>
  <!-- Lastest 15 posts ending -->

</div>
<?php dynamic_sidebar( 'recensility-center-down-3-home-widgets' ); ?>
<?php dynamic_sidebar( 'recensility-center-down-4-home-widgets' ); ?>

    <div class="recensility-posts-container">
<?php
  wp_reset_postdata();
    echo '</div>
    <div class="clear"></div>';
 else :
   get_template_part( 'template-parts/content', 'none' );
 endif;
 ?>
</div>
</div><!--/#recensility-posts-wrapper -->
<?php
global $wp_registered_widgets;
    if ( isset($wp_registered_widgets) ) {
        print_r(get_option('widget_widgetname'));
    }
?>
<?php
  recensility_bottom_widgets();
?>
</div>
</div><!-- /#recensility-main-wrapper 
<button id="recensility-silence" class="no-margin white main-color">&lt;</button>-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>