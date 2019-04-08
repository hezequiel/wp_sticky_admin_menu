<?php
    $button_text = get_option( 'kha_sticky_admin_menu_button_text', 'Admin Menu' );
    $lightbox_title = get_option( 'kha_sticky_admin_menu_lightbox_title', 'Admin Menu' );
    $lightbox_text = get_option( 'kha_sticky_admin_menu_lightbox_text', '' );
?>

<div class="kha-sticky-admin-menu-settings">
    <h1>Sticky Admin Menu Settings</h1>

    <?php if ( isset( $_POST['kha-sticky-admin-menu-save-settings-nonce'] ) ) : ?>

        <div class="kha-sticky-admin-menu-save-success">
            Your changes have been saved!
        </div>

    <?php endif; ?>

    <form id="kha-sticky-admin-menu-admin-form" method="post" >

        <fieldset>
            <label for="menu-button-text" >Button Text</label><br/>
            <input type="text" id="menu-button-text"name="menu-button-text" value="<?php echo $button_text; ?>" />
        </fieldset>

        <fieldset>
            <label for="lightbox-title" >Menu Title</label><br/>
            <input type="text" id="lightbox-title"name="lightbox-title" value="<?php echo $lightbox_title; ?>" />
        </fieldset>

        <fieldset>
            <label for="lightbox-text" >Menu Text</label><br/>
            <textarea rows="7" id="lightbox-text" name="lightbox-text"><?php echo $lightbox_text; ?></textarea>
        </fieldset>

        <?php wp_nonce_field( 'kha_sticky_admin_menu_save_settings', 'kha-sticky-admin-menu-save-settings-nonce' ); ?>

        <button class="save-button">Save</button>

    </form>
</div>