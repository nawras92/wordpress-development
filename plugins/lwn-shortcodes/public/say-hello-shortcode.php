<?php

add_shortcode('lwn_say_hello', 'lwn_say_hello_callback');

function lwn_say_hello_callback()
{
  return '<p style="background:blue;color:white">Hello everyone</p>';
}
