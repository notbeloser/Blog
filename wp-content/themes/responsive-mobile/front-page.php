<?php
/**
 * Front Page
 *
 * Template for pages
 *
 * @package      responsive_mobile
 * @license      license.txt
 * @copyright    2014 CyberChimps Inc
 * @since        0.0.1
 *
 * Please do not edit this file. This file is part of the responsive_mobile Framework and all modifications
 * should be made in a child theme.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * If front page is set to display the
 * blog posts index, include home.php;
 * otherwise, display static front page
 * content
 */
$responsive_mobile_options = responsive_mobile_get_options();

if ( 'posts' == get_option( 'show_on_front' ) && $responsive_mobile_options['front_page'] != 1 ) {

	get_template_part( 'home' );

} elseif ( 'page' == get_option( 'show_on_front' ) && $responsive_mobile_options['front_page'] != 1 ) {

	$template = get_post_meta( get_option( 'page_on_front' ), '_wp_page_template', true );
	$template = ( $template == 'default' ) ? 'index.php' : $template;
	locate_template( $template, true );

} else {

	get_header();

	get_template_part( 'template-parts/featured-area', apply_filters( 'responsive_mobile_filter_featured_area_layout', '' ) );

	get_sidebar( 'home' );

	get_footer();
}