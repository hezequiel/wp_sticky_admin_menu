<?php
/**
 * Lightbox-related functions
 * 
 * NOTE: This will only be used if khushi-ananda-lightbox plugin is not active.
 * 
 * @since 0.5.0
 */

/**
 * Creates a lightbox
 * 
 * @param string $text The text to display in the lightbox
 * @param string $lightbox_id The ID for the lightbox
 * 
 * @return string
 * 
 * @since 0.5.0
 */
function kha_sam_create_lightbox( $text, $lightbox_id = 'kha-lightbox' ) {

    $lightbox = '';

    // If the real, updatable, version of the lightbox plugin exists
    if ( function_exists( 'kha_create_lightbox' ) ) {
        $lightbox = kha_create_lightbox( $text, $lightbox_id );
    }
    // Otherwise, fall back to default
    else {
        $lightbox = <<<LIGHTBOX
            <div id="$lightbox_id" class="kha-lightbox-wrap">
                <div class="kha-lightbox">
                    <div class="kha-lightbox-close kha-lightbox-close-mech"></div>
                    $text
                </div>
            </div>
LIGHTBOX;
    }

    return $lightbox;
}

/**
 * Creates and outputs a lightbox
 * 
 * @see kha_create_lightbox()
 * 
 * @since 0.5.0
 */
function kha_sam_lightbox( $text, $lightbox_id = 'kha-lightbox' ) {
    echo kha_sam_create_lightbox( $text, $lightbox_id );
}