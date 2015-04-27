<?php 

	global $CONFIG;

	admin_gatekeeper();
	
	$colorset		= get_input('colorset');
	$custom_colors 	= get_input('custom_color');
	
	if($_FILES['header_bg']['tmp_name']) {
		if($header_bg_contents = get_uploaded_file('header_bg')) {
			if(theme_stadsdeelcommunity_save_header_bg($header_bg_contents)) {
				$path = "theme_stadsdeelcommunity/template_files/";
				if(!file_exists($CONFIG->dataroot . $path . "header_" . $CONFIG->site_guid)) {
					$error_count++;
					register_error(elgg_echo("theme_stadsdeelcommunity:template:error:header_bg"));
				} else {
					elgg_set_plugin_setting('header_bg', 'custom', 'theme_stadsdeelcommunity');
				}
			}
		}
	}
	
	if($_FILES['site_bg']['tmp_name']) {
		if($site_bg_contents = get_uploaded_file('site_bg')) {
			if(theme_stadsdeelcommunity_save_site_bg($site_bg_contents)) {
				$path = "theme_stadsdeelcommunity/template_files/";
				if(!file_exists($CONFIG->dataroot . $path . "site_" . $CONFIG->site_guid)) {
					$error_count++;
					register_error(elgg_echo("theme_stadsdeelcommunity:template:error:site_bg"));
				} else {
					elgg_set_plugin_setting('site_bg', 'custom', 'theme_stadsdeelcommunity');
				}
			}
		}
	}
	
	elgg_set_plugin_setting('colorset', $colorset, 'theme_stadsdeelcommunity');
	
	if($colorset == 'custom') {
		elgg_set_plugin_setting('colorset_colors', json_encode($custom_colors), 'theme_stadsdeelcommunity');
	}
	
	if(!$error_count) {
		elgg_regenerate_simplecache();
		elgg_invalidate_simplecache(); 
		elgg_filepath_cache_reset();
		
		system_message(elgg_echo("theme_stadsdeelcommunity:template:success"));
	} else {
		register_error(elgg_echo("theme_stadsdeelcommunity:template:error"));
	}
	
	forward(REFERER);