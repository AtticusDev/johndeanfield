<?php
/**
 * Enqueue scripts and styles.
 */
function johndeanfield_scripts() {
	wp_enqueue_style( 'johndeanfield-style', get_stylesheet_directory_uri() . '/style.min.css', array(), '1.0.0' );
	wp_enqueue_script( 'johndeanfield-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), ' ', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'johndeanfield_scripts' );