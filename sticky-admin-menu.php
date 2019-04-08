<?php

/**
 * Plugin Name: Sticky Admin Menu
 * Plugin URI: @TODO
 * Description: Adds a sticky menu button, only for admins, in the site screen. Opens up an admin-only special menu.
 * Version: 0.5.0
 * Author: Khushi Ananda
 * Author URI: https://khushiananda.com
 * License: GPL2
 * Text Domain: sticky-admin-menu
 * Domain Path: /languages
 */

define( 'KHA_STICKY_ADMIN_MENU_VERSION', '0.5.0' );
define( 'KHA_STICKY_ADMIN_MENU_PATH', dirname(__FILE__) );
define( 'KHA_STICKY_ADMIN_MENU_MODULES_PATH', KHA_STICKY_ADMIN_MENU_PATH . '/modules' );
define( 'KHA_STICKY_ADMIN_MENU_URL', plugins_url( 'sticky-admin-menu', dirname(__FILE__) ) );

register_activation_hook( __FILE__, 'kha_sam_activate_plugin' );
register_deactivation_hook( __FILE__, 'kha_sam_deactivate_plugin' );

require_once KHA_STICKY_ADMIN_MENU_PATH . '/functions/setup.php';

require_once KHA_STICKY_ADMIN_MENU_PATH . '/functions/admin.php';
require_once KHA_STICKY_ADMIN_MENU_PATH . '/functions/enqueue.php';
require_once KHA_STICKY_ADMIN_MENU_PATH . '/functions/general.php';
require_once KHA_STICKY_ADMIN_MENU_PATH . '/functions/setup.php';

require_once KHA_STICKY_ADMIN_MENU_PATH . '/functions/lightbox.php';
require_once KHA_STICKY_ADMIN_MENU_PATH . '/functions/kha-utilities.php';