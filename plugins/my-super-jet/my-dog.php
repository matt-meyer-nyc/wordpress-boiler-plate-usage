<?php
/**
 * Plugin name: My fluffy cat
 */

add_action( '_admin_menu', 'mfc_plugin_menu' );

$page_title = 'My cat';
$menu_title = 'My cat';
$capability = 'manage_options';
$menu_slug  = 'my-cat';
$function   = 'mfc_page_display';
$icon_url   = 'dashicons-heart';


function mfc_plugin_menu() {

	add_menu_page(
		'My cat',
		'My cat',
		'manage_options',
		'my-cat',
		'mfc_page_display',
		'dashicons-heart'
	);

}

function mfc_page_display() {
	echo 'My cats rock';
};

add_filter( 'the_content', 'mfc_content_filter' );

function mfc_content_filter( $content ) {
	$content = 'My fluffy cat says: ' . $content;
	return $content;
}

add_filter( 'body_class', 'mfc_add_body_class' );

function mfc_add_body_class( $body_classes ) {

	$body_classes[] = 'my-fluffy-cat-class';
	return $body_classes;
}

