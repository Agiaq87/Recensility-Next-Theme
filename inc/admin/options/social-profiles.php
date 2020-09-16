<?php
/**
* Social profiles options
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

function recensility_social_profiles($wp_customize) {

    $wp_customize->add_section( 'sc_recensility_sociallinks', array( 'title' => esc_html__( 'Social Links', 'recensility' ), 'panel' => 'recensility_main_options_panel', 'priority' => 400, ));

    $wp_customize->add_setting( 'recensility_options[hide_header_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'recensility_sanitize_checkbox', ) );

    $wp_customize->add_control( 'recensility_hide_header_social_buttons_control', array( 'label' => esc_html__( 'Hide Header Social Buttons', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[hide_header_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'recensility_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_twitterlink_control', array( 'label' => esc_html__( 'Twitter URL', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[telegramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_telegramlink_control', array( 'label' => esc_html__( 'Telegram', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[telegramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[pinterestlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[vklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_vklink_control', array( 'label' => esc_html__( 'VK Link', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[vklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_githublink_control', array( 'label' => esc_html__( 'Github URL', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon Link', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_redditlink_control', array( 'label' => esc_html__( 'Reddit Link', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble Link', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_behancelink_control', array( 'label' => esc_html__( 'Behance Link', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_codepenlink_control', array( 'label' => esc_html__( 'Codepen Link', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle Link', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow Link', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange Link', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_bsalink_control', array( 'label' => esc_html__( 'BuySellAds Link', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare Link', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'recensility_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'recensility_sanitize_email' ) );

    $wp_customize->add_control( 'recensility_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'recensility_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'recensility_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'recensility' ), 'section' => 'sc_recensility_sociallinks', 'settings' => 'recensility_options[rsslink]', 'type' => 'text' ) );

}
