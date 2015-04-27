<?php 

$widget = $vars["entity"];
$wijken = array("Garenkokerskwartier", "Leidsebuurt", "Zijlweg West i.o.", "Ramplaankwartier", "Oosterduin", "Zuid - West");
foreach($wijken as $index => $wijk){
	$wijk_code = "west_wijk_$index";
	$$wijk_code = $widget->$wijk_code;
}

?>
<style type="text/css">
.dark {
	background-color: #224D8E;
}

.middle {
	background-color: #266DB8;
}

.light {
	background-color: #4088CA;
}
</style>

<div class="wijk_west" id="theme_stadsdeelcommunity_map_bg">
	<div id="theme_stadsdeelcommunity_map">
		<img usemap="#wijk_west" src="<?php echo elgg_get_site_url();?>mod/theme_stadsdeelcommunity/views/default/widgets/theme_stadsdeelcommunity_map/Wijken/Wijken_West.png" />
		<map name="wijk_west">
			<span class="hover_titel"></span>
			<area rel="middle" shape="poly" alt="<?php echo $wijken[0]; ?>" title="<?php echo $wijken[0]; ?>" coords="139,94,144,103,148,108,165,112,165,118,161,119,161,123,164,126,160,137,154,145,125,135" href="<?php echo $west_wijk_0;?>" target="" />
			<area rel="light" shape="poly" alt="<?php echo $wijken[1]; ?>" title="<?php echo $wijken[1]; ?>" coords="138,174,154,145,125,135,116,161" href="<?php echo $west_wijk_1;?>" target="" />
			<area rel="dark" shape="poly" alt="<?php echo $wijken[2]; ?>" title="<?php echo $wijken[2]; ?>" coords="95,104,131,115,119,153,106,150,108,144,107,133,88,127" href="<?php echo $west_wijk_2;?>" target="" />
			<area rel="light" shape="poly" alt="<?php echo $wijken[3]; ?>" title="<?php echo $wijken[3]; ?>" coords="59,162,59,145,61,145,62,136,71,131,72,128,80,127,81,125,107,133,107,144,107,152,94,180" href="<?php echo $west_wijk_3;?>" target="" />
			<area rel="dark" shape="poly" alt="<?php echo $wijken[4]; ?>" title="<?php echo $wijken[4]; ?>" coords="81,228,89,210,94,179,59,162,57,175,63,199,74,204,71,218,72,220,72,224" href="<?php echo $west_wijk_4;?>" target="" />
			<area rel="middle" shape="poly" alt="<?php echo $wijken[5]; ?>" title="<?php echo $wijken[5]; ?>" coords="94,250,76,247,82,226,90,208,94,179,94,179,107,151,119,152,115,161,138,174" href="<?php echo $west_wijk_5;?>" target="" />
		</map>
	</div>
</div>