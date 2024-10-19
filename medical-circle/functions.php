<?php
/**
 * Medical Circle functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage Medical Circle
 */


/**
 *  Default Theme layout options
 *
 * @since Medical Circle 1.0.0
 *
 * @param null
 * @return array $medical_circle_theme_layout
 *
 */
if ( !function_exists('medical_circle_get_default_theme_options') ) :
    function medical_circle_get_default_theme_options() {

        $default_theme_options = array(

            /*basic info*/
            'medical-circle-header-bi-display-options'  => 'hide',
            'medical-circle-header-bi-number'  => 4,
            'medical-circle-first-info-icon'  => 'fa-volume-control-phone',
            'medical-circle-first-info-title'  => __('Emergency 24 Hours', 'medical-circle'),
            'medical-circle-first-info-desc'  => __('01-123-223-4567', 'medical-circle'),
            'medical-circle-second-info-icon'  => 'fa-envelope-o',
            'medical-circle-second-info-title'  => __('Send us a Mail', 'medical-circle'),
            'medical-circle-second-info-desc'  => __('email@mydomain.com', 'medical-circle'),
            'medical-circle-third-info-icon'  => 'fa-map-marker',
            'medical-circle-third-info-title'  => __('Our Location', 'medical-circle'),
            'medical-circle-third-info-desc'  => __('Elmonte California', 'medical-circle'),
            'medical-circle-forth-info-icon'  => 'fa-clock-o',
            'medical-circle-forth-info-title'  => __('Working Hours', 'medical-circle'),
            'medical-circle-forth-info-desc'  => __('Mon - Sun 08:00 19:00', 'medical-circle'),

            /*logo and site title*/
            'medical-circle-display-site-logo'  => '',
            'medical-circle-display-site-title'  => 1,
            'medical-circle-display-site-tagline'  => 1,

            /*header height*/
            'medical-circle-header-height'  => 300,

            /*header top*/
            'medical-circle-enable-header-top'  => '',
            'medical-circle-header-top-menu-display-selection'  => 'right',
            'medical-circle-header-top-news-display-selection'  => 'left',
            'medical-circle-header-top-social-display-selection'  => 'right',
            'medical-circle-newsnotice-title'  => __( 'News', 'medical-circle' ),
            'medical-circle-newsnotice-cat'  => 0,

            /*menu options*/
            'medical-circle-enable-sticky'  => 1,
            'medical-circle-menu-right-button-options'  => 'appointment',
            'medical-circle-menu-right-button-title'  => __('Book Appointment','medical-circle'),
            'medical-circle-menu-right-button-link'  => '',

            /*feature section options*/
            'medical-circle-enable-feature'  => '',
            'medical-circle-feature-column-1'  => 0,
            'medical-circle-feature-column-2'  => 0,
            'medical-circle-feature-column-3'  => 0,
            'medical-circle-feature-column-1-color'  => '#5eb8e4',
            'medical-circle-feature-column-2-color'  => '#009ddb',
            'medical-circle-feature-column-3-color'  => '#088edd',
            'medical-circle-slides-data'  => '',
            'medical-circle-feature-slider-enable-animation'  => 1,
            'medical-circle-feature-slider-display-title'  => 1,
            'medical-circle-feature-slider-display-excerpt'  => 1,
            'medical-circle-fs-image-display-options'  => 'full-screen-bg',
            'medical-circle-feature-slider-text-align'  => 'text-center',

            /*footer options*/
            'medical-circle-footer-copyright'  => __( '&copy; All right reserved 2017', 'medical-circle' ),
            'medical-circle-footer-copyright-beside-option'  => 'footer-menu',
            'medical-circle-footer-full-width-display-options'  => 'hide',
            'medical-circle-footer-enable-social'  => 1,
            'medical-circle-footer-bi-number'  => 3,
            'medical-circle-enable-footer-power-text'  => 1,

            /*layout/design options*/
            'medical-circle-enable-animation'  => '',

            'medical-circle-single-sidebar-layout'  => 'right-sidebar',
            'medical-circle-front-page-sidebar-layout'  => 'right-sidebar',
            'medical-circle-archive-sidebar-layout'  => 'right-sidebar',

            'medical-circle-blog-archive-layout'  => 'left-image',
            'medical-circle-blog-archive-more-text'  => __( 'Read More', 'medical-circle' ),

            'medical-circle-primary-color'  => '#00a4ef',
            'medical-circle-header-top-bg-color'  => '#088edd',
            'medical-circle-footer-bg-color'  => '#3a3a3a',
            'medical-circle-footer-bottom-bg-color'  => '#2d2d2d',

            'medical-circle-hide-front-page-content'  => '',
            'medical-circle-hide-front-page-header'  => '',

            /*theme options*/
            'medical-circle-appointment-form-title'  => __( 'Make Appointment', 'medical-circle' ),
            'medical-circle-appointment-form-shortcode'  => '',
            'medical-circle-show-breadcrumb'  => 0,
            'medical-circle-search-placholder'  => __( 'Search', 'medical-circle' ),
            'medical-circle-social-data'  => '',

            /*woocommerce*/
            'medical-circle-wc-shop-archive-sidebar-layout'     => 'no-sidebar',
            'medical-circle-wc-product-column-number'           => 4,
            'medical-circle-wc-shop-archive-total-product'      => 16,
            'medical-circle-wc-single-product-sidebar-layout'   => 'no-sidebar',
        );

        return apply_filters( 'medical_circle_default_theme_options', $default_theme_options );
    }
endif;

/**
 *  Get theme options
 *
 * @since Medical Circle 1.0.0
 *
 * @param null
 * @return array medical_circle_theme_options
 *
 */
if ( !function_exists('medical_circle_get_theme_options') ) :
    function medical_circle_get_theme_options() {

        $medical_circle_default_theme_options = medical_circle_get_default_theme_options();
        $medical_circle_get_theme_options = get_theme_mod( 'medical_circle_theme_options');
        if( is_array( $medical_circle_get_theme_options )){
            return array_merge( $medical_circle_default_theme_options ,$medical_circle_get_theme_options );
        }
        else{
            return $medical_circle_default_theme_options;
        }
    }
endif;

$medical_circle_saved_theme_options = medical_circle_get_theme_options();
$GLOBALS['medical_circle_customizer_all_values'] = $medical_circle_saved_theme_options;

/**
 * Require init.
 */
require trailingslashit( get_template_directory() ).'acmethemes/init.php';