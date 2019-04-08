<?php

/**
 * Return a version number based on the last date the file was changed
 *
 * @param string $filepath The full path (not the URL) to the file
 * 
 * @return string
 */
if ( ! function_exists( 'kha_get_version_from_timestamp' ) ) {

    function kha_get_version_from_timestamp( $filepath ) {

        /**
         * @var string $version
         */
        $version = '';
    
        if ( file_exists( $filepath ) ) {
    
            $filename = basename( $filepath );
            $version = date( "ymd-Gis", filemtime( $filepath ) );
    
        }
    
        return $version;
    }

}

/**
 * Debug code for admins
 * 
 * @since 0.5.0
 */
if ( ! function_exists( 'kha_debug' ) ) {
    
    function kha_debug( $data ) {
        
        if ( ! current_user_can( 'manage_options' ) ) {
            return;
        }

        echo '<pre>';
        var_dump( $data );
        echo '</pre>';
    }

}