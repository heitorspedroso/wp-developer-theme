<?php
//Register Menu
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'primary' ) );
}
add_action( 'after_setup_theme', 'register_my_menu' );

//Remove Admin Bar in your theme
show_admin_bar(false);

//Add Theme Support Thumbnail
add_theme_support( 'post-thumbnails' );

//Register Widget Default
function wp_developer_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wp-developer-theme' ),
		'id'            => 'sidebar-1',
		'description'   => __( ''),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wp_developer_theme_widgets_init' );
