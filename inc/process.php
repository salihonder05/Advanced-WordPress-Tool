<?php

/* Disable Elements */

/* Disable XMLRPC */
	if (get_option('d-xmlrpc') == true) {
		add_filter('xmlrpc_enabled', '__return_false'); // Disable XMLRPC SYSTEM
		remove_action('wp_head', 'rsd_link'); // REMOVE RSD LiNK FROM HEAD
		remove_action('wp_head', 'xmlrpc'); // REMOVE XMLRPC LINK FROM HEAD
	} // wat_disable_xmlrpc
/* Disable XMLRPC */

/* Disable Emojis */
	if (get_option('d-emojis') == true) {
		/* Disable emojis */
		function disable_emojis()
		{
			remove_action('wp_head', 'print_emoji_detection_script', 7);
			remove_action('admin_print_scripts', 'print_emoji_detection_script');
			remove_action('wp_print_styles', 'print_emoji_styles');
			remove_action('admin_print_styles', 'print_emoji_styles');
			remove_filter('the_content_feed', 'wp_staticize_emoji');
			remove_filter('comment_text_rss', 'wp_staticize_emoji');
			remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
			add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
			add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
		}
		add_action('init', 'disable_emojis');
			
		/**
			* Filter function used to remove the tinymce emoji plugin.
			*
			* @param array $plugins
			* @return array Difference betwen the two arrays
			*/
		function disable_emojis_tinymce($plugins)
		{
			if (is_array($plugins)) {
				return array_diff($plugins, array( 'wpemoji' ));
			} else {
				return array();
			}
		}
			
		/**
			* Remove emoji CDN hostname from DNS prefetching hints.
			*
			* @param array $urls URLs to print for resource hints.
			* @param string $relation_type The relation type the URLs are printed for.
			* @return array Difference betwen the two arrays.
			*/
		function disable_emojis_remove_dns_prefetch($urls, $relation_type)
		{
			if ('dns-prefetch' == $relation_type) {
				/** This filter is documented in wp-includes/formatting.php */
				$emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');
			
				$urls = array_diff($urls, array( $emoji_svg_url ));
			}
			
			return $urls;
		}
		
		/*  Disable the emoji's */
	} // wat_disable_emojis
/* Disable Emojis */

/* Disable Version */
	if (get_option('d-version') == true) {
		/* Disable WP Version Number */
		function crunchify_remove_version()
		{
			return '';
		}
		add_filter('the_generator', 'crunchify_remove_version');
		/* Disable WP Version Number */
	} // wat_disable_version
/* Disable Version */

/* Disable Manifest */
	if (get_option('d-manifest') == true) {
		/* Disable WP Manifest Link */
		remove_action('wp_head', 'wlwmanifest_link');
		/* Disable WP Manifest Link */
	} // wat_disable_manifest
/* Disable Manifest */

/* Disable Shortlink */
	if (get_option('d-shortlink') == true) {
		/* Remove Shortlink */
		remove_action('wp_head', 'wp_shortlink_wp_head');
		/* Remove Shortlink */
	} // wat_disable_Shortlink
/* Disable Shortlink */

/* Disable Query Strings */
	if (get_option('d-querystrings') == true) {
		/* Remove query strings fromm all static resources */
		function crunchify_cleanup_query_string($src)
		{
			$parts = explode('?', $src);
			return $parts[0];
		}
		add_filter('script_loader_src', 'crunchify_cleanup_query_string', 15, 1);
		add_filter('style_loader_src', 'crunchify_cleanup_query_string', 15, 1);
		/* Remove query strings fromm all static resources */
	} // wat_disable_querystrings
/* Disable Query Strings */

/* Disable apilink */
	if (get_option('d-apilink') == true) {
		/* Remove api.w.org relation link */
		remove_action('wp_head', 'rest_output_link_wp_head', 10);
		remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
		remove_action('template_redirect', 'rest_output_link_header', 11, 0);
		/* Remove api.w.org relation link */
	} // wat_disable_apilink
