<?php
/**
 * @package WordPress
 * @subpackage PG2C
 */

automatic_feed_links();

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu( 'top_nav', 'Top Navigation' );
}

if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu( 'footer', 'Footer' );
}


?>