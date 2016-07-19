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
