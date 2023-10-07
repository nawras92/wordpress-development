<?php

/*
 * Plugin Name: LWN Shortcodes
 * Description: Create simple shortcodes
 * Version: 1.0.0
 * text-domain: lwn-shortcodes
 * Author: Nawras Ali
 * */

// Define Plugin Path
define('LWN_SHORTCODES', plugin_dir_path(__FILE__));

// Include Files
require_once LWN_SHORTCODES . 'public/say-hello-shortcode.php';
require_once LWN_SHORTCODES . 'public/button-shortcode.php';
require_once LWN_SHORTCODES . 'public/do-shortcode.php';
