<?php

/**
 * Plugin Name: Notice System
 * Plugin URI:  #
 * Author:      Shah jalal
 * Author URI:  http://github.com/shahjalal132
 * Description: Notice system
 * Version:     1.0.0
 * License:     GPL-2.0+
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: notice-system
 */

defined( "ABSPATH" ) || exit( "Direct Access Not Allowed" );

// Define plugin path
if ( !defined( 'NOTICE_SYSTEM_PLUGIN_PATH' ) ) {
    define( 'NOTICE_SYSTEM_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
}

// Define plugin url
if ( !defined( 'NOTICE_SYSTEM_PLUGIN_URL' ) ) {
    define( 'NOTICE_SYSTEM_PLUGIN_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
}

// Define plugin path
if ( !defined( 'PLUGIN_BASENAME' ) ) {
    define( 'PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
}

// include files
require_once NOTICE_SYSTEM_PLUGIN_PATH . '/inc/notices.php';
require_once NOTICE_SYSTEM_PLUGIN_PATH . '/inc/enqueue-assets.php';
require_once NOTICE_SYSTEM_PLUGIN_PATH . '/inc/plugin-actions.php';