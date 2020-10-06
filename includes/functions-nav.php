<?php


/* ---------------------------------------- */
/* Setting up the navigation */

function bcRECV_admin_menu_recaptcha() {
    
    // add the sub menu page for the plugin
	// https://codex.wordpress.org/Adding_Administration_Menus
    add_submenu_page( 
        'options-general.php', 
        'Recaptcha', 
        'Recaptcha', 
        'manage_options', 
        'bcRECV_recaptcha', 
        'bcRECV_function_for_recaptcha'  // this should correspond with the function name
    ); 
}
add_action( 'admin_menu', 'bcRECV_admin_menu_recaptcha' );





?>
