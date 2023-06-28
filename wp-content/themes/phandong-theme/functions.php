<?php

    function phandong_resgiter_style() {
        wp_enqueue_style( 'phandong-boostrap', get_template_directory_uri()."style.css", array(), '1.0', 'all' );
    }
    
    add_action( 'wp_enqueue_scripts', 'phandong_resgiter_style' );
    
?>

