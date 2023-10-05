<?php

add_filter('the_content', 'lwn_filter_plugin_change_content_callback');

/* To do: Link stylesheet to the public/frontend */
function lwn_filter_plugin_change_content_callback($content)
{
  $html = "<div style='background: red; color: white' > ";
  $html .= 'content added';
  $html .= '</div>';
  return $html . $content;
}

add_filter('the_content', 'lwn_filter_plugin_change_content_callback2');

/* To do: Link stylesheet to the public/frontend */
function lwn_filter_plugin_change_content_callback2($content)
{
  $html = "<div style='background: blue; color: white' > ";
  $html .= 'content footer';
  $html .= '</div>';
  return $content . $html;
}
