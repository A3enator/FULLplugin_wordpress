<?php
/**
 * Plugin Name: my first plugin
 * Description: this is my first plugin 
 * Version: 1.0.0
 * Author: amir mohammad barzgar
 * Author URI:https://github.com/A3enator
 * Requires PHP: 7.4
 * License: GPLv2 or later
 * Text Domain: kadence-starter-templates
 *
 */

function showMyname($name)
{
    echo "my name is {$name}" ;
}

showMyname("amirMohammadBarzgar");
