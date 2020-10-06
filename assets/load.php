<?php
// Includes
include_once( plugin_dir_path( __DIR__ ).'includes/functions-nav.php'); // the wp-admin navigation
include_once( plugin_dir_path( __DIR__ ).'includes/functions-wp-admin.php'); // the wp-admin navigation
include_once( plugin_dir_path( __DIR__ ).'includes/functions-recaptcha.php'); // the meat of the plugin

// Classes
include_once( plugin_dir_path( __DIR__ ).'classes/register.class.php'); // the meat of the plugin

// run all the hooks
include_once('hooks.php'); // the meat of the plugin
