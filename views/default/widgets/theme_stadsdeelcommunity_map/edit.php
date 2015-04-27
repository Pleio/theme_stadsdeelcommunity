<?php


// set default value
if (!isset($vars['entity']->stadsdeel)) {
	$vars['entity']->stadsdeel = 'centrum';
}

$params = array(
	'class' => 'widgets-citymap-district',
	'name' => 'params[stadsdeel]',
	'value' => $vars['entity']->stadsdeel,
	'options' => array('noord', 'zuid', 'oost', 'west', 'centrum', 'schalkwijk'),
);
$dropdown = elgg_view('input/dropdown', $params);

?>
<div>
	<?php echo elgg_echo('theme_stadsdeelcommunity:widget:citymap:subtitle'); ?>:
	<?php echo elgg_view("input/text", array("name" => "params[subtitle]", "value" => $vars["entity"]->subtitle)); ?>
</div>
<div>
	<?php echo elgg_echo('theme_stadsdeelcommunity:widget:citymap:background'); ?>:
	<?php echo elgg_view("input/text", array("name" => "params[background]", "value" => $vars["entity"]->background)); ?>
</div>

<div>
	<?php echo elgg_echo('theme_stadsdeelcommunity:widget:citymap:district'); ?>:
	<?php echo $dropdown; ?>
</div>
<div class='widgets-citymap-districts'>
	<?php
		$class = " hidden";
		if($vars["entity"]->stadsdeel == "noord"){
			$class = "";
		}
	?>
	<div class='widgets-citymap-district-noord<?php echo $class; ?>'>
		<label><?php echo elgg_echo("theme_stadsdeelcommunity:widget:citymap:area");?></label>
		<br/>
		<?php
			foreach(array("Vondelkwartier", "Spaarndam", "Delftwijk / Waterbuurt", "Dietsveld - Vogelbuurt", "Sinnevelt", "De Krim", "Indische Buurt Noord", "Sterrenbuurt / Planetenbuurt", "Patrimoniumbuurt", "Stuyvesant / Bomenbuurt", "Schoten Haarlem", "Frans Hals", "Kleverparkbuurt") as $index => $wijk){
				$wijk_code = "noord_wijk_$index";
				echo $wijk . ": " . elgg_view("input/text", array("name" => "params[noord_wijk_" . $index . "]", "value" => $vars["entity"]->$wijk_code));
			}
		
		?>
	</div>

	<?php
		$class = " hidden";
		if($vars["entity"]->stadsdeel == "zuid"){
			$class = "";
		}
	?>
	<div class='widgets-citymap-district-zuid<?php echo $class; ?>'>
		<label><?php echo elgg_echo("theme_stadsdeelcommunity:widget:citymap:area");?></label>
		<br/>
		<?php
			foreach(array("Bosch en Vaart", "Zuiderhout Vredenhof", "Rozenprieel", "Welgelegen", "Koninginnebuurt") as $index => $wijk){
				$wijk_code = "zuid_wijk_$index";
				echo $wijk . ": " . elgg_view("input/text", array("name" => "params[zuid_wijk_" . $index . "]", "value" => $vars["entity"]->$wijk_code));
			}
		
		?>
	</div>
	
	<?php
		$class = " hidden";
		if($vars["entity"]->stadsdeel == "oost"){
			$class = "";
		}
	?>
	<div class='widgets-citymap-district-oost<?php echo $class; ?>'>
		<label><?php echo elgg_echo("theme_stadsdeelcommunity:widget:citymap:area");?></label>
		<br/>
		<?php
			foreach(array("Parkwijk - Zuiderpolder", "Waarderpolder", "Nieuwe Amsterdamse Buurt", "Slachthuisbuurt", "Oude Amsterdamse Buurt", "Burgwal", "Scheepmakersdijk e.o.", "Sportheldenbuurt") as $index => $wijk){
				if ($wijk !== "Burgwal") {
					$wijk_code = "oost_wijk_$index";
					echo $wijk . ": " . elgg_view("input/text", array("name" => "params[oost_wijk_" . $index . "]", "value" => $vars["entity"]->$wijk_code));
				}
			}
		
		?>
	</div>
	
	<?php
		$class = " hidden";
		if($vars["entity"]->stadsdeel == "west"){
			$class = "";
		}
	?>
	<div class='widgets-citymap-district-west<?php echo $class; ?>'>
		<label><?php echo elgg_echo("theme_stadsdeelcommunity:widget:citymap:area");?></label>
		<br/>
		<?php
			foreach(array("Garenkokerskwartier", "Leidsebuurt", "Zijlweg West i.o.", "Ramplaankwartier", "Oosterduin", "Zuid - West") as $index => $wijk){
				$wijk_code = "west_wijk_$index";
				echo $wijk . ": " . elgg_view("input/text", array("name" => "params[west_wijk_" . $index . "]", "value" => $vars["entity"]->$wijk_code));
			}
		
		?>
	</div>
	
	<?php
		$class = " hidden";
		if($vars["entity"]->stadsdeel == "centrum"){
			$class = "";
		}
	?>
	<div class='widgets-citymap-district-centrum<?php echo $class; ?>'>
		<label><?php echo elgg_echo("theme_stadsdeelcommunity:widget:citymap:area");?></label>
		<br/>
		<?php
			foreach(array("Vijfhoek / Raaks / Doelen", "Heiliglanden - De Kamp", "Binnenstad", "Burgwal") as $index => $wijk){
				$wijk_code = "centrum_wijk_$index";
				echo $wijk . ": " . elgg_view("input/text", array("name" => "params[centrum_wijk_" . $index . "]", "value" => $vars["entity"]->$wijk_code));
			}
		
		?>
	</div>
	
	<?php
		$class = " hidden";
		if($vars["entity"]->stadsdeel == "schalkwijk"){
			$class = "";
		}
	?>
	<div class='widgets-citymap-district-schalkwijk<?php echo $class; ?>'>
		<label><?php echo elgg_echo("theme_stadsdeelcommunity:widget:citymap:area");?></label>
		<br/>
		<?php
			foreach(array("Boerhaavewijk", "Middengebied", "Meerwijk", "Molenwijk", "Europawijk") as $index => $wijk){
				$wijk_code = "schalkwijk_wijk_$index";
				echo $wijk . ": " . elgg_view("input/text", array("name" => "params[schalkwijk_wijk_" . $index . "]", "value" => $vars["entity"]->$wijk_code));
			}
		
		?>
	</div>
</div>
<script type="text/javascript">
$(function(){
	$('.widgets-citymap-district').change(function(){
		$(".widgets-citymap-districts > div").hide();
		$(".widgets-citymap-district-" + $(this).val()).show();
	});
});
</script>