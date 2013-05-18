<?php
/*
Plugin Name: Trenton-tutorial
Plugin URI: http://tovech.com
Description: A brief description of the Plugin.
Version: 1.0
Author: Trenton Kennedy
Author URI: http://tovech.com
License: GPL2
*/

add_action( 'admin_menu', 'register_my_custom_menu_page' );

function register_my_custom_menu_page(){
    add_menu_page( 'custom menu title', 'custom menu', 'manage_options', 'custompage', 'my_custom_menu_page', plugins_url( 'myplugin/images/icon.png' ), 6 ); 
}

function my_custom_menu_page(){
    echo "Admin Page Test";	
}

?>