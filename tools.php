<?php 
/**
 * Advanced WP Tools
 *
 * @package     awtPackage
 * @author      Salih ÖNDER
 * @copyright   2020 Salih ÖNDER
 * @license     GPL-3.0
 *
 * @wordpress-plugin
 * Plugin Name: Advanced WP Tools
 * Plugin URI:  https://www.salihonder.com.tr/pluginler/advanced-wordpress-tool/
 * Description: Cancel everything you don't need. Make WordPress more secure. Take care of all your transactions with a single plugin.
 * Version:     1.0.0
 * Author:      Salih ÖNDER
 * Author URI:  https://www.salihonder.com.tr
 * Text Domain: advanced-wordpress-tool
 * License:     GPL v3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */






/** Eklenecekler
 * 
 * 
 * 
 */
load_plugin_textdomain( 'advanced-wordpress-tool', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

add_action('admin_menu', 'wat_admin_menu_option');

function wat_admin_menu_option()
	{
	add_menu_page('Advanced Tools v1.0.0', 'Advanced Tools','manage_options','wat-admin-menu','wat_admin_menu_page','dashicons-hammer',200);
} //wat_admin_menu_option Function


function wat_admin_menu_page() {

	/* Screen Settings */
		?>
		<style>
			#screen-meta-links {display:none;}

			h1 {
				background-color: #23282d;
				padding: 20px 10px;
				color: white;
			}
			h1 > small {
				font-size: 11px; 
				color: #aaa;
			}
			form {
				width:400px;
				border: 1px solid #bbb;
				padding:15px 15px;
				background-color:white;
				float:left;
				margin-right:10px;
			}
			form > fieldset {
				margin-bottom: 5px;
				margin-top: 5px;
			}
			form > h2 {
				margin:0;
			}
			.notice, div.error, div.updated {
 				margin: 5px 15px 10px 0px;
				padding: 1px 12px;
			}
			textarea {
				font-size: 10px;
				width:100%;
			}
		</style>
		<h1>Wordpress Advanced Tools <small>v1.0.0</small></h1>
		<?php
	/* Screen Settings */

	/* Process Request */

		if (array_key_exists('submit-disable-scripts',$_POST)) 
		{
			if (isset($_POST['d-xmlrpc'])) {
				update_option('d-xmlrpc',true);
			}
			else {
				update_option('d-xmlrpc',false);
			}

			if (isset($_POST['d-emojis'])) {
				update_option('d-emojis',true);
			}
			else {
				update_option('d-emojis',false);
			}

			if (isset($_POST['d-version'])) {
				update_option('d-version',true);
			}
			else {
				update_option('d-version',false);
			}

			if (isset($_POST['d-screenoptions'])) {
				update_option('d-screenoptions',true);
			}
			else {
				update_option('d-screenoptions',false);
			}

			if (isset($_POST['d-manifest'])) {
				update_option('d-manifest',true);
			}
			else {
				update_option('d-manifest',false);
			}

			if (isset($_POST['d-shortlink'])) {
				update_option('d-shortlink',true);
			}
			else {
				update_option('d-shortlink',false);
			}

			if (isset($_POST['d-editors'])) {
				update_option('d-editors',true);
			}
			else {
				update_option('d-editors',false);
			}

			if (isset($_POST['d-querystrings'])) {
				update_option('d-querystrings',true);
			}
			else {
				update_option('d-querystrings',false);
			}

			if (isset($_POST['d-apilink'])) {
				update_option('d-apilink',true);
			}
			else {
				update_option('d-apilink',false);
			}

			if (isset($_POST['d-dnslink'])) {
				update_option('d-dnslink',true);
			}
			else {
				update_option('d-dnslink',false);
			}

			if (isset($_POST['d-embedlink'])) {
				update_option('d-embedlink',true);
			}
			else {
				update_option('d-embedlink',false);
			}

			if (isset($_POST['d-rsslink'])) {
				update_option('d-rsslink',true);
			}
			else {
				update_option('d-rsslink',false);
			}

			if (isset($_POST['d-gutenberg'])) {
				update_option('d-gutenberg',true);
			}
			else {
				update_option('d-gutenberg',false);
			}
			
			if (isset($_POST['d-comments'])) {
				update_option('d-comments',true);
			}
			else {
				update_option('d-comments',false);
			}
			
			if (isset($_POST['d-adminbar'])) {
				update_option('d-adminbar',true);
			}
			else {
				update_option('d-adminbar',false);
			}
			
			if (isset($_POST['d-htmlfromcomments'])) {
				update_option('d-htmlfromcomments',true);
			}
			else {
				update_option('d-htmlfromcomments',false);
			}

			if (isset($_POST['d-autosave'])) {
				update_option('d-autosave',true);
			}
			else {
				update_option('d-autosave',false);
			}

			if (isset($_POST['d-addsvg'])) {
				update_option('d-addsvg',true);
			}
			else {
				update_option('d-addsvg',false);
			}
			
			if (isset($_POST['d-restapi'])) {
				update_option('d-restapi',true);
			}
			else {
				update_option('d-restapi',false);
			}
			
			if (isset($_POST['d-prenextlinks'])) {
				update_option('d-prenextlinks',true);
			}
			else {
				update_option('d-prenextlinks',false);
			}
			
			if (isset($_POST['d-jquerygoogle'])) {
				update_option('d-jquerygoogle',true);
			}
			else {
				update_option('d-jquerygoogle',false);
			}

			if (isset($_POST['d-wpcoreautoupdate'])) {
				update_option('d-wpcoreautoupdate',true);
			}
			else {
				update_option('d-wpcoreautoupdate',false);
			}
			
			if (isset($_POST['d-wpthemeautoupdate'])) {
				update_option('d-wpthemeautoupdate',true);
			}
			else {
				update_option('d-wpthemeautoupdate',false);
			}

			if (isset($_POST['d-wppluginsautoupdate'])) {
				update_option('d-wppluginsautoupdate',true);
			}
			else {
				update_option('d-wppluginsautoupdate',false);
			}



			echo '<div id="setting-error-settings_updated" class="notice notice-success settings-error is-dismissible"> 
			<p><strong>Ayarlar kaydedildi.</strong></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Bu mesajı gizle.</span></button></div>';
			
		} // ENDIF

		if (array_key_exists('submit-header-scripts',$_POST)) 
		{
			if (isset($_POST['analyticscode'])) {
				$value = $_POST['analyticscode'];
				update_option('analyticscode',$value);
				
			}
			else {
				update_option('analyticscode',NULL);
			}


			echo '<div id="setting-error-settings_updated" class="notice notice-success settings-error is-dismissible"> 
			<p><strong>Ayarlar kaydedildi.</strong></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Bu mesajı gizle.</span></button></div>';
			
		} // ENDIF

	/* Process Request */

	/* Generate Form */
		?>
			<form action="" method="post">
				<h2><?php _e('Select Options','advanced-wordpress-tool')?></h2>
				<small><?php _e('Please select the items you want to disable.','advanced-wordpress-tool')?></small>
				<br> <br>
				
				<fieldset>
					<label for="toggleCheckboxes">
					<input type="checkbox" name="toggleCheckboxes" id="toggleCheckboxes" onClick="toggle(this)" />
					<?php _e('Toggle All','advanced-wordpress-tool')?></label>
				</fieldset>
				<hr>

					
				<fieldset>
					<label for="d-xmlrpc">
					<input type="checkbox" class="regular-text" name="d-xmlrpc" id="d-xmlrpc" 
					<?php if(get_option('d-xmlrpc')) {echo 'checked';} ?>>
					<?php _e('Disable XMLRPC','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-emojis">
					<input type="checkbox" class="regular-text" name="d-emojis" id="d-emojis"
					<?php if(get_option('d-emojis')) {echo 'checked';} ?>>
					<?php _e('Disable WP Emojis','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-version">
					<input type="checkbox" class="regular-text" name="d-version" id="d-version"
					<?php if(get_option('d-version')) {echo 'checked';} ?>>
					<?php _e('Disable WP Version Number','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-manifest">
					<input type="checkbox" class="regular-text" name="d-manifest" id="d-manifest"
					<?php if(get_option('d-manifest')) {echo 'checked';} ?>>
					<?php _e('Disable Manifest','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-shortlink">
					<input type="checkbox" class="regular-text" name="d-shortlink" id="d-shortlink"
					<?php if(get_option('d-shortlink')) {echo 'checked';} ?>>
					<?php _e('Disable Shortlink','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-querystrings">
					<input type="checkbox" class="regular-text" name="d-querystrings" id="d-querystrings"
					<?php if(get_option('d-querystrings')) {echo 'checked';} ?>>
					<?php _e('Disable Query Strings All Static Resources','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-apilink">
					<input type="checkbox" class="regular-text" name="d-apilink" id="d-apilink"
					<?php if(get_option('d-apilink')) {echo 'checked';} ?>>
					<?php _e('Disable  api.w.org Relation Link','advanced-wordpress-tool')?>
					</label>
				</fieldset>
				<fieldset>
					<label for="d-restapi">
					<input type="checkbox" class="regular-text" name="d-restapi" id="d-restapi"
					<?php if(get_option('d-restapi')) {echo 'checked';} ?>>
					<?php _e('Disable  Rest API for Guests (site.com/wp-json)','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-dnslink">
					<input type="checkbox" class="regular-text" name="d-dnslink" id="d-dnslink"
					<?php if(get_option('d-dnslink')) {echo 'checked';} ?>><?php _e('Disable Dns Prefetch Link','advanced-wordpress-tool')?>
					</label>
				</fieldset>
				<fieldset>
					<label for="d-embedlink">
					<input type="checkbox" class="regular-text" name="d-embedlink" id="d-embedlink"
					<?php if(get_option('d-embedlink')) {echo 'checked';} ?>>
					<?php _e('Disable WP Embed Link','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-rsslink">
					<input type="checkbox" class="regular-text" name="d-rsslink" id="d-rsslink"
					<?php if(get_option('d-rsslink')) {echo 'checked';} ?>>
					<?php _e('Disable RSS Links','advanced-wordpress-tool')?>
					</label>
				</fieldset>
				<fieldset>
					<label for="d-gutenberg">
					<input type="checkbox" class="regular-text" name="d-gutenberg" id="d-gutenberg"
					<?php if(get_option('d-gutenberg')) {echo 'checked';} ?>>
					<?php _e('Disable Gutenberg Editor','advanced-wordpress-tool')?>
					</label>
				</fieldset>
				<fieldset>
					<label for="d-editors">
					<input type="checkbox" class="regular-text" name="d-editors" id="d-editors"
					<?php if(get_option('d-editors')) {echo 'checked';} ?>>
					<?php _e('Disable Theme/Plugin File Editors','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-htmlfromcomments">
					<input type="checkbox" class="regular-text" name="d-htmlfromcomments" id="d-htmlfromcomments"
					<?php if(get_option('d-htmlfromcomments')) {echo 'checked';} ?>>
					<?php _e('Disable Html In Comments (For Safe Comments)','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-comments">
					<input type="checkbox" class="regular-text" name="d-comments" id="d-comments"
					<?php if(get_option('d-comments')) {echo 'checked';} ?>>
					<?php _e('Disable Comment System','advanced-wordpress-tool')?>
					 <small><?php _e('You must remove frontend components.','advanced-wordpress-tool')?></small></label>
				</fieldset>
				<fieldset>
					<label for="d-adminbar">
					<input type="checkbox" class="regular-text" name="d-adminbar" id="d-adminbar"
					<?php if(get_option('d-adminbar')) {echo 'checked';} ?>>
					<?php _e('Disable Admin Bar From Frontend','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-autosave">
					<input type="checkbox" class="regular-text" name="d-autosave" id="d-autosave"
					<?php if(get_option('d-autosave')) {echo 'checked';} ?>>
					<?php _e('Disable Auto Save (In Edit Screens)','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-addsvg">
					<input type="checkbox" class="regular-text" name="d-addsvg" id="d-addsvg"
					<?php if(get_option('d-addsvg')) {echo 'checked';} ?>>
					<?php _e('Add SVG Support (Media - Upload)','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-screenoptions">
					<input type="checkbox" class="regular-text" name="d-screenoptions" id="d-screenoptions"
					<?php if(get_option('d-screenoptions')) {echo 'checked';} ?>>
					<?php _e('Disable Screen Options Button (Administrators Excluded)','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-prenextlinks">
					<input type="checkbox" class="regular-text" name="d-prenextlinks" id="d-prenextlinks"
					<?php if(get_option('d-prenextlinks')) {echo 'checked';} ?>>
					<?php _e('Disable Previous and Next Article Links From Head (Html)','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-jquerygoogle">
					<input type="checkbox" class="regular-text" name="d-jquerygoogle" id="d-jquerygoogle"
					<?php if(get_option('d-jquerygoogle')) {echo 'checked';} ?>>
					<?php _e('Move Jquery To Google CDN From Wp-Includes','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-wpcoreautoupdate">
					<input type="checkbox" class="regular-text" name="d-wpcoreautoupdate" id="d-wpcoreautoupdate"
					<?php if(get_option('d-wpcoreautoupdate')) {echo 'checked';} ?>>
					<?php _e('Disable WP Core Auto Update','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-wpthemeautoupdate">
					<input type="checkbox" class="regular-text" name="d-wpthemeautoupdate" id="d-wpthemeautoupdate"
					<?php if(get_option('d-wpthemeautoupdate')) {echo 'checked';} ?>>
					<?php _e('Disable Themes Auto Update','advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-wppluginsautoupdate">
					<input type="checkbox" class="regular-text" name="d-wppluginsautoupdate" id="d-wppluginsautoupdate"
					<?php if(get_option('d-wppluginsautoupdate')) {echo 'checked';} ?>>
					<?php _e('Disable Plugins Auto Update','advanced-wordpress-tool')?></label>
				</fieldset>


				
				<script language="JavaScript">
					
					function toggle(source) {
						checkboxes = document.getElementsByClassName('regular-text');
						for(var i=0, n=checkboxes.length;i<n;i++) {
							checkboxes[i].checked = source.checked;
						}
					}

					</script>




				<br>
				<fieldset>
					<input type="submit" name="submit-disable-scripts" class="button button-primary" value="<?php _e('Save Settings','advanced-wordpress-tool')?>">
				</fieldset>

			</form>

			<form action="" method="post">
				<h2><?php _e('Add Scripts (To Header)','advanced-wordpress-tool')?></h2>
				<small><?php _e('- Your Google Analytics, Yandex Metrica, Facebook Pixel etc. Codes. ','advanced-wordpress-tool')?></small> <br>
				<small><?php _e('- Google Fonts, JS Libraries or more ','advanced-wordpress-tool')?></small> <br>
				<br>
				<fieldset>
					<textarea name="analyticscode" id="analyticscode" rows="20"><?php if(get_option('analyticscode')) {echo get_option('analyticscode');} ?></textarea>
				</fieldset>



				<br>
				<fieldset>
					<input type="submit" name="submit-header-scripts" class="button button-primary" value="<?php _e('Save Settings','advanced-wordpress-tool')?>">
				</fieldset>
			</form>
		<?php
	/* Generate Form */

} //wat_admin_menu_page Function


/* Disable Elements */

	/* Disable XMLRPC */
		if ( get_option('d-xmlrpc') == true ) {
			add_filter('xmlrpc_enabled', '__return_false'); // Disable XMLRPC SYSTEM
			remove_action ('wp_head', 'rsd_link'); // REMOVE RSD LiNK FROM HEAD
			remove_action ('wp_head', 'xmlrpc'); // REMOVE XMLRPC LINK FROM HEAD
		} // wat_disable_xmlrpc
	/* Disable XMLRPC */

	/* Disable Emojis */
		if ( get_option('d-emojis') == true ) {
			/* Disable emojis */
				function disable_emojis() {
					remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
					remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
					remove_action( 'wp_print_styles', 'print_emoji_styles' );
					remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
					remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
					remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
					remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
					add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
					add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
				}
				add_action( 'init', 'disable_emojis' );
				
				/**
					* Filter function used to remove the tinymce emoji plugin.
					* 
					* @param array $plugins 
					* @return array Difference betwen the two arrays
					*/
				function disable_emojis_tinymce( $plugins ) {
					if ( is_array( $plugins ) ) {
					return array_diff( $plugins, array( 'wpemoji' ) );
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
				function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
					if ( 'dns-prefetch' == $relation_type ) {
					/** This filter is documented in wp-includes/formatting.php */
					$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
				
				$urls = array_diff( $urls, array( $emoji_svg_url ) );
					}
				
				return $urls;
				}
			
			/*  Disable the emoji's */
		} // wat_disable_emojis
	/* Disable Emojis */

	/* Disable Version */
		if ( get_option('d-version') == true ) {
			/* Disable WP Version Number */
				function crunchify_remove_version() {
					return '';
				}
				add_filter('the_generator', 'crunchify_remove_version');
			/* Disable WP Version Number */
		} // wat_disable_version
	/* Disable Version */

	/* Disable Manifest */
		if ( get_option('d-manifest') == true ) {
			/* Disable WP Manifest Link */
				remove_action( 'wp_head', 'wlwmanifest_link');
			/* Disable WP Manifest Link */			
		} // wat_disable_manifest
	/* Disable Manifest */

	/* Disable Shortlink */
		if ( get_option('d-shortlink') == true ) {
			/* Remove Shortlink */
			remove_action( 'wp_head', 'wp_shortlink_wp_head');
			/* Remove Shortlink */
		} // wat_disable_Shortlink
	/* Disable Shortlink */

	/* Disable Query Strings */
		if ( get_option('d-querystrings') == true ) {
			/* Remove query strings fromm all static resources */
				function crunchify_cleanup_query_string( $src ){ 
					$parts = explode( '?', $src ); 
					return $parts[0]; 
				} 
				add_filter( 'script_loader_src', 'crunchify_cleanup_query_string', 15, 1 ); 
				add_filter( 'style_loader_src', 'crunchify_cleanup_query_string', 15, 1 );
			/* Remove query strings fromm all static resources */
		} // wat_disable_querystrings
	/* Disable Query Strings */

	/* Disable apilink */
		if ( get_option('d-apilink') == true ) {
			/* Remove api.w.org relation link */
				remove_action('wp_head', 'rest_output_link_wp_head', 10);
				remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
				remove_action('template_redirect', 'rest_output_link_header', 11, 0);
			/* Remove api.w.org relation link */
		} // wat_disable_apilink
	/* Disable apilink */

	/* Disable DNS Link */
		if ( get_option('d-dnslink') == true ) {
			/* DNS Prefetch Link */
				remove_action( 'wp_head', 'wp_resource_hints', 2 );
			/* DNS Prefetch Link */			
		} // wat_disable_dnslink
	/* Disable DNS Link */

	/* Disable Embed Link */
		if ( get_option('d-embedlink') == true ) {
			/* Remove Wp - Embed Link */
				function my_deregister_scripts(){
					wp_dequeue_script( 'wp-embed' );
				}
				add_action( 'wp_footer', 'my_deregister_scripts' );
			/* Remove Wp - Embed Link */		
		} // wat_disable_embedlink
	/* Disable Embed Link */

	/* Disable RSS Link */
		if ( get_option('d-rsslink') == true ) {
			/* Remove RSS Link */
				remove_action('wp_head', 'feed_links', 2); // remove rss feed links
			/* Remove RSS Link */		
		} // wat_disable_RSS
	/* Disable RSS Link */

	/* Disable Gutenberg */
		if ( get_option('d-gutenberg') == true ) {

			/* Old Version */
				if (version_compare($GLOBALS['wp_version'], '5.0-beta', '>')) {
				
					// WP > 5 beta
					add_filter('use_block_editor_for_post_type', '__return_false', 100);
					
				} else {
					
					// WP < 5 beta
					add_filter('gutenberg_can_edit_post_type', '__return_false');
					
				}
				/* Delete style.css from head */
				function smartwp_remove_wp_block_library_css(){
					wp_dequeue_style( 'wp-block-library' );
					wp_dequeue_style( 'wp-block-library-theme' );
				   }
				   add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css' );
			/* Old Version */

			/* New Version */
			// Fully Disable Gutenberg editor.
				add_filter('use_block_editor_for_post_type', '__return_false', 10);
				// Don't load Gutenberg-related stylesheets.
				add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
				function remove_block_css() {
				wp_dequeue_style( 'wp-block-library' ); // WordPress core
				wp_dequeue_style( 'wp-block-library-theme' ); // WordPress core
				wp_dequeue_style( 'wc-block-style' ); // WooCommerce
				wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme

				remove_action( 'wp_enqueue_scripts', 'gutenberg_register_scripts_and_styles' );
				remove_action( 'admin_enqueue_scripts', 'gutenberg_register_scripts_and_styles' );
				remove_action( 'admin_notices', 'gutenberg_wordpress_version_notice' );
				remove_action( 'rest_api_init', 'gutenberg_register_rest_widget_updater_routes' );
				remove_action( 'admin_print_styles', 'gutenberg_block_editor_admin_print_styles' );
				remove_action( 'admin_print_scripts', 'gutenberg_block_editor_admin_print_scripts' );
				remove_action( 'admin_print_footer_scripts', 'gutenberg_block_editor_admin_print_footer_scripts' );
				remove_action( 'admin_footer', 'gutenberg_block_editor_admin_footer' );
				remove_action( 'admin_enqueue_scripts', 'gutenberg_widgets_init' );
				remove_action( 'admin_notices', 'gutenberg_build_files_notice' );
				remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );
	
				remove_filter( 'load_script_translation_file', 'gutenberg_override_translation_file' );
				remove_filter( 'block_editor_settings', 'gutenberg_extend_block_editor_styles' );
				remove_filter( 'default_content', 'gutenberg_default_demo_content' );
				remove_filter( 'default_title', 'gutenberg_default_demo_title' );
				remove_filter( 'block_editor_settings', 'gutenberg_legacy_widget_settings' );
				remove_filter( 'rest_request_after_callbacks', 'gutenberg_filter_oembed_result' );
		
				// Previously used, compat for older Gutenberg versions.
				remove_filter( 'wp_refresh_nonces', 'gutenberg_add_rest_nonce_to_heartbeat_response_headers' );
				remove_filter( 'get_edit_post_link', 'gutenberg_revisions_link_to_editor' );
				remove_filter( 'wp_prepare_revision_for_js', 'gutenberg_revisions_restore' );
		
				remove_action( 'rest_api_init', 'gutenberg_register_rest_routes' );
				remove_action( 'rest_api_init', 'gutenberg_add_taxonomy_visibility_field' );
				remove_filter( 'registered_post_type', 'gutenberg_register_post_prepare_functions' );
		
				remove_action( 'do_meta_boxes', 'gutenberg_meta_box_save' );
				remove_action( 'submitpost_box', 'gutenberg_intercept_meta_box_render' );
				remove_action( 'submitpage_box', 'gutenberg_intercept_meta_box_render' );
				remove_action( 'edit_page_form', 'gutenberg_intercept_meta_box_render' );
				remove_action( 'edit_form_advanced', 'gutenberg_intercept_meta_box_render' );
				remove_filter( 'redirect_post_location', 'gutenberg_meta_box_save_redirect' );
				remove_filter( 'filter_gutenberg_meta_boxes', 'gutenberg_filter_meta_boxes' );
		
				remove_filter( 'body_class', 'gutenberg_add_responsive_body_class' );
				remove_filter( 'admin_url', 'gutenberg_modify_add_new_button_url' ); // old
				remove_action( 'admin_enqueue_scripts', 'gutenberg_check_if_classic_needs_warning_about_blocks' );
				remove_filter( 'register_post_type_args', 'gutenberg_filter_post_type_labels' );


				}
			/* New Version */

		} // wat_disable_gutenberg
	/* Disable Gutenberg */

	/* Disable Html In Comments */
		if ( get_option('d-htmlfromcomments') == true ) {
			add_filter( 'pre_comment_content', 'esc_html' );  // remove html from comemnt
		} // wat_disable_html_in_comments
	/* Disable Html In Comments */

	/* Disable Theme End Plugin File Editors */
		if ( get_option('d-editors') == true ) {
			
			define( 'DISALLOW_FILE_EDIT', true );

		} // wat_disable_editors
	/* Disable Theme End Plugin File Editors */

	/* Disable Comments */
		if ( get_option('d-comments') == true ) {
		
			// Disable support for comments and trackbacks in post types
			function df_disable_comments_post_types_support() {

				$post_types = get_post_types();
				
				foreach ($post_types as $post_type) {
				
				if(post_type_supports($post_type, 'comments')) {
				
				remove_post_type_support($post_type, 'comments');
				
				remove_post_type_support($post_type, 'trackbacks'); } } }
				
				add_action('admin_init', 'df_disable_comments_post_types_support');
				
				// Close comments on the front-end
				
				function df_disable_comments_status() {
				
				return false; }
				
				add_filter('comments_open', 'df_disable_comments_status', 20, 2);
				
				add_filter('pings_open', 'df_disable_comments_status', 20, 2);
				
				// Hide existing comments
				
				function df_disable_comments_hide_existing_comments($comments) {
				
				$comments = array();
				
				return $comments; }
				
				add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);
				
				// Remove comments page in menu
				
				function df_disable_comments_admin_menu() {
				
				remove_menu_page('edit-comments.php'); }
				
				add_action('admin_menu', 'df_disable_comments_admin_menu');
				
				// Redirect any user trying to access comments page
				
				function df_disable_comments_admin_menu_redirect() {
				
				global $pagenow;
				
				if ($pagenow === 'edit-comments.php') {
				
				wp_redirect(admin_url()); exit; } }
				
				add_action('admin_init', 'df_disable_comments_admin_menu_redirect');
				
				// Remove comments metabox from dashboard
				
				function df_disable_comments_dashboard() {
				
				remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); }
				
				add_action('admin_init', 'df_disable_comments_dashboard');
				
				// Remove comments links from admin bar
				
				function df_disable_comments_admin_bar() {
				
				if (is_admin_bar_showing()) {
				
				remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60); } }
				
				add_action('init', 'df_disable_comments_admin_bar');

				/* Disable Comments*/
		} // wat_disable_comments
	/* Disable Comments */

	/* Disable Admin Bar */
		if ( get_option('d-adminbar') == true ) {
			add_filter('show_admin_bar', '__return_false'); // disable admin bar
		}
	/* Disable Admin Bar */

	/* Disable Autosave in Editor */
	    /* ALTERNATIVE EDIT : define ('AUTOSAVE_INTERVAL', 86400);  // IN WP_CONFIG */
		if ( get_option('d-autosave') == true ) {
			add_action( 'admin_init', 'disable_autosave' );
			function disable_autosave() {
			wp_deregister_script( 'autosave' );
			}
		}
	/* Disable Autosave in Editor */

	/* Add SVG Support to WP */
		if ( get_option('d-addsvg') == true ) {
			function add_file_types_to_uploads($file_types){
				$new_filetypes = array();
				$new_filetypes['svg'] = 'image/svg+xml';
				$file_types = array_merge($file_types, $new_filetypes );
				return $file_types;
				}
				add_action('upload_mimes', 'add_file_types_to_uploads');
		}
	/* Add SVG Support To WP */

	/* Disable Screen Options Button */
		if ( get_option('d-screenoptions') == true ) {
			function wpb_remove_screen_options() { 
				if(!current_user_can('manage_options')) {
					return false;
					}
				return true; 
				}
				add_filter('screen_options_show_screen', 'wpb_remove_screen_options');
		}
	/* Disable Screen Options Button */

	/* Disable Rest-API(WP-JSON For Guests) */
		if ( get_option('d-restapi') == true ) {
			add_filter( 'rest_authentication_errors', function( $result ) {
				if ( ! empty( $result ) ) {
				  return $result;
				}
				if ( ! is_user_logged_in() ) {
				  return new WP_Error( 'rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ) );
				}
				return $result;
			  });
		}
	/* Disable Rest-API(WP-JSON For Guests) */

	/* Disable Previous & Next Article Links */
		if ( get_option('d-prenextlinks') == true ) {
			remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
		}
	/* Disable Previous & Next Article Links */

	/* Move Jquery To Google CDN */
		if ( get_option('d-jquerygoogle') == true ) {
			add_action('init', 'use_jquery_from_google');

			function use_jquery_from_google () {
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
		if ( get_option('d-wpcoreautoupdate') == true ) {
			define( 'WP_AUTO_UPDATE_CORE', false );
		}
	/* Disable WP Core Auto Update */

	/* Disable WP Themes Auto Update */
		if ( get_option('d-wpthemeautoupdate') == true ) {
			add_filter( 'auto_update_plugin', '__return_false' );
		}
	/* Disable WP Themes Auto Update */

	/* Disable WP Plugins Auto Update */
		if ( get_option('d-wppluginsautoupdate') == true ) {
			add_filter( 'auto_update_plugin', '__return_false' );
		}
	/* Disable WP Plugins Auto Update */


/* Disable Elements */


/* Add Scripts */
	if (get_option('analyticscode') != NULL) {

		add_action('wp_head', 'add_scripts_to_header');
		function add_scripts_to_header()
		{
			$scripts = '';
			$scripts .= "\n\n<!-- Scripts Included From WAT -->\n";
			$scripts .= stripslashes( get_option( 'analyticscode' ) );
			$scripts .= "\n<!-- Scripts Included From WAT -->\n\n";
			echo $scripts;
		}

	}

/* Add Scripts */





// End Plugin 
?>