<?php

/**
 * Main plugin file
 */

/**
 * Plugin Name:       JMWP: Dig tool
 * Author:            Jan Macario
 * Plugin URI:        https://github.com/janmacario/jmwp-plugin-tool-dig
 * Description:       Dig tool
 * Version:           0.9
 */


// Exit if this file is not called directly.
if (!defined('WPINC')) {
	die;
}

// Set up auto-updates
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
'https://github.com/janmacario/jmwp-plugin-tool-dig/',
__FILE__,
'jmwp-plugin-tool-dig'
);

// customization of the WordPress dashboard
include('php/custom-dashboard.php');
