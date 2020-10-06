<?php 

/* ---------------------------------------- */
/* The Recaptcha code in the head hook      */

function bcRECV_tracking_head(){
     $the_google_recaptcha = substr(get_option( 'bcRECV_google_recaptcha' ), 0,100);
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

    <?php if (get_option( 'bcRECV_google_recaptcha_label' )==1){?>
    <style>
        #rc-anchor-container, .rc-anchor, .grecaptcha-badge{
            z-index: -999999 !important;
            position: fixed !important;
            width: 0px !important;
            height: 0px !important;
            opacity: 0;
        }
    </style>
    <?php } ?>
    <?php
    }
}

add_action( 'wp_head', 'bcRECV_tracking_head' , 10);




?>
