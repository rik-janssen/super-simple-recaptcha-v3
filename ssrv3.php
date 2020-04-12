<?php 
/**
* Plugin Name: Super Simple Recaptcha V3
* Plugin URI: https://betacore.tech/plugins/simple-analytics-tag-for-wordpress/
* Description: Got spammers? Add Recaptcha V3 in an instant! Works for any contact form. Uses Google Recaptcha V3. A how-to is also included to get you started.
* Version: 1.2.1
* Author: Rik Janssen (Beta)
* Author URI: https://betacore.tech/
* Text Domain: betarecaptcha
* Domain Path: /lang
**/

//betaanalytics

/* Includes */
include_once('inc/functions-nav.php'); // the wp-admin navigation
include_once('inc/functions-wp-admin.php'); // the wp-admin navigation
include_once('inc/functions-recaptcha.php'); // the meat of the plugin

/* make the plugin page row better */

function bcRECV_pl_links( $links ) {

	$links = array_merge( array(
		'<a href="' . esc_url( 'https://www.patreon.com/betadev' ) . '">' . __( 'Patreon', 'betarecaptcha' ) . '</a>'
	), $links );

    $links = array_merge( array(
		'<a href="' . esc_url( admin_url( '/options-general.php?page=bcRECV_recaptcha' ) ) . '">' . __( 'Setup', 'betarecaptcha' ) . '</a>'
    ), $links );
    
	return $links;
}

add_action( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'bcRECV_pl_links' );
?>
