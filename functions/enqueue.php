<?php

/**
 * Enqueue scripts and styles
 */
add_action( 'wp_enqueue_scripts', 'kha_sam_scripts_and_styles' );

function kha_sam_scripts_and_styles() {
    wp_enqueue_style( 'kha-sticky-admin-menu', KHA_STICKY_ADMIN_MENU_URL . '/resources/css/sticky-admin-menu.min.css?v=' . kha_get_version_from_timestamp( KHA_STICKY_ADMIN_MENU_PATH . '/resources/css/sticky-admin-menu.min.css' ) );
    wp_enqueue_script( 'kha-sticky-admin-menu', KHA_STICKY_ADMIN_MENU_URL . '/resources/js/sticky-admin-menu.js?v='. kha_get_version_from_timestamp( KHA_STICKY_ADMIN_MENU_PATH . '/resources/js/sticky-admin-menu.js' ), array( 'jquery' ), null, true );
    
    if ( defined( 'KHA_LIGHTBOX_ACTIVE' ) === false ) {
        wp_enqueue_style( 'kha-lightbox', KHA_STICKY_ADMIN_MENU_URL . '/resources/css/sticky-admin-menu-lightbox.min.css?v=' . kha_get_version_from_timestamp( KHA_STICKY_ADMIN_MENU_PATH . '/resources/css/sticky-admin-menu-lightbox.min.css' ) );
        wp_enqueue_script( 'kha-lightbox', KHA_STICKY_ADMIN_MENU_URL . '/resources/js/sticky-admin-menu-lightbox.js?v='. kha_get_version_from_timestamp( KHA_STICKY_ADMIN_MENU_PATH . '/resources/js/sticky-admin-menu-lightbox.js' ), array( 'jquery' ), null, true );
    }
}