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

    $lightbox_title = get_option( 'kha_sticky_admin_menu_lightbox_title', 'Admin Menu' );
    $lightbox_text = wpautop( get_option( 'kha_sticky_admin_menu_lightbox_text', '' ) );

    $lightbox_text = "<h2>{$lightbox_title}</h2>\n{$lightbox_text}";

    kha_sam_lightbox( $lightbox_text, 'kha-sticky-admin-menu' );
}