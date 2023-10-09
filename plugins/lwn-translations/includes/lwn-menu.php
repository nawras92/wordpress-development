<?php

add_action('admin_menu', 'lwn_translations_add_admin_menu_callback');

function lwn_translations_add_admin_menu_callback()
{
  add_menu_page(
    __('Custom Admin Menu Page', 'lwn-translations'), // Page title
    __('My custom plugin', 'lwn-translations'), // Menu title
    'manage_options', // manage-options
    'lwn-translations-my-custom-plugin', // menu slug
    'lwn_translations_my_custom_plugin' // menu page callback
  );
}
function lwn_translations_my_custom_plugin()
{
  ob_start(); ?>

  <div class="wrap">
    <h2><?php _e('Custom Menu Page', 'lwn-translations'); ?></h2>
    <p><?php esc_html_e('The page content', 'lwn-translations'); ?> </p>
  </div>

  <?php
  $output = ob_get_clean();
  echo $output;
}
