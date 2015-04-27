<?php

	function theme_stadsdeelcommunity_get_header_bg()
	{
		global $CONFIG;
		
		$result = false;
		
		if($header_bg = elgg_get_plugin_setting("header_bg", "theme_stadsdeelcommunity"))
		{
			if(file_get_contents($CONFIG->dataroot . "theme_stadsdeelcommunity/template_files/header_" . $CONFIG->site_guid))
			{
				$result = elgg_get_site_url() . "theme_stadsdeelcommunity/header_bg";
			}
		}
		
		if(!$result)
		{
			$result = elgg_get_site_url() . 'mod/theme_stadsdeelcommunity/graphics/header-bg.png';
		}
		
		return $result;
	}
	
	function theme_stadsdeelcommunity_get_site_bg()
	{
		global $CONFIG;
		
		$result = false;
		
		if($header_bg = elgg_get_plugin_setting("site_bg", "theme_stadsdeelcommunity"))
		{
			if(file_get_contents($CONFIG->dataroot . "theme_stadsdeelcommunity/template_files/site_" . $CONFIG->site_guid))
			{
				$result = elgg_get_site_url() . "theme_stadsdeelcommunity/site_bg";
			}
		}
		
		if(!$result)
		{
			$result = elgg_get_site_url() . 'mod/theme_stadsdeelcommunity/graphics/site-bg.jpg';
		}
		
		return $result;
	}

	function theme_stadsdeelcommunity_selector_set_colors()
	{		
		$plugin_setting_colorset = elgg_get_plugin_setting("colorset");

		$colors = array("731472", "E31937", "B91C8D", "FFFFFF", "DAD7D5", "731472", "FFFFFF");
		
		switch($plugin_setting_colorset)
		{
			case "custom":
				if($custom_color_set = json_decode(elgg_get_plugin_setting('colorset_colors', 'theme_stadsdeelcommunity'), true)) {
					foreach($custom_color_set as $key => $color) {
						$colors[$key] = $color;
					}
				}
				break;
			case "green":
				$colors[0] = "206006";
				$colors[1] = "CBE6DB";
				$colors[2] = "329312";
				$colors[5] = "2F910A"; 
				break;
			default:
				break;
		}
		
		define('COLOR_BASIC', 				$colors[0]);
		define('COLOR_NEWS_HEADER', 		$colors[1]);
		define('COLOR_WIDGET_HEADER', 		$colors[2]);
		define('COLOR_WIDGET_HEADER_TEXT', 	$colors[3]);
		define('COLOR_WIDGET_BG', 			$colors[4]);
		define('COLOR_ANCHORS', 			$colors[5]);
		define('COLOR_TRANSPARENCY', 		$colors[6]);		
	}

	function theme_stadsdeelcommunity_get_rgb_from_hex($color)
	{
		$hex1 = substr($color, 0, 2);
		$hex2 = substr($color, 2, 2);
		$hex3 = substr($color, 4, 2);
		
		return implode(',', array(hexdec($hex1),hexdec($hex2),hexdec($hex3)));
	}
	
	

	function theme_stadsdeelcommunity_save_header_bg($header_bg_contents)
	{
		global $CONFIG;
		
		$result = false;
		
		if(!empty($header_bg_contents))
		{
			$path = "theme_stadsdeelcommunity/template_files/";
			
			if(!is_dir($CONFIG->dataroot .$path))
			{
				mkdir($CONFIG->dataroot . $path, 0777, true);
			}
			
			if(file_put_contents($CONFIG->dataroot . $path . "header_" . $CONFIG->site_guid, $header_bg_contents))
			{
				$result = true;
			}
		}
		
		return $result;
	}
	
	function theme_stadsdeelcommunity_save_site_bg($site_bg_contents)
	{
		global $CONFIG;
		
		$result = false;
		
		if(!empty($site_bg_contents))
		{
			$path = "theme_stadsdeelcommunity/template_files/";
			
			if(!is_dir($CONFIG->dataroot .$path))
			{
				mkdir($CONFIG->dataroot . $path, 0777, true);
			}
			
			if(file_put_contents($CONFIG->dataroot . $path . "site_" . $CONFIG->site_guid, $site_bg_contents))
			{
				$result = true;
			}
		}
		
		return $result;
	}
	
	function theme_stadsdeelcommunity_check_json($string)
	{
		json_decode($string);
		return (json_last_error() == JSON_ERROR_NONE);
	}

	