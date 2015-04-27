<?php

	$stadsdeel = $vars['entity']->stadsdeel;
	if($stadsdeel){
	
		
		echo "<div class='widget-citymap'>";
		echo "<img src='" . $vars["entity"]->background . "' />";
		echo "<div class='widget-citymap-title'>" . elgg_echo("theme_stadsdeelcommunity:widget:citymap:caption", array(ucfirst($vars["entity"]->stadsdeel))) . "</div>";
		echo "<div class='widget-citymap-subtitle'>" . $vars["entity"]->subtitle . "</div>";
		
		echo "<div class='widget-citymap-map'>";
		include(dirname(__FILE__) . "/content_{$stadsdeel}.php");
		echo "</div>";
		
		echo "</div>";
		
		
	} 