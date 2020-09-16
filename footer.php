<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/
?>

</div>
</div>
<?php if ( !(recensility_get_option('hide_footer_widgets')) ) { ?>
<?php if ( is_active_sidebar( 'recensility-footer-1' ) || is_active_sidebar( 'recensility-footer-2' ) || is_active_sidebar( 'recensility-footer-3' ) ) : ?>
<div class="clearfix relative no-margin no-border block" id="recensility-footer-blocks" itemscope="itemscope" itemtype="http://schema.org/WPFooter" role="contentinfo">
<div class="recensility-container clearfix">

<div class="recensility-footer-block-1 left no-margin">
<?php dynamic_sidebar( 'recensility-footer-1' ); ?>
</div>

<div class="recensility-footer-block-2 left no-margin">
<?php dynamic_sidebar( 'recensility-footer-2' ); ?>
</div>

<div class="recensility-footer-block-3 left no-margin">
<?php dynamic_sidebar( 'recensility-footer-3' ); ?>
</div>

</div>
</div>
<?php endif; ?>
<?php } ?>


<div class="clearfix" id="recensility-footer">
<div class="recensility-foot-wrap recensility-container">
<?php if ( recensility_get_option('footer_text') ) : ?>
  <p class="recensility-copyright"><?php echo esc_html(recensility_get_option('footer_text')); ?></p>
<?php else : ?>
  <p class="recensility-copyright">
      <?php printf( esc_html__( 'Copyright &copy; %s', 'recensility' ), esc_html(date_i18n(__('Y','recensility'))) . ' ' . esc_html(get_bloginfo( 'name' ))  ); ?>
  </p>
  <p class="recensility-credit"><?php echo("Recensility theme"); ?></p>
  <p class="recensility-credit"><?php echo('&#13;Design: Alessandro "Mr.Pixel" Giaquinto - Recensility'); ?></p>
<?php endif; ?>
  

</div>
</div>

</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
