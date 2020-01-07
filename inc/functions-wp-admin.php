<?php 
/* ---------------------------------------- */
/* adding the stylesheet to WP-admin */

function bcRECV_css_admin() {
  wp_enqueue_style('beta-recaptcha-admin', plugin_dir_url( __DIR__ ).'css/admin.css');
}
add_action('admin_enqueue_scripts', 'bcRECV_css_admin');



/* ---------------------------------------- */
/* the WP-admin page with the settings */

function bcRECV_function_for_recaptcha(){
	
	// this is the page itself that you will find under the wp-admin
	// settings > Offline button
	include plugin_dir_path( __DIR__ ).'template/wp-admin-form.php';
	
}


/* ---------------------------------------- */
/* Add form data to the database after	    */
/* sanitising the input.	                */ 

function bcRECV_settings_register() {
	
	// this corresponds to some information added at the top of the form
	$setting_name = 'bcRECV_recaptchasettings';
	
	// sanitize settings
    $args_html = array(
            'type' => 'string', 
            'sanitize_callback' => 'wp_kses_post',
            'default' => NULL,
            );	
	
    $args_int = 'intval';
	
    $args_text = array(
            'type' => 'string', 
            'sanitize_callback' => 'sanitize_text_field',
            'default' => NULL,
            );
	
	// adding the information to the database as options
    register_setting( $setting_name, 'bcRECV_google_recaptcha', $args_text ); // textarea

	
}

add_action( 'admin_init', 'bcRECV_settings_register' );


/* ---------------------------------------- */
/* ---------------------------------------- */
/* input forms and functions                */


function bcRECV_input_field($arg){
?>
<div class="bcRECV_input_wrapper">
	<input type="text"
		   name="bcRECV_<?php echo $arg['name']; ?>"
		   value="<?php echo $arg['selected']; ?>"
		   class="regular-text"
		   />
</div>
<?php	
}



?>