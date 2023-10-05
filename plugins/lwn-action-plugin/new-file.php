<?php

add_action(
  'lwn_action_plugin_say_hello',
  'lwn_action_plugin_say_hello_callback'
);
function lwn_action_plugin_say_hello_callback()
{
  echo 'hello';
}

do_action('lwn_action_plugin_say_hello');
