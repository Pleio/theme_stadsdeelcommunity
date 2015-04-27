<?php 

$widget = $vars["entity"];
foreach(array("Boerhavewijk", "Middengebied", "Meerwijk", "Molenwijk", "Europawijk") as $index => $wijk){
	$wijk_code = "schalwijk_wijk_$index";
	$$wijk_code = $widget->$wijk_code;
}

?>
<style type="text/css">
.dark {
	background-color: #C4008C;
}

.middle {
	background-color: #D8549F;
}

.light {
	background-color: #EF6FAB;
}
</style>


<div class="wijk_schalwijk" id="theme_stadsdeelcommunity_map_bg">
	<div id="theme_stadsdeelcommunity_map">
		<img usemap="#wijk_schalwijk" src="<?php echo elgg_get_site_url();?>mod/theme_stadsdeelcommunity/views/default/widgets/theme_stadsdeelcommunity_map/Wijken/Wijken_Schalwijk.png" />
		<map name="wijk_schalwijk">
			<span class="hover_titel"></span>
			<area rel="middle" shape="poly" alt="Boerhavewijk" title="Boerhavewijk" coords="122,93,178,92,191,152,167,144,121,145,120,132,115,130,115,121,121,122,121,93" href="<?php echo $schalwijk_wijk_0;?>" target="" />
			<area rel="light" shape="poly" alt="Middengebied" title="Middengebied" coords="108,123,117,167,129,166,130,145,120,145,121,132,114,130,115,123,110,122" href="<?php echo $schalwijk_wijk_1;?>" target="" />
			<area rel="dark" shape="poly" alt="Meerwijk" title="Meerwijk" coords="151,220,182,199,190,188,194,175,194,168,189,151,167,144,130,145,130,165,127,168,129,174,129,179,131,180,134,193,138,199" href="<?php echo $schalwijk_wijk_2;?>" target="" />
			<area rel="middle" shape="poly" alt="Molenwijk" title="Molenwijk" coords="71,261,76,261,101,254,150,219,132,192,130,178,126,166,118,166,115,173,108,175,69,175,60,179,67,192,72,199,73,211,73,225,76,229,76,238,70,253,70,253" href="<?php echo $schalwijk_wijk_3;?>" target="" />
			<area rel="dark" shape="poly" alt="Europawijk" title="Europawijk" coords="74,86,78,91,91,92,121,92,121,121,107,123,117,164,115,173,107,175,68,175,60,180,56,169,59,162,63,153,64,143,62,135,63,113,60,103,60,93,67,88" href="<?php echo $schalwijk_wijk_4;?>" target="" />
		</map>
	</div>
</div>