<?php

/**
 * php file to handle WordPress dashboard customizations
 */


/**
 * Adds meta boxes to WordPress admin dashboard
 *
 */
add_action('wp_dashboard_setup', 'jmwp_digtool_custom_dashboard_meta_boxes');
function jmwp_digtool_custom_dashboard_meta_boxes() {

  // Declare global variables
  global $wp_meta_boxes;

  /* Add meta box */
  add_meta_box("jmwp_plugin_dig_tool", "Dig Tool", "jmwp_plugin_dig_tool", "dashboard","normal");

}

/**
 * Provides content for the dashboard 'links' meta box
 */
function jmwp_plugin_dig_tool() {

  //Output content
  echo '<form target="_blank" method="get" action="https://www.digwebinterface.com/">';
  echo '<input type="hidden" name="type" value="" />';
  echo '<input type="hidden" name="ns" value="resolver" />';
  echo '<input type="hidden" name="useresolver" value="8.8.4.4" />';
  echo '<input type="hidden" name="nameservers" value="" />';

  echo '<input type="text" name="hostnames" value="" />';

  echo '<input type="submit" name="submit" value="Dig" />';

  echo '</form>';

}
