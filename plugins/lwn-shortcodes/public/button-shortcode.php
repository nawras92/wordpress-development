<?php

add_shortcode('lwn_redirect_button', 'lwn_redirect_button_callback');
function lwn_redirect_button_callback($atts)
{
  $url = $atts['url'];
  $text = $atts['text'];
  ob_start();
  ?>
    <a style="display: block;" href="<?php echo esc_url($url); ?>">
   <?php echo esc_html($text); ?>
  </a>

<?php
$output = ob_get_clean();

return $output;
}
