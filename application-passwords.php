<?php
/**
 * Plugin Name: Application Passwords By Ts
 * Plugin URI: https://github.com/kuboryoya/application-passwords
 * Description: A prototype framework to add application passwords to core.
 * Author: Kubo
 * Version: 0.1-dev
 * Author URI: 
 */

define( 'APPLICATION_PASSWORDS_VERSION', '0.1-dev' );

/**
 * Include the application passwords system.
 */
require_once( dirname( __FILE__ ) . '/class.application-passwords.php' );
require_once( dirname( __FILE__ ) . '/application-passwords-menu.php' );
Application_Passwords::add_hooks();
