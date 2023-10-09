<?php

/*
 * Plugin Name: Lwn Translations
 * Description: About WP Translation
 * Version: 1.0.0
 * Author: Nawras Ali
 * Text Domain: lwn-translations
 * Domain Path: /languages
 * */

// Define Plugin Url
define('LWN_TRANSLATIONS', plugin_dir_path(__FILE__));

// Include Menu
require_once LWN_TRANSLATIONS . '/includes/lwn-menu.php';

// Load Translations
add_action('init', 'lwn_translations_load_languages_callback');
function lwn_translations_load_languages_callback()
{
  load_plugin_textdomain(
    'lwn-translations',
    false,
    dirname(plugin_basename(__FILE__)) . '/languages'
  );
}
