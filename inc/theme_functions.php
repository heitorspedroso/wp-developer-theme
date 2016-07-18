<?php
//Register Menu
function register_my_menu() {
  register_nav_menu ( 'header-menu', __ ( 'Menu Header'));
}

//Remove Admin Bar in your theme
show_admin_bar(false);

//Add Theme Support Thumbnail
add_theme_support( 'post-thumbnails' );
