<?php
/**
 * Plugin Name: Friendly Params
 * Plugin URI:  https://romulobrasil.com
 * Description: The plugin renders parameters in friendly URL format.
 * Author:      Rômulo Brasil
 * Author URI:  https://romulobrasil.com
 * License:     GPLv3
 *
 */

add_filter("query_vars", "fp_var");
add_action("init", "fp_do_rewrite");

function fp_var($vars) {
/** 
 * if it's more than one, just do it like this:  
 * Exemple: /events/year/month
 * • $vars = array("year", "month");
 */

  $vars[] = "var_name";
  return $vars;
}    

function fp_do_rewrite(){
/**
 * page-name: name of your page.
 * var_name: name of the variable you created in the fp_var function.
 * $matches: array of the variable var_name. 
 * If there is more than one variable, matches are accessed through the array key.
 * Example: /events/year/month
 * • add_rewrite_rule("^events/([^/]+)/([^/]+)/?$", "index.php?pagename=events&year=\$matches[1]&mouth=\$matches[2]", 'top');
 */
  add_rewrite_rule("^page-name/([^/]+)/?$", "index.php?pagename=page-name&var_name=\$matches[1]", 'top');
}