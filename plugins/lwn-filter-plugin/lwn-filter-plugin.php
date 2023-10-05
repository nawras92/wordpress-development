<?php

/*
 * Plugin Name: LWN Filter Plugin
 * Description: Learns about WP Filters
 * Version: 1.0.0
 * Text Domain: lwn-filter-plugin
 * Author: Nawras Ali
 * */

// Plugin URL
define('LWN_FILTER_PLUGIN', plugin_dir_path(__FILE__));

// Include files
require_once LWN_FILTER_PLUGIN . 'public/filter-post-title.php';
require_once LWN_FILTER_PLUGIN . 'public/filter-post-content.php';
require_once LWN_FILTER_PLUGIN . 'public/custom-filter.php';

/* 1- Wordpress filters take in a value */
/* 2- Wordpress filters return edited value */
/* 3- There are known filter hooks:  the_title/the_content */
/* 4- You can create own filter using add_filter */
/* 5- You can apply the filter using apply_filters */
/* 6- You can call the filters many times */
