<?php
/**
 * Plugin Name: Simple Plugin
 * Description: a simple plugin 
 * Version: 1.0.0
 * Author: amir mohammad barzgar
 * Author URI:https://github.com/A3enator
 * Requires PHP: 7.4
 * License: GPLv2 or later
 * Text Domain: kadence-starter-templates
 *
 */
define('PLUGIN_DIR',plugin_dir_path(__FILE__));
define('PLUGIN_URL',plugin_dir_url(__FILE__));
define('PLUGIN_INC',PLUGIN_DIR.'/inc/');

function simple_plugin_activation() 
{
   
}
function simple_plugin_deactivation() 
{
    
}
register_activation_hook(__FILE__ ,"simple_plugin_activation") ;
register_deactivation_hook(__FILE__ ,"simple_plugin_deactivation") ;

if (is_admin())
{
    include PLUGIN_INC.'admin\menus.php';
}
else
{
    include PLUGIN_INC.'user\menus1.php';
}

include PLUGIN_INC.'common\public.php';

