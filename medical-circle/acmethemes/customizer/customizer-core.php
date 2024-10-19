<?php
/**
 * Header top display options of elements
 *
 * @since Medical Circle 1.0.0
 *
 * @param null
 * @return array $medical_circle_header_top_display_selection
 *
 */
if ( !function_exists('medical_circle_header_top_display_selection') ) :
	function medical_circle_header_top_display_selection() {
		$medical_circle_header_top_display_selection =  array(
			'hide' => __( 'Hide', 'medical-circle' ),
			'left' => __( 'on Top Left', 'medical-circle' ),
			'right' => __( 'on Top Right', 'medical-circle' )
		);
		return apply_filters( 'medical_circle_header_top_display_selection', $medical_circle_header_top_display_selection );
	}
endif;

/**
 * Header Basic Info display Options
 *
 * @since Medical Circle 1.0.0
 *
 * @param null
 * @return array $medical_circle_header_bi_display_options
 *
 */
if ( !function_exists('medical_circle_header_bi_display_options') ) :
	function medical_circle_header_bi_display_options() {
		$medical_circle_header_bi_display_options =  array(
			'hide' => __( 'Hide', 'medical-circle' ),
			'before-menu' => __( 'Before Menu', 'medical-circle' ),
			'after-menu' => __( 'After Menu', 'medical-circle' )
		);
		return apply_filters( 'medical_circle_header_bi_display_options', $medical_circle_header_bi_display_options );
	}
endif;

/**
 * Header Basic Info number
 *
 * @since Medical Circle 1.0.0
 *
 * @param null
 * @return array $medical_circle_header_bi_number
 *
 */
if ( !function_exists('medical_circle_header_bi_number') ) :
	function medical_circle_header_bi_number() {
		$medical_circle_header_bi_number =  array(
			1 => __( '1', 'medical-circle' ),
			2 => __( '2', 'medical-circle' ),
			3 => __( '3', 'medical-circle' ),
			4 => __( '4', 'medical-circle' ),
		);
		return apply_filters( 'medical_circle_header_bi_number', $medical_circle_header_bi_number );
	}
endif;

/**
 * Footer full width options
 *
 * @since Medical Circle 1.0.0
 *
 * @param null
 * @return array $medical_circle_footer_full_width_display_options
 *
 */
if ( !function_exists('medical_circle_footer_full_width_display_options') ) :
	function medical_circle_footer_full_width_display_options() {
		$medical_circle_footer_full_width_display_options =  array(
			'hide' => __( 'Hide', 'medical-circle' ),
			'top' => __( 'Top Footer', 'medical-circle' ),
			'bottom' => __( 'Bottom Footer', 'medical-circle' )
		);
		return apply_filters( 'medical_circle_footer_full_width_display_options', $medical_circle_footer_full_width_display_options );
	}
endif;

/**
 * Footer copyright beside options
 *
 * @since Medical Circle 1.0.0
 *
 * @param null
 * @return array $medical_circle_footer_copyright_beside_option
 *
 */
if ( !function_exists('medical_circle_footer_copyright_beside_option') ) :
	function medical_circle_footer_copyright_beside_option() {
		$medical_circle_footer_copyright_beside_option =  array(
			'hide' => __( 'Hide', 'medical-circle' ),
			'social' => __( 'Social Links', 'medical-circle' ),
			'footer-menu' => __( 'Footer Menu', 'medical-circle' )
		);
		return apply_filters( 'medical_circle_footer_copyright_beside_option', $medical_circle_footer_copyright_beside_option );
	}
endif;

/**
 * medical_circle_menu_right_button_link_options
 *
 * @since Medical Circle 1.0.0
 *
 * @param null
 * @return array $medical_circle_menu_right_button_link_options
 *
 */
if ( !function_exists('medical_circle_menu_right_button_link_options') ) :
	function medical_circle_menu_right_button_link_options() {
		$medical_circle_menu_right_button_link_options =  array(
			'disable' => __( 'Disable', 'medical-circle' ),
			'appointment' => __( 'Open Appointment Form', 'medical-circle' ),
			'link' => __( 'One Link', 'medical-circle' )
		);
		return apply_filters( 'medical_circle_menu_right_button_link_options', $medical_circle_menu_right_button_link_options );
	}
endif;

/**
 * Feature slider selection
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return array $medical_circle_slider_text_align
 *
 */
if ( !function_exists('medical_circle_slider_text_align') ) :
	function medical_circle_slider_text_align() {
		$medical_circle_slider_text_align =  array(
			'alternate'   => __( 'Alternate', 'medical-circle' ),
			'text-left'   => __( 'Left', 'medical-circle' ),
			'text-right'  => __( 'Right', 'medical-circle' ),
			'text-center' => __( 'Center', 'medical-circle' )
		);
		return apply_filters( 'medical_circle_slider_text_align', $medical_circle_slider_text_align );
	}
endif;

/**
 * Featured Slider Image Options
 *
 * @since Medical Circle 1.0.0
 *
 * @param null
 * @return array $medical_circle_fs_image_display_options
 *
 */
if ( !function_exists('medical_circle_fs_image_display_options') ) :
    function medical_circle_fs_image_display_options() {
        $medical_circle_fs_image_display_options =  array(
            'full-screen-bg' => __( 'Full Screen Background', 'medical-circle' ),
            'responsive-img' => __( 'Responsive Image', 'medical-circle' )
        );
        return apply_filters( 'medical_circle_fs_image_display_options', $medical_circle_fs_image_display_options );
    }
endif;

/**
 * Sidebar layout options
 *
 * @since Medical Circle 1.0.0
 *
 * @param null
 * @return array $medical_circle_sidebar_layout
 *
 */
if ( !function_exists('medical_circle_sidebar_layout') ) :
    function medical_circle_sidebar_layout() {
        $medical_circle_sidebar_layout =  array(
            'right-sidebar'=> __( 'Right Sidebar', 'medical-circle' ),
            'left-sidebar'=> __( 'Left Sidebar' , 'medical-circle' ),
            'both-sidebar'  => __( 'Both Sidebar' , 'medical-circle' ),
            'middle-col'  => __( 'Middle Column' , 'medical-circle' ),
            'no-sidebar'=> __( 'No Sidebar', 'medical-circle' )
        );
        return apply_filters( 'medical_circle_sidebar_layout', $medical_circle_sidebar_layout );
    }
endif;

/**
 * Blog layout options
 *
 * @since Medical Circle 1.0.0
 *
 * @param null
 * @return array $medical_circle_blog_layout
 *
 */
if ( !function_exists('medical_circle_blog_layout') ) :
    function medical_circle_blog_layout() {
        $medical_circle_blog_layout =  array(
            'left-image' => __( 'Show Image', 'medical-circle' ),
            'no-image' => __( 'No Image', 'medical-circle' )
        );
        return apply_filters( 'medical_circle_blog_layout', $medical_circle_blog_layout );
    }
endif;