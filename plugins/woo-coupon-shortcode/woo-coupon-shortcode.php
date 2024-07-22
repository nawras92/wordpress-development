<?php

/*
 * Plugin Name: Woo Coupon Shortcode
 * Description: Generates random coupon and render it in a shortcode
 * Version: 1.0.0
 * Author: Nawras Ali
 * Text Domain: woo-coupon-shortcode
 * Domain Path: /languages
 * */

/*
 * Notes
 * 2- Add Button copy code
 * 3- Add attributes shortcode:  discount type, discount amount, expiry
 * 4- add translation files
 * 5- Add scripts if needed
 * */

add_action('init', 'woo_coupon_shortcode_init');
function woo_coupon_shortcode_init()
{
  // Ensure WooCommerce is loaded before running further actions
  if (!function_exists('WC')) {
    return false;
  }
  // Register Shortcode
  add_shortcode(
    'lwn_woo_generate_coupon',
    'woo_coupon_shortcode_render_generate_coupon_shortcode'
  );
}

function woo_coupon_shortcode_render_generate_coupon_shortcode($attrs)
{
  $prefix = $attrs['prefix'] ?? 'lwn_';
  $amount = $attrs['amount'] ?? 10;
  $code_length = $attrs['code_length'] ?? '5';
  $type = $attrs['type'] ?? 'percent';
  $expiry = $attrs['expiry'] ?? '+1 day';

  $generated_cc = woo_coupon_shortcode_generate_cc(
    $prefix,
    $amount,
    $code_length,
    $type,
    $expiry
  );
  ob_start();
  ?>
     <div class="coupon-container">
         <p id="couponCode">
             <?php echo esc_html($generated_cc); ?>
          </p>
         <button class="copy-button" onclick="copyToClipboard()">
            Copy Code
         </button>
     </div>
     <script>
       function copyToClipboard(){
            const copyText = document.getElementById('couponCode').innerText;
            const textarea = document.createElement("textarea");
              textarea.value = copyText
             document.body.appendChild(textarea)
            textarea.select();
            document.execCommand("Copy")
            textarea.remove()
  
      }

     </script>

<?php return ob_get_clean();
}

// Function to generate Coupon Codes
function woo_coupon_shortcode_generate_cc(
  $prefix,
  $amount,
  $code_length,
  $type,
  $expiry
) {
  if (!session_id()) {
    session_start();
  }

  // check if the coupon code already exists in the session
  if (isset($_SESSION['lwn_generated_coupon'])) {
    return $_SESSION['lwn_generated_coupon'];
  }

  $coupon_code =
    esc_html($prefix) .
    strtoupper(wp_generate_password(absint($code_length), false, false));
  // Create Coupon Object
  $coupon = new WC_Coupon();
  $coupon->set_code($coupon_code);
  $coupon->set_discount_type(esc_html($type));
  $coupon->set_amount(absint($amount));
  $coupon->set_date_expires(date('Y-m-d', strtotime($expiry)));

  // Save coupon
  $coupon->save();

  // Save coupon code in the session
  $_SESSION['lwn_generated_coupon'] = $coupon_code;

  return $coupon_code;
}
