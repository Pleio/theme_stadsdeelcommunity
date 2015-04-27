<?php 

$widget = $vars["entity"];
$wijken = array("Vondelkwartier", "Spaarndam", "Delftwijk / Waterbuurt", "Dietsveld - Vogelbuurt", "Sinnevelt", "De Krim", "Indische Buurt Noord", "Sterrenbuurt / Planetenbuurt", "Patrimoniumbuurt", "Stuyvesant / Bomenbuurt", "Schoten Haarlem", "Frans Hals", "Kleverparkbuurt"); 
foreach($wijken as $index => $wijk){
	$wijk_code = "noord_wijk_$index";
	$$wijk_code = $widget->$wijk_code;
}

?>
<style type="text/css">
.dark {
	background-color: #DB6730;
}

.middle {
	background-color: #F17A2D;
}

.light {
	background-color: #F4963A;
}
</style>


<div class="wijk_noord" id="theme_stadsdeelcommunity_map_bg">
	<div id="theme_stadsdeelcommunity_map">
		<img usemap="#wijk_noord" src="<?php echo elgg_get_site_url();?>mod/theme_stadsdeelcommunity/views/default/widgets/theme_stadsdeelcommunity_map/Wijken/Wijken_Noord.png" />
		<map name="wijk_noord">
			<span class="hover_titel"></span>
			<area rel="dark" shape="poly" alt="<?php echo $wijken[0]; ?>" title="<?php echo $wijken[0]; ?>" coords="119,61,158,77,172,78,191,94,190,108,182,115,168,142,142,142,139,136,120,125,118,126,110,97,105,95,111,85,109,73,113,72,117,66" href="<?php echo $noord_wijk_0;?>" target="" />
			<area rel="middle" shape="poly" alt="<?php echo $wijken[1]; ?>" title="<?php echo $wijken[1]; ?>" coords="200,166,207,162,228,146,224,107,201,114,192,96,189,108,182,115,167,142,192,165" href="<?php echo $noord_wijk_1;?>" target="" />
			<area rel="middle" shape="poly" alt=<?php echo $wijken[2]; ?>" title="<?php echo $wijken[2]; ?>" coords="86,134,105,96,109,98,117,127,121,152,122,163,113,152,100,141,83,137" href="<?php echo $noord_wijk_2;?>" target="" />
			<area rel="light" shape="poly" alt="<?php echo $wijken[3]; ?>" title="<?php echo $wijken[3]; ?>" coords="154,194,161,190,166,179,192,165,167,142,142,142,140,137,120,126,116,126,122,153,122,162,135,182" href="<?php echo $noord_wijk_3;?>" target="" />
			<area rel="light" shape="poly" alt="<?php echo $wijken[4]; ?>" title="<?php echo $wijken[4]; ?>" coords="72,157,83,137,100,141,121,163,120,167,90,181,84,185,66,179" href="<?php echo $noord_wijk_4;?>" target="" />
			<area rel="dark" shape="poly" alt="<?php echo $wijken[5]; ?>" title="<?php echo $wijken[5]; ?>" coords="58,153,72,157,66,179,59,191,40,225,34,226,34,226" href="<?php echo $noord_wijk_5;?>" target="" />
			<area rel="dark" shape="poly" alt="<?php echo $wijken[6]; ?>" title="<?php echo $wijken[6]; ?>" coords="129,218,134,207,140,203,154,194,135,182,121,161,112,195,102,209" href="<?php echo $noord_wijk_6;?>" target="" />			
			<area rel="middle" shape="poly" alt="<?php echo $wijken[7]; ?>" title="<?php echo $wijken[7]; ?>" coords="102,208,82,207,78,203,70,202,59,192,66,179,84,186,119,168,112,194" href="<?php echo $noord_wijk_7;?>" target="" />
			<area rel="light" shape="poly" alt="<?php echo $wijken[8]; ?>" title="<?php echo $wijken[8]; ?>" coords="110,290,115,285,117,270,103,266,97,262,94,266,87,264,85,274,91,275,97,273,99,281,107,284" href="<?php echo $noord_wijk_8;?>" target="" />
			<area rel="light" shape="poly" alt="<?php echo $wijken[9]; ?>" title="<?php echo $wijken[9]; ?>" coords="86,247,73,242,63,239,65,232,42,226,58,192,70,202,76,203,82,208,103,209,100,223,92,233" href="<?php echo $noord_wijk_9;?>" target="" />
			<area rel="middle" shape="poly" alt="<?php echo $wijken[10]; ?>" title="<?php echo $wijken[10]; ?>" coords="129,218,103,209,101,221,92,233,86,246,85,256,86,264,94,266,98,262,104,267,117,270" href="<?php echo $noord_wijk_10;?>" target="" />
			<area rel="dark" shape="poly" alt="<?php echo $wijken[11]; ?>" title="<?php echo $wijken[11]; ?>" coords="65,271,68,256,66,252,70,243,85,247,86,265,85,274,81,271,75,272,71,268" href="<?php echo $noord_wijk_11;?>" target="" />
			<area rel="middle" shape="poly" alt="<?php echo $wijken[12]; ?>" title="<?php echo $wijken[12]; ?>" coords="57,278,41,274,32,258,33,252,30,250,30,242,34,226,42,226,65,233,64,238,74,243,69,245,67,251,67,255,65,272,56,271" href="<?php echo $noord_wijk_12;?>" target="" />
		</map>
	</div>
</div>