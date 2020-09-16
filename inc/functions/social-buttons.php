<?php
/**
* Social buttons
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

function recensility_header_social_buttons() { ?>

<div id="recensility-top-social-icons" class="recensility-top-social-icons tooltip">
        <span id="social-tooltip" class="tooltiptext">Seguici sui nostri social e unisciti alla nostra community</span>
        <a id="recensility-burger-menu-icon" href="javascript:void(0);" class="recensility-burger-menu-icon white inline-block" onclick="burgerFunction()">
                <i class="fas fa-bars"></i>
        </a>
    <?php if ( recensility_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('twitterlink') ); ?>" target="_blank" class="recensility-social-icon-twitter white inline-block" title="<?php esc_attr_e('Segui il nostro Twitter','recensility'); ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('facebooklink') ); ?>" target="_blank" class="recensility-social-icon-facebook white inline-block" title="<?php esc_attr_e('Metti mi piace alla nostra pagina Facebook','recensility'); ?>"><i class="fab fa-facebook" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('telegramlink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('telegramlink') ); ?>" target="_blank" class="recensility-social-icon-telegram white inline-block" title="<?php esc_attr_e('Vieni sul nostro canale','recensility'); ?>"><i class="fab fa-telegram-plane" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('pinterestlink') ); ?>" target="_blank" class="recensility-social-icon-pinterest white inline-block" title="<?php esc_attr_e('Pinterest','recensility'); ?>"><i class="fab fa-pinterest" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('linkedinlink') ); ?>" target="_blank" class="recensility-social-icon-linkedin white inline-block" title="<?php esc_attr_e('Linkedin','recensility'); ?>"><i class="fab fa-linkedin" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('instagramlink') ); ?>" target="_blank" class="recensility-social-icon-instagram white inline-block" title="<?php esc_attr_e('Seguici su Instagram','recensility'); ?>"><i class="fab fa-instagram" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('flickrlink') ); ?>" target="_blank" class="recensility-social-icon-flickr white inline-block" title="<?php esc_attr_e('Flickr','recensility'); ?>"><i class="fab fa-flickr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('youtubelink') ); ?>" target="_blank" class="recensility-social-icon-youtube white inline-block" title="<?php esc_attr_e('Iscriviti al nostro canale','recensility'); ?>"><i class="fab fa-youtube" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('vimeolink') ); ?>" target="_blank" class="recensility-social-icon-vimeo white inline-block" title="<?php esc_attr_e('Vimeo','recensility'); ?>"><i class="fab fa-vimeo" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('soundcloudlink') ); ?>" target="_blank" class="recensility-social-icon-soundcloud white inline-block" title="<?php esc_attr_e('SoundCloud','recensility'); ?>"><i class="fab fa-soundcloud" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('lastfmlink') ); ?>" target="_blank" class="recensility-social-icon-lastfm white inline-block" title="<?php esc_attr_e('Lastfm','recensility'); ?>"><i class="fab fa-lastfm" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('githublink') ); ?>" target="_blank" class="recensility-social-icon-github white inline-block" title="<?php esc_attr_e('Github','recensility'); ?>"><i class="fab fa-github" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('bitbucketlink') ); ?>" target="_blank" class="recensility-social-icon-bitbucket white inline-block" title="<?php esc_attr_e('Bitbucket','recensility'); ?>"><i class="fab fa-bitbucket" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('tumblrlink') ); ?>" target="_blank" class="recensility-social-icon-tumblr white inline-block" title="<?php esc_attr_e('Tumblr','recensility'); ?>"><i class="fab fa-tumblr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('digglink') ); ?>" target="_blank" class="recensility-social-icon-digg white inline-block" title="<?php esc_attr_e('Digg','recensility'); ?>"><i class="fab fa-digg" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('deliciouslink') ); ?>" target="_blank" class="recensility-social-icon-delicious white inline-block" title="<?php esc_attr_e('Delicious','recensility'); ?>"><i class="fab fa-delicious" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('stumblelink') ); ?>" target="_blank" class="recensility-social-icon-stumbleupon white inline-block" title="<?php esc_attr_e('Stumbleupon','recensility'); ?>"><i class="fab fa-stumbleupon" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('redditlink') ); ?>" target="_blank" class="recensility-social-icon-reddit white inline-block" title="<?php esc_attr_e('Reddit','recensility'); ?>"><i class="fab fa-reddit" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('dribbblelink') ); ?>" target="_blank" class="recensility-social-icon-dribbble white inline-block" title="<?php esc_attr_e('Dribbble','recensility'); ?>"><i class="fab fa-dribbble" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('behancelink') ); ?>" target="_blank" class="recensility-social-icon-behance white inline-block" title="<?php esc_attr_e('Behance','recensility'); ?>"><i class="fab fa-behance" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('vklink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('vklink') ); ?>" target="_blank" class="recensility-social-icon-vk white inline-block" title="<?php esc_attr_e('VK','recensility'); ?>"><i class="fab fa-vk" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('codepenlink') ); ?>" target="_blank" class="recensility-social-icon-codepen white inline-block" title="<?php esc_attr_e('Codepen','recensility'); ?>"><i class="fab fa-codepen" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('jsfiddlelink') ); ?>" target="_blank" class="recensility-social-icon-jsfiddle white inline-block" title="<?php esc_attr_e('JSFiddle','recensility'); ?>"><i class="fab fa-jsfiddle" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('stackoverflowlink') ); ?>" target="_blank" class="recensility-social-icon-stackoverflow white inline-block" title="<?php esc_attr_e('Stack Overflow','recensility'); ?>"><i class="fab fa-stack-overflow" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('stackexchangelink') ); ?>" target="_blank" class="recensility-social-icon-stackexchange white inline-block" title="<?php esc_attr_e('Stack Exchange','recensility'); ?>"><i class="fab fa-stack-exchange" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('bsalink') ); ?>" target="_blank" class="recensility-social-icon-buysellads white inline-block" title="<?php esc_attr_e('BuySellAds','recensility'); ?>"><i class="fab fa-buysellads" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('slidesharelink') ); ?>" target="_blank" class="recensility-social-icon-slideshare white inline-block" title="<?php esc_attr_e('SlideShare','recensility'); ?>"><i class="fab fa-slideshare" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( recensility_get_option('skypeusername') ); ?>?chat" class="recensility-social-icon-skype white inline-block" title="<?php esc_attr_e('Skype','recensility'); ?>"><i class="fab fa-skype" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( recensility_get_option('emailaddress') ); ?>" class="recensility-social-icon-email white inline-block" title="<?php esc_attr_e('Contattaci qui','recensility'); ?>"><i class="fas fa-envelope" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( recensility_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( recensility_get_option('rsslink') ); ?>" target="_blank" class="recensility-social-icon-rss white inline-block" title="<?php esc_attr_e('RSS','recensility'); ?>"><i class="fas fa-rss" aria-hidden="true"></i></a><?php endif; ?>
</div>

<?php }
