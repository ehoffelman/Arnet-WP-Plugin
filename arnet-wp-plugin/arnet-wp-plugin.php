<?php
/*
Plugin Name: Arnet WP Plugin
Plugin URI: github.com/ehoffelman/arnet-wp-plugin
Description: nothing interesting
Version: 1.0
Author: Edward Hoffelman
Author URI: github.com/ehoffelman
License: LGPLv3.0
 */

// Exit if accessed directly
if( !defined('ABSPATH')) {
    exit;
}


// Load Scripts
require_once( plugin_dir_path(__FILE__) . '/includes/arnet-wp-plugin-scripts.php');

// Load Content
require_once( plugin_dir_path(__FILE__) . '/includes/arnet-wp-plugin-content.php');

// Load Settings
require_once( plugin_dir_path(__FILE__) . '/includes/arnet-wp-plugin-settings.php');
