<?php

/*
 * Plugin Name: LWN Action Plugin
 * Description: learn about actions and filters
 * Version: 1.0.0
 * Text Domain: lwn-action-plugin
 * Author: Nawras Ali
 *
 * */

// Define Plugin URL
define('LWN_ACTION_PLUGIN', plugin_dir_path(__FILE__));

// Include a new file
<<<<<<< HEAD
/* require_once LWN_ACTION_PLUGIN . 'new-file.php'; */
/* require_once LWN_ACTION_PLUGIN . 'new-file-2.php'; */
=======
require_once LWN_ACTION_PLUGIN . 'new-file.php';
require_once LWN_ACTION_PLUGIN . 'new-file-2.php';
>>>>>>> 7d17fd7d099f9ecac2c10fe6c8b3e050dc4d7626

add_action('wp_footer', 'lwn_action_plugin_say_hello_in_footer_callback');
function lwn_action_plugin_say_hello_in_footer_callback()
{
  echo '<p style="color: red;">';
  echo 'helllo';
  echo '</p>';
}

add_action('wp_footer', 'lwn_action_plugin_say_hi_in_footer_callback');
function lwn_action_plugin_say_hi_in_footer_callback()
{
  echo '<p style="color: blue;">';
  echo 'hi';
  echo '</p>';
}

/* 1- You can create your own actions */
/* 2- You can use wp actions */
/* 3- You can use actions whenever you want */
/* 4- Actions do not return anything */
