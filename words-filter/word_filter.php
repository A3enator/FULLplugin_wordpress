<?php
  /**
 * Plugin Name: فیلتر سازی ساده برای کلمات  * Description: a simple plugin 
 * Version: 1.0.0
 * Description :یک فیلتر سازی ساده برای کلمات 
 * Author: amir mohammad barzgar
 * Author URI:https://github.com/A3enator
 * Requires PHP: 7.4
 * License: GPLv2 or later
 * Text Domain: kadence-starter-templates
 *
 */

define('WF_DIR',plugin_dir_path(__FILE__));
define('WF_URL',plugin_dir_url(__FILE__));
define('WF_INC',PLUGIN_DIR.'/inc/');

function wp_filter_words($content) 
{
 
  $word = 'addrs' ; 

  $replace = '<a target = "_blankk" href = "https://github.com/A3enator">github_address</a>' ;

  $content = preg_replace("/{$word}/" , $replace , $content) ;

return $content;
} 


add_filter('the_content','wp_filter_words');

