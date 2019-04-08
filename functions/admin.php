<?php

/**
 * Add Submenu under the Tools meno in the Dashboard
 * 
 * @since 0.5.0
 */
add_action( 'admin_menu', 'kha_sam_add_submenu_page');
 
function kha_sam_add_submenu_page() { 
    add_submenu_page(
        'tools.php',
        'Sticky Admin Menu',
        'Sticky Admin Menu',
        'manage_options',
        'kha-sticky-admin-menu',
        'kha_sam_print_admin_interface' );
}

/**
 * Prints the interface for the submenu page
 * 
 * @since 0.5.0
 */
function kha_sam_print_admin_interface() {
    require_once KHA_STICKY_ADMIN_MENU_MODULES_PATH . '/admin.php';
}

/**
 * Save the settings
 * 
 * @since 0.5.0
 */
add_action( 'admin_init', 'kha_sam_save_settings' );

function kha_sam_save_settings() {

    if ( ! isset( $_POST['kha-sticky-admin-menu-save-settings-nonce'] ) ) {
        return;
    }

    if ( ! wp_verify_nonce( $_POST['kha-sticky-admin-menu-save-settings-nonce'], 'kha_sticky_admin_menu_save_settings' ) ) {
        echo 'Nonce could not verify';
        exit;
    }

    $lightbox_text = $_POST['lightbox-text'];
    $lightbox_text = stripslashes( wp_filter_post_kses( addslashes( $lightbox_text ) ) );

    update_option( 'kha_sticky_admin_menu_button_text', trim( $_POST['menu-button-text'] ) );
    update_option( 'kha_sticky_admin_menu_lightbox_title', trim( $_POST['lightbox-title'] ) );
    update_option( 'kha_sticky_admin_menu_lightbox_text', trim( $lightbox_text ) );
}