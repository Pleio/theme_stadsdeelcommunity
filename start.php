<?php

	require_once(dirname(__FILE__) . '/lib/functions.php');

	elgg_register_event_handler('init', 		'system', 'theme_stadsdeelcommunity_init');

	function theme_stadsdeelcommunity_init() {
		theme_stadsdeelcommunity_selector_set_colors();
		
		elgg_extend_view("css/elgg", "widgets/theme_stadsdeelcommunity_map/css");
		
		elgg_register_css('colorpicker', 	elgg_get_site_url() . 'mod/theme_stadsdeelcommunity/vendors/colorpicker/css/colorpicker.css');
		elgg_register_js('colorpicker', 	elgg_get_site_url() . 'mod/theme_stadsdeelcommunity/vendors/colorpicker/js/colorpicker.js');
		
		elgg_register_page_handler('theme_stadsdeelcommunity', 'theme_stadsdeelcommunity_page_handler');

		if(elgg_is_admin_logged_in()) {
			elgg_register_menu_item('page', array(
				'name' 			=> "theme_stadsdeelcommunity_settings",
				'href' 			=> "admin/theme_stadsdeelcommunity/settings",
				'text' 			=> elgg_echo("theme_stadsdeelcommunity:menu:title"),
				'context' 		=> "admin",
				'parent_name' 	=> "appearance",
				'section' 		=> "configure"
			));
		}
		
		elgg_register_action('template/save', 			dirname(__FILE__) . '/actions/template/save.php', 			'admin');
		elgg_register_action('template/delete_header', 	dirname(__FILE__) . '/actions/template/delete_header.php', 	'admin');
		elgg_register_action('template/delete_bg', 		dirname(__FILE__) . '/actions/template/delete_bg.php', 		'admin');
		
		elgg_register_widget_type('theme_stadsdeelcommunity_map', elgg_echo("theme_stadsdeelcommunity:widget:citymap:title"), elgg_echo("theme_stadsdeelcommunity:widget:citymap:description"), "index", true);
		
		elgg_register_plugin_hook_handler("public_pages", "walled_garden", "theme_stadsdeelcommunity_walled_garden_hook");
	}

	function theme_stadsdeelcommunity_page_handler($page, $handler) {
		switch($page[0]) {
			case "header_bg":
					include(dirname(__FILE__) . "/pages/header_bg.php");
				break;
			case "site_bg":
					include(dirname(__FILE__) . "/pages/site_bg.php");
				break;
			default:
				return false;
		}
	}
	
	function theme_stadsdeelcommunity_walled_garden_hook($hook_name, $entity_type, $return_value, $params) {
		$result = $return_value;
	
		// add simplesaml to the public pages
		$result[] = "theme_stadsdeelcommunity/.*";
	
		return $result;
	}
	