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


//add the function into the admin menu
add_action( 'admin_menu', 'register_tk_tutorials' );
function register_tk_tutorials()
{
    add_menu_page( 'Tutorials title', 'tutorials', 'manage_options', 'custompage', 'tk_trenton_tutorial_page', plugins_url( 'myplugin/images/icon.png' ), 100); 
}

//the actual function that creates the plugin page
function tk_trenton_tutorial_page(){
    echo "Admin Page Test";	
}

?>