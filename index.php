<?php
/**
 * Plugin Name:       MarWeb Plugin
 * Plugin URI:        https://marweb.ro
 * Description:       A plugin for adding a portfolio post type and marweb logo animation block.
 * Version:           1.0.1
 * Requires at least: 5.9
 * Requires PHP:      7.2
 * Author:            Alexandru Marcu
 * Author URI:        https://marweb.ro
 * Text Domain:       mw-cpt

 */

if(!function_exists('add_action')) {
  echo 'Seems like you stumbled here by accident. 😛';
  exit;
}


// Setup
define('MW_PLUGIN_DIR', plugin_dir_path(__FILE__));
define ("TEXT_DOMAIN", "mw-cpt");



// Includes
$rootFiles = glob(MW_PLUGIN_DIR . 'includes/*.php');
$subdirectoryFiles = glob(MW_PLUGIN_DIR . 'includes/**/*.php');
$allFiles = array_merge($rootFiles, $subdirectoryFiles);

foreach($allFiles as $fileName) {
  include_once($fileName);
} 


//hooks
register_activation_hook(__FILE__, 'MW_Activate_Plugin');
add_action('init', "MW_portfolio_post_type");

add_action('portfolio_add_form_fields', "MW_portfolio_add_form_fields");