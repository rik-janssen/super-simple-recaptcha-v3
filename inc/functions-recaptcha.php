<?php 

/* ---------------------------------------- */
/* The Recaptcha code in the head hook      */

function bcRECV_tracking_head(){
     $the_google_recaptcha = substr(get_option( 'bcRECV_google_recaptcha' ), 0,16);
     if($the_google_recaptcha!=''){
    ?>
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $the_google_recaptcha; ?>"></script>
    <script>
    grecaptcha.ready(function() {
    grecaptcha.execute('<?php echo $the_google_recaptcha; ?>', {action: 'homepage'}).then(function(token) {
    ...
    });
    });
    </script>
    <?php
    }
}

add_action( 'wp_head', 'bcRECV_tracking_head' , 10);




?>