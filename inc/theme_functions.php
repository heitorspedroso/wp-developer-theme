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
function wp_developer_theme_widget_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'Default' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'wp_developer_theme_widget_init' );
