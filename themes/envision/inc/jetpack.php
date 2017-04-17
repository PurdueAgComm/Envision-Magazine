<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.me/
 *
 * @package Envision_Magazine
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function envision_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'	=> 'envision_infinite_scroll_render',
		'footer'	=> 'page',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Social Menus
	add_theme_support( 'jetpack-social-menu' );

	add_theme_support( 'featured-content', array(
		'filter'	 => 'envision_get_featured_posts',
		'max_posts'  => 20,
		'post_types' => array( 'post', 'page' ),
	) );
}
add_action( 'after_setup_theme', 'envision_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function envision_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'components/post/content', 'search' );
		else :
			get_template_part( 'components/post/content', get_post_format() );
		endif;
	}
}

function envision_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}

/**
 * Featured Posts
 */
function envision_has_multiple_featured_posts() {
	$featured_posts = apply_filters( 'envision_get_featured_posts', array() );
	if ( is_array( $featured_posts ) && 1 < count( $featured_posts ) ) {
		return true;
	}
	return false;
}
function envision_get_featured_posts() {
	return apply_filters( 'envision_get_featured_posts', false );
}
