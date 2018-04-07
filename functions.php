<?php
/**
 * WP Developer Theme
 *
 * @package WordPress
 * @subpackage wp-developer-theme
 * @since Wp developer Theme 1.0
 */

//DEFINE PATH
define( 'PATH', get_template_directory() . '/' );

// Define INC
define( 'INC', PATH . 'inc/' );

// Include the customizer functionality
require_once INC . 'customizer.php';

//Include the enqueues
require_once INC . 'enqueues.php';

//Include the theme_functions
require_once INC . 'theme_functions.php';

//Include the Menu twitter_bootstrap_nav_walker
require_once INC . 'twitter_bootstrap_nav_walker.php';

//Disable Editor of file for Security
define( 'DISALLOW_FILE_EDIT', true );

//Disable Print Wordpress Version for Security
remove_action('wp_head', 'wp_generator');

//Insert Generic Login and Password for Security
function generic_error_msgs()
{ 
   //insert how many msgs you want as an array item. it will be shown randomly 
	$custom_error_msgs = array(
		'Login e/ou senha inválido',
	);
  //get random array item to show
	return $custom_error_msgs[array_rand($custom_error_msgs)];
}
add_filter('login_errors', 'generic_error_msgs');
