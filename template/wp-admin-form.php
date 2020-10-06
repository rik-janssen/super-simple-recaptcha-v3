<div id="bcALG_wrapper">
	<div class="bcALG_head">
        <h1>Google Recaptcha V3</h1>
    </div>
    <div class="wrap">
    <form method="post" action="options.php">
        <?php settings_fields( 'bcRECV_recaptchasettings' ); ?>
        <?php do_settings_sections( 'bcRECV_recaptchasettings' ); ?>
        
        
        <table class="bcRECV_forms form-table">

        <tr valign="top">
                <th scope="row">
                    1. <?php _e("Recaptcha site:", 'betarecaptcha'); ?>
                </th>
                 <td>
                    <p><?php _e('Go to <strong><a href="https://www.google.com/recaptcha" target="_blank">Google.com/recaptcha</a></strong> and click on "admin console" in the top right corner.','betarecaptcha'); ?></p>
                </td>
            </tr> 
            <tr valign="top">
                <th scope="row">
                    2. <?php _e("Register your site on Google's Recaptcha platform", 'betarecaptcha'); ?>
                </th>
                 <td>
                    <p><?php _e('You have to add a new site by clicking the "+" (plus) symbol and then you will encounter the following fields:','betarecaptcha'); ?></p>
                    <ol class="bcALG_explan">
                        <li><?php _e('<strong>Label:</strong> <i>the name of your project. This will not be visible for end users so this can be anything.</i>','betarecaptcha'); ?></li>
                        <li><?php _e('<strong>reCAPTCHA type:</strong> <i>this is important. Select <strong>"reCAPTCHA V3 Verify requests with a score"</strong>!</i>','betarecaptcha'); ?></li>
                        <li><?php _e('<strong>Domains:</strong> <i>fill in the domainname you want to use the recaptcha on and click on the plus symbol.</i>','betarecaptcha'); ?></li>
                        <li><?php _e('<strong>Owner:</strong> <i>this can be your email address or just add other ones if that is the case.</i>','betarecaptcha'); ?></li>
                        <li><?php _e('<strong>Accept the reCAPTCHA Terms of Service:</strong> <i>check.</i>','betarecaptcha'); ?></li>
                        <li><?php _e('<strong>Send alerts to owners:</strong> <i>if you like to be kept up to date about spammers bounced then check this one.</i>','betarecaptcha'); ?></li>
                    </ol>
                    <p><strong><?php _e('And click on the submit button.','betarecaptcha'); ?></strong></p>
                </td>
            </tr> 
            <tr valign="top">
                <th scope="row">
                    3. <?php _e("The Recaptcha code", 'betarecaptcha'); ?>
                </th>
                 <td>
                 <p><?php _e('Then you will have to copy the <strong>"site key"</strong> (not the "secret key"!) and paste it in the field below.','betarecaptcha'); ?></p>
                    <?php 
                    $input_vars = array( 'name'=>'google_recaptcha',
                                         'selected'=>get_option('bcRECV_google_recaptcha')
                                       );

                    bcRECV_input_field($input_vars); ?>
                    <p><?php _e('..and hit the save changes button below. All done!','betarecaptcha'); ?></p>
                </td>
            </tr> 
            <tr valign="top">
                <th scope="row">
                    <?php _e("Hide Recaptcha Label", 'betarecaptcha'); ?>
                </th>
                 <td>
                    <?php 
                    $input_vars = array( 'name'=>'google_recaptcha_label',
                                         'selected'=>get_option('bcRECV_google_recaptcha_label'),
                                         'val'=>'1'
                                       );

                    bcRECV_check_input($input_vars, 'Hide the Recaptcha label on the frontend of your website.'); ?>
                </td>
            </tr>             

            

		</table>
	
        <?php submit_button(); ?>
     </form>
</div>
