<?php

/* Our custom post types */
function register_contact_post_type () {
	register_post_type ('contact', array(
		'label' => 'Contact', 
		'public' => true,
		'hierarchical' => false,
		'has_archive' => false,
		'supports' => array('title', 'thumbnail')
	));

}
add_action('init', 'register_contact_post_type');


/* Menyer */
function projekttema_navmenu() {
	register_nav_menus(array(
		'main_menu' => 'Main menu',
		'footer_menu' => 'Footer menu'
	));
}
add_action('init', 'projekttema_navmenu');


?>
