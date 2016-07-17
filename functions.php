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
