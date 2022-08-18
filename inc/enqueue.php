<?php

function bytebunch_scripts() {
	wp_enqueue_style( 'bb-style', get_stylesheet_uri(), false, '1.0.1' );
    wp_enqueue_style( 'bb-bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', false, '5.1.3' );
    wp_enqueue_style( 'bb-font-awesome-style', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css', false, '5.15.4' );

    wp_enqueue_script( 'bb-bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', false, '5.1.3', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bytebunch_scripts' );