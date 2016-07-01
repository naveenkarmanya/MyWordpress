<?php

/**
 * Plugin Name:custom plugin
 * Plugin URI: https://wordpress.org/themes/design/plugins
 *  Description:This plugin is used for custom type and custom fields creation
 * Author :Naveen
 * Author URI:https://wordpress.org/
 * Version:0.0.1
 * Licence:GPLV2

 */
//Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
require_once(plugin_dir_path(__FILE__) . 'custom-plugin-content.php');
require_once(plugin_dir_path(__FILE__) . 'custom-render-admin.php');
require_once(plugin_dir_path(__FILE__) . 'custom-meta-box-new.php');
require_once(plugin_dir_path(__FILE__) . 'custom-create-shortcode.php');
require_once(plugin_dir_path(__FILE__) . 'custom-action-hooks-sample.php');
