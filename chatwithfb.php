<?php
/**
 * Plugin Name: FB Messenger
 * Description: Use this plugin for live chat via messenger.
 * Version: 1.0.0
 * License: GPL2
 * Text Domain: fb-messenger
 */

if ( !defined('ABSPATH') ) die( 'Sorry! This is not your place!' );


//----------------------------------------------------------------------
// Core constant defination
//----------------------------------------------------------------------
if (!defined('FB_MESSENGER_PLUGIN_VERSION')) define( 'FB_MESSENGER_PLUGIN_VERSION', '1.0.0' );
if (!defined('FB_MESSENGER_PLUGIN_BASENAME')) define( 'FB_MESSENGER_PLUGIN_BASENAME', plugin_basename(__FILE__) );
if (!defined('FB_MESSENGER_MINIMUM_WP_VERSION')) define( 'FB_MESSENGER_MINIMUM_WP_VERSION', '3.5' );
if (!defined('FB_MESSENGER_PLUGIN_DIR')) define( 'FB_MESSENGER_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
if (!defined('FB_MESSENGER_PLUGIN_URI')) define( 'FB_MESSENGER_PLUGIN_URI', plugins_url('', __FILE__) );
if (!defined('FB_MESSENGER_PLUGIN_TEXTDOMAIN')) define( 'FB_MESSENGER_PLUGIN_TEXTDOMAIN', 'fb-messenger' );


//----------------------------------------------------------------------
// Including Files
//----------------------------------------------------------------------

require_once FB_MESSENGER_PLUGIN_DIR . '/inc/submenu.php';
require_once FB_MESSENGER_PLUGIN_DIR . '/inc/shortcode.php';
