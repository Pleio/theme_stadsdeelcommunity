<?php

$widget = $vars["entity"];
$wijken = array("Parkwijk - Zuiderpolder", "Waarderpolder", "Nieuwe Amsterdamse Buurt", "Slachthuisbuurt", "Oude Amsterdamse Buurt", "Burgwal", "Scheepmakersdijk e.o.", "Sportheldenbuurt");
foreach($wijken as $index => $wijk){
	$wijk_code = "oost_wijk_$index";
	$$wijk_code = $widget->$wijk_code;
}

?>
<style type="text/css">
.dark {
	background-color: #266DB8;
}

.middle {
	background-color: #38A6E1;
}

.light {
	background-color: #74CBF5;
}
</style>


<div class="wijk_oost" id="theme_stadsdeelcommunity_map_bg">
	<div id="theme_stadsdeelcommunity_map">
		<img usemap="#wijk_oost" src="<?php echo elgg_get_site_url();?>mod/theme_stadsdeelcommunity/views/default/widgets/theme_stadsdeelcommunity_map/Wijken/Wijken_Oost.png" />
		<map name="wijk_oost">
			<span class="hover_titel"></span>
			<area rel="middle" shape="poly" alt="<?php echo $wijken[0]; ?>" title="<?php echo $wijken[0]; ?>" coords="121,211,205,202,202,207,169,244,158,258,156,274,100,274,100,265,113,245,120,221,121,213" href="<?php echo $oost_wijk_0;?>" target="" />
			<area rel="dark" shape="poly" alt="<?php echo $wijken[1]; ?>" title="<?php echo $wijken[1]; ?>" coords="160,62,167,72,167,76,162,81,149,90,150,103,181,116,181,118,171,129,164,149,167,161,179,169,191,166,195,177,209,183,204,202,121,211,77,215,78,206,85,193,90,199,94,200,90,182,86,180,93,130,105,102,120,92,130,85,135,76" href="<?php echo $oost_wijk_1;?>" target="" />
			<area rel="light" shape="poly" alt="<?php echo $wijken[2]; ?>" title="<?php echo $wijken[2]; ?>" coords="84,237,93,213,120,212,120,220,113,248,99,246,99,241,87,239" href="<?php echo $oost_wijk_2;?>" target="" />
			<area rel="dark" shape="poly" alt="<?php echo $wijken[3]; ?>" title="<?php echo $wijken[3]; ?>" coords="99,273,100,264,111,248,99,247,99,241,84,237,58,240,61,245,62,251,59,259,54,267,55,270,59,273,74,272" href="<?php echo $oost_wijk_3;?>" target="" />
			<area rel="middle" shape="poly" alt="<?php echo $wijken[4]; ?>" title="<?php echo $wijken[4]; ?>" coords="75,216,59,239,85,237,93,212,79,215" href="<?php echo $oost_wijk_4;?>" target="" />
<?php /*			<area rel="dark" shape="poly" alt="<?php echo $wijken[5]; ?>" title="<?php echo $wijken[5]; ?>" coords="48,223,45,228,48,233,52,237,59,237,72,218,68,214" href="<?php echo $oost_wijk_5;?>" target="" /> */ ?>
			<area rel="light" shape="poly" alt="<?php echo $wijken[6]; ?>" title="<?php echo $wijken[6]; ?>" coords="61,200,78,188,84,196,76,207,77,214,72,220,68,213,68,208" href="<?php echo $oost_wijk_6;?>" target="" />
			<area rel="middle" shape="poly" alt="<?php echo $wijken[7]; ?>" title="<?php echo $wijken[7]; ?>" coords="77,187,85,181,90,182,94,199,90,199,84,190,84,197" href="<?php echo $oost_wijk_7;?>" target="" />
		</map>
	</div>
</div>