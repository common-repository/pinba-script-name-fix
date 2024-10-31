<?php
/**
 * @package Pinba_Script_Name_Fix
 * @version 0.1
 */
/*
Plugin Name: Pinba Script Name Fix
Plugin URI: http://wordpress.org/plugins/pinba-script-name-fix/
Description: By default Pinba PHP Extension sends value $_SERVER["SCRIPT_NAME"] in script_name. Sometimes it is not informative, for example when web application has one entry point. This plugin sends $_SERVER['REQUEST_URI'] instead.
Author: Frank MacDonald (Waracle)
Version: 0.1
Author URI: http://www.waracle.net
*/

add_action( 'init', 'fix_pinda_script_name' );

function fix_pinda_script_name() {
  
	if (function_exists('pinba_script_name_set')) {
		pinba_script_name_set($_SERVER['REQUEST_URI']);
	}

}