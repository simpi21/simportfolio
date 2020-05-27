<?php

use StackonetSupportTicket\Models\TicketCategory;

function stackonet_enqueue_script() {
	$theme   = wp_get_theme( 'stackonet' );
	$version = $theme['Version'];
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		$version = $version . '-' . time();
	}

	wp_enqueue_style( 'scackonet-frontend', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/css/frontend.css', [], $version );
	wp_enqueue_script( 'tinymce', includes_url( 'js/tinymce/tinymce.min.js' ), [], $version, true );
	wp_enqueue_script( 'scackonet', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/frontend.js',
		[ 'tinymce','jquery' ], $version, true );
	//wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/bootstrap/js/bootstrap.min.js', array('jquery'), NULL, true);



	wp_localize_script( 'scackonet', '_stackonet', [
		'theme_url'  => get_stylesheet_directory_uri(),
		'assets_url' => get_stylesheet_directory_uri() . '/assets',

	] );

	$user       = wp_get_current_user();
	$categories = [];
	if ( class_exists( TicketCategory::class ) ) {
		$cats = TicketCategory::get_all();
		foreach ( $cats as $cat ) {
			$categories[] = [
				'id'   => $cat->get( 'term_id' ),
				'name' => $cat->get( 'name' ),
			];
		}
	}

	wp_localize_script( 'scackonet', 'CustomerSupportTickets', [
		'categories'      => $categories,
		'customer_name'   => ! empty( $user->display_name ) ? $user->display_name : '',
		'customer_email'  => ! empty( $user->user_email ) ? $user->user_email : '',
		'supportRestRoot' => esc_url_raw( rest_url( 'stackonet-support-ticket/v1' ) ),
	] );
}

add_action( 'wp_enqueue_scripts', 'stackonet_enqueue_script' );
