<?php
   /*
   Plugin Name: Backstretch Changer
   Plugin URI: none
   Description: a plugin to chnage backstretch images
   Version: 1.0
   Author: Brian Moniz
   Author URI: http://slcutahdesign.com
   License: GPL2
   */

function wpb_adding_scripts() {
 
wp_register_script('backstretch-changer', plugins_url('backstretch-changer.js', __FILE__), array('jquery'),'1.1', true);
 
wp_enqueue_script('backstretch-changer');
}
  
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  
   
?>