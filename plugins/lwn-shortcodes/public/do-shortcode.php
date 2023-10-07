<?php

add_action('lwn_shortcode_do_say_hello', 'lwn_shortcode_do_say_hello_callback');
function lwn_shortcode_do_say_hello_callback()
{
  echo do_shortcode('[lwn_say_hello]');
}

/* do_action('lwn_shortcode_do_say_hello'); */
