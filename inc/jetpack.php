<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Shared Memory Blog
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function shared_memory_blog_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'shared_memory_blog_jetpack_setup' );
