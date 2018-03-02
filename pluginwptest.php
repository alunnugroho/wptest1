<?php
/*
Plugin Name: Contact us
Plugin URI: https://github.com/alunnugroho/wptest1
Description: -.
Version: 1.0
Author: Alun Nugroho
Author URI: http://softwareseni.com/
License: GPLv2 or later
Text Domain: pluginwptest
*/

include 'plugin_install.php';
include 'includes/Shortcodes.php';
include 'includes/Admin.php';

register_activation_hook(__FILE__, 'db_install');
