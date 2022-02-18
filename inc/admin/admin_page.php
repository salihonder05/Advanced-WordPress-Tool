<?php 
add_action('admin_menu', 'wat_admin_menu_option');

function wat_admin_menu_option()
{
    add_menu_page('Advanced Tools v1.0.0', 'Advanced Tools', 'manage_options', 'wat-admin-menu', 'wat_admin_menu_page', 'dashicons-hammer', 200);
} //wat_admin_menu_option Function

function wat_admin_menu_page()
{

    /* Screen Settings */ ?>
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
		<h1>Advanced WordPress Tools <small>v<?php echo ADVANCED_WORDPRESS_TOOLBOX_VERSION; ?></small></h1>
		<?php
    /* Screen Settings */

    /* Process Request */

        if (array_key_exists('submit-disable-scripts', $_POST)) {
            if (isset($_POST['d-xmlrpc'])) {
                update_option('d-xmlrpc', true);
            } else {
                update_option('d-xmlrpc', false);
            }

            if (isset($_POST['d-emojis'])) {
                update_option('d-emojis', true);
            } else {
                update_option('d-emojis', false);
            }

            if (isset($_POST['d-version'])) {
                update_option('d-version', true);
            } else {
                update_option('d-version', false);
            }

            if (isset($_POST['d-screenoptions'])) {
                update_option('d-screenoptions', true);
            } else {
                update_option('d-screenoptions', false);
            }

            if (isset($_POST['d-manifest'])) {
                update_option('d-manifest', true);
            } else {
                update_option('d-manifest', false);
            }

            if (isset($_POST['d-shortlink'])) {
                update_option('d-shortlink', true);
            } else {
                update_option('d-shortlink', false);
            }

            if (isset($_POST['d-editors'])) {
                update_option('d-editors', true);
            } else {
                update_option('d-editors', false);
            }

            if (isset($_POST['d-querystrings'])) {
                update_option('d-querystrings', true);
            } else {
                update_option('d-querystrings', false);
            }

            if (isset($_POST['d-apilink'])) {
                update_option('d-apilink', true);
            } else {
                update_option('d-apilink', false);
            }

            if (isset($_POST['d-dnslink'])) {
                update_option('d-dnslink', true);
            } else {
                update_option('d-dnslink', false);
            }

            if (isset($_POST['d-embedlink'])) {
                update_option('d-embedlink', true);
            } else {
                update_option('d-embedlink', false);
            }

            if (isset($_POST['d-rsslink'])) {
                update_option('d-rsslink', true);
            } else {
                update_option('d-rsslink', false);
            }

            if (isset($_POST['d-gutenberg'])) {
                update_option('d-gutenberg', true);
            } else {
                update_option('d-gutenberg', false);
            }
            
            if (isset($_POST['d-comments'])) {
                update_option('d-comments', true);
            } else {
                update_option('d-comments', false);
            }
            
            if (isset($_POST['d-adminbar'])) {
                update_option('d-adminbar', true);
            } else {
                update_option('d-adminbar', false);
            }
            
            if (isset($_POST['d-htmlfromcomments'])) {
                update_option('d-htmlfromcomments', true);
            } else {
                update_option('d-htmlfromcomments', false);
            }

            if (isset($_POST['d-autosave'])) {
                update_option('d-autosave', true);
            } else {
                update_option('d-autosave', false);
            }

            if (isset($_POST['d-addsvg'])) {
                update_option('d-addsvg', true);
            } else {
                update_option('d-addsvg', false);
            }
            
            if (isset($_POST['d-restapi'])) {
                update_option('d-restapi', true);
            } else {
                update_option('d-restapi', false);
            }
            
            if (isset($_POST['d-prenextlinks'])) {
                update_option('d-prenextlinks', true);
            } else {
                update_option('d-prenextlinks', false);
            }

            if (isset($_POST['d-jquerygoogle'])) {
                update_option('d-jquerygoogle', true);
            } else {
                update_option('d-jquerygoogle', false);
            }

            if (isset($_POST['d-wpcoreautoupdate'])) {
                update_option('d-wpcoreautoupdate', true);
            } else {
                update_option('d-wpcoreautoupdate', false);
            }
            
            if (isset($_POST['d-wpthemeautoupdate'])) {
                update_option('d-wpthemeautoupdate', true);
            } else {
                update_option('d-wpthemeautoupdate', false);
            }

            if (isset($_POST['d-wppluginsautoupdate'])) {
                update_option('d-wppluginsautoupdate', true);
            } else {
                update_option('d-wppluginsautoupdate', false);
            }



            echo '<div id="setting-error-settings_updated" class="notice notice-success settings-error is-dismissible"> 
			<p><strong>Ayarlar kaydedildi.</strong></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Bu mesajı gizle.</span></button></div>';
        } // ENDIF

    if (array_key_exists('submit-header-scripts', $_POST)) {
        if (isset($_POST['analyticscode'])) {
            $value = $_POST['analyticscode'];
            update_option('analyticscode', $value);
        } else {
            update_option('analyticscode', null);
        }


        echo '<div id="setting-error-settings_updated" class="notice notice-success settings-error is-dismissible"> 
			<p><strong>Ayarlar kaydedildi.</strong></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Bu mesajı gizle.</span></button></div>';
    } // ENDIF

    /* Process Request */

    /* Generate Form */ ?>
			<form action="" method="post">
				<h2><?php _e('Select Options', 'advanced-wordpress-tool')?></h2>
				<small><?php _e('Please select the items you want to disable.', 'advanced-wordpress-tool')?></small>
				<br> <br>
				
				<fieldset>
					<label for="toggleCheckboxes">
					<input type="checkbox" name="toggleCheckboxes" id="toggleCheckboxes" onClick="toggle(this)" />
					<?php _e('Toggle All', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<hr>

					
				<fieldset>
					<label for="d-xmlrpc">
					<input type="checkbox" class="regular-text" name="d-xmlrpc" id="d-xmlrpc" 
					<?php if (get_option('d-xmlrpc')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable XMLRPC', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-emojis">
					<input type="checkbox" class="regular-text" name="d-emojis" id="d-emojis"
					<?php if (get_option('d-emojis')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable WP Emojis', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-version">
					<input type="checkbox" class="regular-text" name="d-version" id="d-version"
					<?php if (get_option('d-version')) {
        echo 'checked';
    } ?>>
					
					<?php _e('Disable WP Version Number', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-manifest">
					<input type="checkbox" class="regular-text" name="d-manifest" id="d-manifest"
					<?php if (get_option('d-manifest')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable Manifest', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-shortlink">
					<input type="checkbox" class="regular-text" name="d-shortlink" id="d-shortlink"
					<?php if (get_option('d-shortlink')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable Shortlink', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-querystrings">
					<input type="checkbox" class="regular-text" name="d-querystrings" id="d-querystrings"
					<?php if (get_option('d-querystrings')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable Query Strings All Static Resources', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-apilink">
					<input type="checkbox" class="regular-text" name="d-apilink" id="d-apilink"
					<?php if (get_option('d-apilink')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable  api.w.org Relation Link', 'advanced-wordpress-tool')?>
					</label>
				</fieldset>
				<fieldset>
					<label for="d-restapi">
					<input type="checkbox" class="regular-text" name="d-restapi" id="d-restapi"
					<?php if (get_option('d-restapi')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable  Rest API for Guests (site.com/wp-json)', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-dnslink">
					<input type="checkbox" class="regular-text" name="d-dnslink" id="d-dnslink"
					<?php if (get_option('d-dnslink')) {
        echo 'checked';
    } ?>><?php _e('Disable Dns Prefetch Link', 'advanced-wordpress-tool')?>
					</label>
				</fieldset>
				<fieldset>
					<label for="d-embedlink">
					<input type="checkbox" class="regular-text" name="d-embedlink" id="d-embedlink"
					<?php if (get_option('d-embedlink')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable WP Embed Link', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-rsslink">
					<input type="checkbox" class="regular-text" name="d-rsslink" id="d-rsslink"
					<?php if (get_option('d-rsslink')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable RSS Links', 'advanced-wordpress-tool')?>
					</label>
				</fieldset>
				<fieldset>
					<label for="d-gutenberg">
					<input type="checkbox" class="regular-text" name="d-gutenberg" id="d-gutenberg"
					<?php if (get_option('d-gutenberg')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable Gutenberg Editor', 'advanced-wordpress-tool')?>
					</label>
				</fieldset>
				<fieldset>
					<label for="d-editors">
					<input type="checkbox" class="regular-text" name="d-editors" id="d-editors"
					<?php if (get_option('d-editors')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable Theme/Plugin File Editors', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-htmlfromcomments">
					<input type="checkbox" class="regular-text" name="d-htmlfromcomments" id="d-htmlfromcomments"
					<?php if (get_option('d-htmlfromcomments')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable Html In Comments (For Safe Comments)', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-comments">
					<input type="checkbox" class="regular-text" name="d-comments" id="d-comments"
					<?php if (get_option('d-comments')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable Comment System', 'advanced-wordpress-tool')?>
					 <small><?php _e('You must remove frontend components.', 'advanced-wordpress-tool')?></small></label>
				</fieldset>
				<fieldset>
					<label for="d-adminbar">
					<input type="checkbox" class="regular-text" name="d-adminbar" id="d-adminbar"
					<?php if (get_option('d-adminbar')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable Admin Bar From Frontend', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-autosave">
					<input type="checkbox" class="regular-text" name="d-autosave" id="d-autosave"
					<?php if (get_option('d-autosave')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable Auto Save (In Edit Screens)', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-addsvg">
					<input type="checkbox" class="regular-text" name="d-addsvg" id="d-addsvg"
					<?php if (get_option('d-addsvg')) {
        echo 'checked';
    } ?>>
					<?php _e('Add SVG Support (Media - Upload)', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-screenoptions">
					<input type="checkbox" class="regular-text" name="d-screenoptions" id="d-screenoptions"
					<?php if (get_option('d-screenoptions')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable Screen Options Button (Administrators Excluded)', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-prenextlinks">
					<input type="checkbox" class="regular-text" name="d-prenextlinks" id="d-prenextlinks"
					<?php if (get_option('d-prenextlinks')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable Previous and Next Article Links From Head (Html)', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-jquerygoogle">
					<input type="checkbox" class="regular-text" name="d-jquerygoogle" id="d-jquerygoogle"
					<?php if (get_option('d-jquerygoogle')) {
        echo 'checked';
    } ?>>
					<?php _e('Move Jquery To Google CDN From Wp-Includes', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-wpcoreautoupdate">
					<input type="checkbox" class="regular-text" name="d-wpcoreautoupdate" id="d-wpcoreautoupdate"
					<?php if (get_option('d-wpcoreautoupdate')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable WP Core Auto Update', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-wpthemeautoupdate">
					<input type="checkbox" class="regular-text" name="d-wpthemeautoupdate" id="d-wpthemeautoupdate"
					<?php if (get_option('d-wpthemeautoupdate')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable Themes Auto Update', 'advanced-wordpress-tool')?></label>
				</fieldset>
				<fieldset>
					<label for="d-wppluginsautoupdate">
					<input type="checkbox" class="regular-text" name="d-wppluginsautoupdate" id="d-wppluginsautoupdate"
					<?php if (get_option('d-wppluginsautoupdate')) {
        echo 'checked';
    } ?>>
					<?php _e('Disable Plugins Auto Update', 'advanced-wordpress-tool')?></label>
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
					<input type="submit" name="submit-disable-scripts" class="button button-primary" value="<?php _e('Save Settings', 'advanced-wordpress-tool')?>">
				</fieldset>

			</form>

			<form action="" method="post">
				<h2><?php _e('Add Scripts (To Header)', 'advanced-wordpress-tool')?></h2>
				<small><?php _e('- Your Google Analytics, Yandex Metrica, Facebook Pixel etc. Codes. ', 'advanced-wordpress-tool')?></small> <br>
				<small><?php _e('- Google Fonts, JS Libraries or more ', 'advanced-wordpress-tool')?></small> <br>
				<br>
				<fieldset>
					<textarea name="analyticscode" id="analyticscode" rows="20"><?php if (get_option('analyticscode')) {
        echo get_option('analyticscode');
    } ?></textarea>
				</fieldset>



				<br>
				<fieldset>
					<input type="submit" name="submit-header-scripts" class="button button-primary" value="<?php _e('Save Settings', 'advanced-wordpress-tool')?>">
				</fieldset>
			</form>
		<?php
    /* Generate Form */
} //wat_admin_menu_page Function
