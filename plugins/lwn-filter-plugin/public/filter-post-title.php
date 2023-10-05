<?php

add_filter('the_title', 'lwn_filter_plugin_edit_post_title_callback');

function lwn_filter_plugin_edit_post_title_callback($title)
{
  return $title . ' | lWN';
}
