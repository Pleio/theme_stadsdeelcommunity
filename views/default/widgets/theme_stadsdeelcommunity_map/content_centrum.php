<?php

$widget = $vars["entity"];
$wijken = array("Vijfhoek / Raaks / Doelen", "Heiliglanden - De Kamp", "Binnenstad", "Burgwal");
foreach($wijken as $index => $wijk){
	$wijk_code = "centrum_wijk_$index";
	$$wijk_code = $widget->$wijk_code;
}

?>
<style type="text/css">
.dark {
	background-color: #720371;
}

.middle {
	background-color: #B70A8C;
}

.light {
	background-color: #D8549F;
}
</style>


<div class="wijk_centrum" id="theme_stadsdeelcommunity_map_bg">
	<div id="theme_stadsdeelcommunity_map">
		<img usemap="#wijk_centrum" src="<?php echo elgg_get_site_url();?>mod/theme_stadsdeelcommunity/views/default/widgets/theme_stadsdeelcommunity_map/Wijken/Wijken_Centrum.png" />
		<map name="wijk_centrum">
			<span class="hover_titel"></span>
			<area rel="middle" shape="poly" alt="<?php echo $wijken[0]; ?>" title="<?php echo $wijken[0]; ?>" coords="92,206,117,162,129,171,133,187,137,190,129,201,124,219,113,215,105,211,99,206" href="<?php echo $centrum_wijk_0;?>" target="" />
			<area rel="light" shape="poly" alt="<?php echo $wijken[1]; ?>" title="<?php echo $wijken[1]; ?>" coords="155,221,124,218,130,201,137,191,152,205,163,205,168,213,154,220,157,221" href="<?php echo $centrum_wijk_1;?>" target="" />
			<area rel="dark" shape="poly" alt="<?php echo $wijken[2]; ?>" title="<?php echo $wijken[2]; ?>" coords="128,107,133,102,143,106,150,101,151,101,158,107,167,104,177,110,191,108,194,119,197,122,207,123,207,130,210,133,209,137,195,145,186,151,184,156,186,163,195,169,196,176,193,180,185,184,171,186,165,189,165,189,161,194,161,202,163,206,153,204,138,192,133,186,129,168,119,162,126,145,127,135,123,126,130,123,129,112,129,112" href="<?php echo $centrum_wijk_2;?>" target="" />
			<area shape="poly" alt="<?php echo $wijken[3]; ?>" title="<?php echo $wijken[3]; ?>" coords="178,215,171,211,163,202,160,193,167,184,163,186,178,183,186,180,196,173,204,183,198,189,192,198,185,207," href="<?php echo $centrum_wijk_3;?>" />
		</map>
	</div>
</div>