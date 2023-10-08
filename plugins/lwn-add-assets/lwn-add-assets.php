<?php

/*
 * Plugin Name: Lwn Add Assets
 * Description: Adds JS/CSS files to WP
 * Version: 1.0.0
 * text-domain: lwn-add-assets
 * Author: Nawras Ali
 * */

// Plugin Path
define('LWN_ADD_ASSETS', plugin_dir_path(__FILE__));

// Add Scripts to admin panel
add_action('admin_enqueue_scripts', 'lwn_add_assets_add_scripts');
function lwn_add_assets_add_scripts()
{
  $script_url = plugins_url('admin/js/script.js', __FILE__);
  wp_enqueue_script(
    'lwn-assets-script', // handler
    $script_url, // script url
    [], // to do: explain more
    '1.0.0', //version
    true
  );
  // Enqueue styles
  $style_url = plugins_url('admin/css/style.css', __FILE__);
  wp_enqueue_style('lwn-assets-style', $style_url, [], '1.0.0', 'all');
}

// Add Scripts to admin panel
add_action('admin_enqueue_scripts', 'lwn_add_assets_add_jquery_scripts');
function lwn_add_assets_add_jquery_scripts()
{
  $script_url = plugins_url('admin/js/jquery-script.js', __FILE__);
  wp_enqueue_script(
    'lwn-assets-jquery-script', // handle
    $script_url, // script url
    ['jquery'], // to do: explain more
    '1.0.0', //version
    true // load before the closing body tag </body>
  );
}

// Add Scripts to frontend
add_action('wp_enqueue_scripts', 'lwn_add_assets_add_scripts_to_public');
function lwn_add_assets_add_scripts_to_public()
{
  $script_url = plugins_url('public/js/script.js', __FILE__);
  wp_enqueue_script(
    'lwn-assets-script-public', // handler
    $script_url, // script url
    [], // to do: explain more
    '1.0.0', //version
    false // load in the head tag
  );
  // Enqueue styles
  $style_url = plugins_url('public/css/style.css', __FILE__);
  wp_enqueue_style('lwn-assets-style-public', $style_url, [], '1.0.0', 'all');
}
// Add Bootstrap to the  frontend
add_action('wp_enqueue_scripts', 'lwn_add_assets_add_bootstrap_to_public');
function lwn_add_assets_add_bootstrap_to_public()
{
  // add bootstrap.js
  wp_enqueue_script(
    'bootstrap-js',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
    ['jquery'],
    '1.0.0',
    false
  );
  // add bootstrap.css
  wp_enqueue_style(
    'bootstrap-css',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
    [],
    '1.0.0',
    'all'
  );
}