/* Disable apilink */

/* Disable DNS Link */
	if (get_option('d-dnslink') == true) {
		/* DNS Prefetch Link */
		remove_action('wp_head', 'wp_resource_hints', 2);
		/* DNS Prefetch Link */
	} // wat_disable_dnslink
/* Disable DNS Link */

/* Disable Embed Link */
	if (get_option('d-embedlink') == true) {
		/* Remove Wp - Embed Link */
		function my_deregister_scripts()
		{
			wp_dequeue_script('wp-embed');
		}
		add_action('wp_footer', 'my_deregister_scripts');
		/* Remove Wp - Embed Link */
	} // wat_disable_embedlink
/* Disable Embed Link */

/* Disable RSS Link */
	if (get_option('d-rsslink') == true) {
		/* Remove RSS Link */
		remove_action('wp_head', 'feed_links', 2); // remove rss feed links
		/* Remove RSS Link */
	} // wat_disable_RSS
/* Disable RSS Link */

/* Disable Gutenberg */
	if (get_option('d-gutenberg') == true) {

		/* Old Version */
		if (version_compare($GLOBALS['wp_version'], '5.0-beta', '>')) {
			
				// WP > 5 beta
			add_filter('use_block_editor_for_post_type', '__return_false', 100);
		} else {
				
				// WP < 5 beta
			add_filter('gutenberg_can_edit_post_type', '__return_false');
		}
		/* Delete style.css from head */
		function smartwp_remove_wp_block_library_css()
		{
			wp_dequeue_style('wp-block-library');
			wp_dequeue_style('wp-block-library-theme');
		}
		add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css');
		/* Old Version */

		/* New Version */
		// Fully Disable Gutenberg editor.
		add_filter('use_block_editor_for_post_type', '__return_false', 10);
		// Don't load Gutenberg-related stylesheets.
		add_action('wp_enqueue_scripts', 'remove_block_css', 100);
		function remove_block_css()
		{
			wp_dequeue_style('wp-block-library'); // WordPress core
			wp_dequeue_style('wp-block-library-theme'); // WordPress core
			wp_dequeue_style('wc-block-style'); // WooCommerce
			wp_dequeue_style('storefront-gutenberg-blocks'); // Storefront theme

			remove_action('wp_enqueue_scripts', 'gutenberg_register_scripts_and_styles');
			remove_action('admin_enqueue_scripts', 'gutenberg_register_scripts_and_styles');
			remove_action('admin_notices', 'gutenberg_wordpress_version_notice');
			remove_action('rest_api_init', 'gutenberg_register_rest_widget_updater_routes');
			remove_action('admin_print_styles', 'gutenberg_block_editor_admin_print_styles');
			remove_action('admin_print_scripts', 'gutenberg_block_editor_admin_print_scripts');
			remove_action('admin_print_footer_scripts', 'gutenberg_block_editor_admin_print_footer_scripts');
			remove_action('admin_footer', 'gutenberg_block_editor_admin_footer');
			remove_action('admin_enqueue_scripts', 'gutenberg_widgets_init');
			remove_action('admin_notices', 'gutenberg_build_files_notice');
			remove_action('try_gutenberg_panel', 'wp_try_gutenberg_panel');

			remove_filter('load_script_translation_file', 'gutenberg_override_translation_file');
			remove_filter('block_editor_settings', 'gutenberg_extend_block_editor_styles');
			remove_filter('default_content', 'gutenberg_default_demo_content');
			remove_filter('default_title', 'gutenberg_default_demo_title');
			remove_filter('block_editor_settings', 'gutenberg_legacy_widget_settings');
			remove_filter('rest_request_after_callbacks', 'gutenberg_filter_oembed_result');
	
			// Previously used, compat for older Gutenberg versions.
			remove_filter('wp_refresh_nonces', 'gutenberg_add_rest_nonce_to_heartbeat_response_headers');
			remove_filter('get_edit_post_link', 'gutenberg_revisions_link_to_editor');
			remove_filter('wp_prepare_revision_for_js', 'gutenberg_revisions_restore');
	
			remove_action('rest_api_init', 'gutenberg_register_rest_routes');
			remove_action('rest_api_init', 'gutenberg_add_taxonomy_visibility_field');
			remove_filter('registered_post_type', 'gutenberg_register_post_prepare_functions');
	
			remove_action('do_meta_boxes', 'gutenberg_meta_box_save');
			remove_action('submitpost_box', 'gutenberg_intercept_meta_box_render');
			remove_action('submitpage_box', 'gutenberg_intercept_meta_box_render');
			remove_action('edit_page_form', 'gutenberg_intercept_meta_box_render');
			remove_action('edit_form_advanced', 'gutenberg_intercept_meta_box_render');
			remove_filter('redirect_post_location', 'gutenberg_meta_box_save_redirect');
			remove_filter('filter_gutenberg_meta_boxes', 'gutenberg_filter_meta_boxes');
	
			remove_filter('body_class', 'gutenberg_add_responsive_body_class');
			remove_filter('admin_url', 'gutenberg_modify_add_new_button_url'); // old
			remove_action('admin_enqueue_scripts', 'gutenberg_check_if_classic_needs_warning_about_blocks');
			remove_filter('register_post_type_args', 'gutenberg_filter_post_type_labels');
		}
		/* New Version */
	} // wat_disable_gutenberg
