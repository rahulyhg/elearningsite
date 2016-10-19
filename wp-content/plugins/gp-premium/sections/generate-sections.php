<?php
/*
Add-on Name: Generate Sections
Author: Thomas Usborne
Author URI: http://edge22.com
*/

// Define the version
if ( ! defined( 'GENERATE_SECTIONS_VERSION' ) )
	define( 'GENERATE_SECTIONS_VERSION', GP_PREMIUM_VERSION );
	
// Include assets unique to this addon
require plugin_dir_path( __FILE__ ) . 'inc/assets.php';

// Include functions identical between standalone addon and GP Premium
require plugin_dir_path( __FILE__ ) . 'functions/generate-sections.php';