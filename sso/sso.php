<?php
/*
Plugin Name: WP-SSO 
Plugin URI: 
Description: Makes a sso between WordPress and laravel site.
Version: 1.1
Author:
Text Domain: wp-sso

/**
 * WP-SSO main plugin file.
 */


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'WP_SSO_PLUGIN_VERSION', '1.1' );

// plugin_dir_path() returns the trailing slash!
define( 'WP_SSO_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WP_SSO_PLUGIN_FILE', __FILE__ );

require( plugin_basename( '/db/database.php' ) );
require( plugin_basename( '/lib/auth.php' ) );
require( plugin_basename( '/lib/flag.php' ) );