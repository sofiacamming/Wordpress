<?php

/* Our custom post types */
function register_sociallinks_post_type () {
	register_post_type ('sociallinks', array(
		'label' => 'SocialLinks', 
		'public' => false,
		'hierarchical' => false,
		'supports' => array('title', 'thumbnail'),
		'show_ui' => true,
		/*'add_metabox' =>,*/
	));

}
add_action('init', 'register_sociallinks_post_type');


/* Menyer */
function projekttema_navmenu() {
	register_nav_menus(array(
		'main_menu' => 'Main menu',
		'footer_menu' => 'Footer menu'
	));
}
add_action('init', 'projekttema_navmenu');

?>
