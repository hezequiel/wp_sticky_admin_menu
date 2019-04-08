<?php

/**
 * Add the button a the top-left of the screen
 * 
 * @since 0.5.0
 */
add_action( 'wp_footer', 'kha_sam_add_button_to_screen' );

function kha_sam_add_button_to_screen() {

    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    include KHA_STICKY_ADMIN_MENU_MODULES_PATH . '/button/button.php';
}