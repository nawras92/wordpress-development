<?php
/**
 * Plugin Name:       Lwn Editor Plugin
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       lwn-editor-plugin
 *
 * @package Lwn
 */

if (!defined('ABSPATH')) {
	exit(); // Exit if accessed directly.
}

/* Register Post Meta */
add_action('init', 'lwn_lwn_editor_plugin_register_post_meta');
function lwn_lwn_editor_plugin_register_post_meta()
{
	register_post_meta('post', 'lwn-post-meta-1', [
		'show_in_rest' => true,
		'type' => 'string',
		'single' => true,
		'sanitize_callback' => 'sanitize_text_field',
	]);
	register_post_meta('post', 'lwn-post-meta-2', [
		'show_in_rest' => true,
		'type' => 'integer',
		'single' => true,
		'sanitize_callback' => 'absint',
	]);
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function lwn_lwn_editor_plugin_block_init()
{
	register_block_type(__DIR__ . '/build');
}
add_action('init', 'lwn_lwn_editor_plugin_block_init');
