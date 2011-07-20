<?php
/*
Plugin Name: Disruptive Talk
Plugin URI: http://disruptivetalk.com/
Description: Disruptive Phono Widget. Browser phone for your wordpress site.
Version: 1.2.0
Author: Disruptive Technologies
Author URI: http://disruptive.io/
*/

/**
 * 
 * Copyright 2011 Disruptive Technologies, Inc.
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 */

function dreamacd_phono_widget() {
	$showWidget = false;
	if ( !get_option('dreamacd_admin') || current_user_can('manage_options') ) {
		$pages = get_option('dreamacd_pages');
		$pages = array_map('trim', explode(',', $pages));
		if ($pages && !empty($pages))
		{
			Global $post;
			if (in_array($post->post_name, $pages))
				$showWidget = true;
		}
		else
		{
			$showWidget = true;
		}
	}
	if ($showWidget)
	{
		if (get_option('dreamacd_proactive'))
		{
			// Proactive widget
			include('phono_proactive.php');
		}
		else
		{
			include('phono.php');
		}
	}
}

/**
 * Function to force IE in IE 8 ode (phono requires IE 8 standards).
 */
function dreamacd_header() {
	if ( !get_option('dreamacd_admin') || current_user_can('manage_options') ) {
		include('phono_header.php');
	}
}

//add_action('get_sidebar', 'acd_sidebar_widget');
wp_register_sidebar_widget(
	'dreamacd_phono_widget',
	'Disruptive Talk',
	'dreamacd_phono_widget',
	array(
		'Description' => 'Disruptive phono widget for tropo applications. Allows a customer to call in to your Tropo app from your wordpress
			site'
	)
);

add_action('wp_head', 'dreamacd_header');

// Admin area

/*
 * Displays the dreamacd options in the admin menu
 */
function dreamacd_plugin_menu()
{
	add_options_page('Disruptive Talk', 'Disruptive Talk', 'manage_options', 'dreamacd', 'dreamacd_plugin_options');
}

/*
 * DreamACD plugin options page
 */
function dreamacd_plugin_options()
{
	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	include('disruptive_options.php');
}

/*
 * Initialize DreamACD options.
 */
function dreamacd_options_init()
{
	register_setting('dreamacd_options', 'dreamacd_phono_key');
	register_setting('dreamacd_options', 'dreamacd_phono_address');
	register_setting('dreamacd_options', 'dreamacd_phono_text');
	register_setting('dreamacd_options', 'dreamacd_phono_dialpad');
	register_setting('dreamacd_options', 'dreamacd_header_text');
	register_setting('dreamacd_options', 'dreamacd_pages');
	register_setting('dreamacd_options', 'dreamacd_proactive', 'intval');
	register_setting('dreamacd_options', 'dreamacd_proactive_delay', 'intval');
	register_setting('dreamacd_options', 'dreamacd_admin', 'intval');
	register_setting('dreamacd_options', 'dreamacd_style_background');
	register_setting('dreamacd_options', 'dreamacd_style_background_image');
	register_setting('dreamacd_options', 'dreamacd_style_border');
	register_setting('dreamacd_options', 'dreamacd_style_border_radius');
}

add_action('admin_init', 'dreamacd_options_init');
add_action('admin_menu', 'dreamacd_plugin_menu');
