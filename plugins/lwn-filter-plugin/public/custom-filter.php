<?php

add_filter(
  'lwn_filter_plugin_custom_filter',
  'lwn_filter_plugin_custom_filter_callback'
);

function lwn_filter_plugin_custom_filter_callback($data)
{
  $edited_data = 'The data has been edited: ' . $data;
  return $edited_data;
}

$result = apply_filters('lwn_filter_plugin_custom_filter', 'my original data');
/* echo $result; */
