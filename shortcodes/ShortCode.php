<?php
  /**
 * Plugin Name: short codes  
 * * Description: short codes
 * Version: 1.0.0
 * Description : کد های کوتاه 
 * Author: amir mohammad barzgar
 * Author URI:https://github.com/A3enator
 * Requires PHP: 7.4
 * License: GPLv2 or later
 * Text Domain: kadence-starter-templates
 *
 */

 // login = function login(){}
 // for use shortcodes ==> [login]

 function login_shortcode($attributes)
 {
  var_dump($attributes); 
     return '<h1>wordpress login page</h1>';
 }

 add_shortcode("login","login_shortcode");

 //$result =  do_shortcode("some text in wordpress [login] some other text in wordpress ");