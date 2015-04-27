<?php 

$widget = $vars["entity"];
$wijken = array("Bosch en Vaart", "Zuiderhout Vredenhof", "Rozenprieel", "Welgelegen", "Koninginnebuurt");
foreach($wijken as $index => $wijk){
	$wijk_code = "zuid_wijk_$index";
	$$wijk_code = $widget->$wijk_code;
}

?>
<style type="text/css">
.dark {
	background-color: #1C743C;
}

.middle {
	background-color: #2DB44C;
}

.light {
	background-color: #6EC256;
}
</style>

<div class="wijk_zuid" id="theme_stadsdeelcommunity_map_bg">
	<div id="theme_stadsdeelcommunity_map">
		<img usemap="#wijk_zuid" src="<?php echo elgg_get_site_url();?>mod/theme_stadsdeelcommunity/views/default/widgets/theme_stadsdeelcommunity_map/Wijken/Wijken_Zuid.png" />
		<map name="wijk_zuid">
			<span class="hover_titel"></span>
			<area rel="middle" shape="poly" alt="<?php echo $wijken[0]; ?>" title="<?php echo $wijken[0]; ?>" coords="38,221,79,149,95,152,97,160,109,164,109,167,120,167,125,169,125,171,128,172,129,179,121,203,79,205,75,218,73,231" href="<?php echo $zuid_wijk_0;?>" target="" />
			<area rel="dark" shape="poly" alt="<?php echo $wijken[1]; ?>" title="<?php echo $wijken[1]; ?>" coords="170,233,155,238,142,238,139,240,119,231,115,227,109,227,106,229,92,229,89,231,81,230,73,231,79,205,120,203,129,180,129,166,133,164,141,161,144,164,147,165,150,160,157,165,159,163,169,165,167,171,168,177,170,188,172,197,169,217" href="<?php echo $zuid_wijk_1;?>" target="" />
			<area rel="dark" shape="poly" alt="<?php echo $wijken[2]; ?>" title="<?php echo $wijken[2]; ?>" coords="187,105,198,108,203,118,202,130,197,141,189,150,179,142,157,133,164,112,170,112" href="<?php echo $zuid_wijk_2;?>" target="" />
			<area rel="middle" shape="poly" alt="<?php echo $wijken[3]; ?>" title="<?php echo $wijken[3]; ?>" coords="122,102,133,108,140,111,162,112,157,134,178,142,190,150,175,156,168,165,158,163,157,165,151,161,146,165,144,164,141,161,128,166,129,159,133,150,127,138,127,130,125,127,126,121,122,117" href="<?php echo $zuid_wijk_3;?>" target="" />
			<area rel="light" shape="poly" alt="<?php echo $wijken[4]; ?>" title="<?php echo $wijken[4]; ?>" coords="110,98,118,99,121,101,121,116,125,120,125,127,128,130,127,138,134,150,128,159,129,173,125,171,124,168,118,167,109,167,108,163,97,159,96,150,79,149" href="<?php echo $zuid_wijk_4;?>" target="" />
		</map>
	</div>
</div>