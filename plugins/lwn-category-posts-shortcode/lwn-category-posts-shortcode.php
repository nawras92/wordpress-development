<?php

/**
 * Plugin Name: Lwn Category Posts
 * Description:  Display posts from a specific category using shortcode
 * Version: 1.0
 * Text Domain: lwn-category-posts
 * */

// Add styles
add_action('wp_enqueue_scripts', 'lwn_category_posts_style');
function lwn_category_posts_style()
{
  wp_enqueue_style(
    'lwn-category-posts-style',
    plugins_url('style.css', __FILE__)
  );
}

//Create shortcode
add_shortcode('lwn-category-posts', 'lwn_category_posts_shortcode');
function lwn_category_posts_shortcode($atts)
{
  // Shortcode attributes
  $atts = shortcode_atts(
    [
      'category' => '', // Category slug
      'count' => 5, // Number of posts to display
    ],
    $atts
  );

  // WP Query to fetch posts
  $args = [
    'category_name' => $atts['category'],
    'posts_per_page' => $atts['count'],
  ];

  $query = new WP_Query($args);
  if ($query->have_posts()) {
    $output = '<div class="grid-listing">';
    while ($query->have_posts()) {
      $query->the_post();
      $output .= '<div class="grid-item">';
      $output .= '<div class="grid-item-inner">';
      $output .= '<div class="grid-item-content app-item dark-div">';
      $output .= '<div class="app-thumbnail">';
      $output .=
        '<a href="' .
        get_the_permalink() .
        '" title="' .
        get_the_title() .
        '">';
      $output .=
        '<img src="' .
        get_the_post_thumbnail_url() .
        '" title="' .
        get_the_title() .
        '" alt="' .
        get_the_title() .
        '">';
      $output .= '</a>';
      $output .= '</div>';
      $output .= '<div class="grid-overlay grid-has-icon">';
      $output .=
        '<a class="overlay-top" href="' .
        get_the_permalink() .
        '" title="' .
        get_the_category()[0]->name .
        '">';
      $output .=
        '<img src="' .
        get_template_directory_uri() .
        '/path-to-your-icon.png" width="60" height="60" class="grip-app-icon" alt="' .
        get_the_category()[0]->name .
        '">';
      $output .= '<h4>' . get_the_title() . '</h4>';
      $output .= '</a>';
      $output .= '<div class="overlay-bottom">';
      $output .= '<div>';
      $output .= '<span class="price">' . get_the_excerpt() . '</span>';
      $output .= '</div>';
      $output .= '</div>';
      $output .= '</div>';
      $output .= '</div>';
      $output .= '</div>';
      $output .= '</div>';
    }
    $output .= '</div>';
    wp_reset_postdata();
    return $output;
  }
}