/* Disable Gutenberg */

/* Disable Html In Comments */
	if (get_option('d-htmlfromcomments') == true) {
		add_filter('pre_comment_content', 'esc_html');  // remove html from comemnt
	} // wat_disable_html_in_comments
/* Disable Html In Comments */

/* Disable Theme End Plugin File Editors */
	if (get_option('d-editors') == true) {
		define('DISALLOW_FILE_EDIT', true);
	} // wat_disable_editors
/* Disable Theme End Plugin File Editors */

/* Disable Comments */
	if (get_option('d-comments') == true) {
	
		// Disable support for comments and trackbacks in post types
		function df_disable_comments_post_types_support()
		{
			$post_types = get_post_types();
			
			foreach ($post_types as $post_type) {
				if (post_type_supports($post_type, 'comments')) {
					remove_post_type_support($post_type, 'comments');
			
					remove_post_type_support($post_type, 'trackbacks');
				}
			}
		}
			
		add_action('admin_init', 'df_disable_comments_post_types_support');
			
		// Close comments on the front-end
			
		function df_disable_comments_status()
		{
			return false;
		}
			
		add_filter('comments_open', 'df_disable_comments_status', 20, 2);
			
		add_filter('pings_open', 'df_disable_comments_status', 20, 2);
			
		// Hide existing comments
			
		function df_disable_comments_hide_existing_comments($comments)
		{
			$comments = array();
			
			return $comments;
		}
			
		add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);
			
		// Remove comments page in menu
			
		function df_disable_comments_admin_menu()
		{
			remove_menu_page('edit-comments.php');
		}
			
		add_action('admin_menu', 'df_disable_comments_admin_menu');
			
		// Redirect any user trying to access comments page
			
		function df_disable_comments_admin_menu_redirect()
		{
			global $pagenow;
			
			if ($pagenow === 'edit-comments.php') {
				wp_redirect(admin_url());
				exit;
			}
		}
			
		add_action('admin_init', 'df_disable_comments_admin_menu_redirect');
			
		// Remove comments metabox from dashboard
			
		function df_disable_comments_dashboard()
		{
			remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
		}
			
		add_action('admin_init', 'df_disable_comments_dashboard');
			
		// Remove comments links from admin bar
			
		function df_disable_comments_admin_bar()
		{
			if (is_admin_bar_showing()) {
				remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
			}
		}
			
		add_action('init', 'df_disable_comments_admin_bar');

		/* Disable Comments*/
	} // wat_disable_comments
/* Disable Comments */

/* Disable Admin Bar */
	if (get_option('d-adminbar') == true) {
		add_filter('show_admin_bar', '__return_false'); // disable admin bar
	}
/* Disable Admin Bar */

/* Disable Autosave in Editor */
	/* ALTERNATIVE EDIT : define ('AUTOSAVE_INTERVAL', 86400);  // IN WP_CONFIG */
	if (get_option('d-autosave') == true) {
		add_action('admin_init', 'disable_autosave');
		function disable_autosave()
		{
			wp_deregister_script('autosave');
		}
	}
/* Disable Autosave in Editor */

/* Add SVG Support to WP */
	if (get_option('d-addsvg') == true) {
		function add_file_types_to_uploads($file_types)
		{
			$new_filetypes = array();
			$new_filetypes['svg'] = 'image/svg+xml';
			$file_types = array_merge($file_types, $new_filetypes);
			return $file_types;
		}
		add_action('upload_mimes', 'add_file_types_to_uploads');
	}
/* Add SVG Support To WP */

/* Disable Screen Options Button */
	if (get_option('d-screenoptions') == true) {
		function wpb_remove_screen_options()
		{
			if (!current_user_can('manage_options')) {
				return false;
			}
			return true;
		}
		add_filter('screen_options_show_screen', 'wpb_remove_screen_options');
	}
/* Disable Screen Options Button */

/* Disable Rest-API(WP-JSON For Guests) */
	if (get_option('d-restapi') == true) {
		add_filter('rest_authentication_errors', function ($result) {
			if (! empty($result)) {
				return $result;
			}
			if (! is_user_logged_in()) {
				return new WP_Error('rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ));
			}
			return $result;
		});
	}
/* Disable Rest-API(WP-JSON For Guests) */

/* Disable Previous & Next Article Links */
	if (get_option('d-prenextlinks') == true) {
		remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
	}
/* Disable Previous & Next Article Links */

/* Move Jquery To Google CDN */
	if (get_option('d-jquerygoogle') == true) {
		add_action('init', 'use_jquery_from_google');

		function use_jquery_from_google()
		{
			if (is_admin()) {
				return;
			}

			global $wp_scripts;
			if (isset($wp_scripts->registered['jquery']->ver)) {
				$ver = $wp_scripts->registered['jquery']->ver;
				$ver = str_replace("-wp", "", $ver);
			} else {
				$ver = '1.12.4';
			}

			wp_deregister_script('jquery');
			wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/$ver/jquery.min.js", false, $ver);
		}
	}
/* Move Jquery To Google CDN */

/* Disable WP Core Auto Update */
	if (get_option('d-wpcoreautoupdate') == true) {
		define('WP_AUTO_UPDATE_CORE', false);
	}
/* Disable WP Core Auto Update */

/* Disable WP Themes Auto Update */
	if (get_option('d-wpthemeautoupdate') == true) {
		add_filter('auto_update_plugin', '__return_false');
	}
/* Disable WP Themes Auto Update */

/* Disable WP Plugins Auto Update */
	if (get_option('d-wppluginsautoupdate') == true) {
		add_filter('auto_update_plugin', '__return_false');
	}
/* Disable WP Plugins Auto Update */


/* Disable Elements */


/* Add Scripts */
if (get_option('analyticscode') != null) {
	add_action('wp_head', 'add_scripts_to_header');
	function add_scripts_to_header()
	{
		$scripts = '';
		$scripts .= "\n\n<!-- Scripts Included From WAT -->\n";
		$scripts .= stripslashes(get_option('analyticscode'));
		$scripts .= "\n<!-- Scripts Included From WAT -->\n\n";
		echo $scripts;
	}
}

/* Add Scripts */

