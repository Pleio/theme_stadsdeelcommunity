<?php

	elgg_load_css('colorpicker');
	elgg_load_js('colorpicker');
	
	global $CONFIG;

	$img = '<img src="' . elgg_get_site_url() . '/mod/theme_stadsdeelcommunity/graphics/delete-icon.png" />'; 
?><script type="text/javascript">
	
	$(function()
	{
		$('#custom_color_0, #custom_color_2, #custom_color_3, #custom_color_4, #custom_color_5, #custom_color_6').ColorPicker({
			onSubmit: function(hsb, hex, rgb, el){
				$(el).val(hex.toUpperCase());
				$(el).css("background-color", "#" + hex);
				$(el).ColorPickerHide();
				$('#colorset').val('custom');
			},
			onBeforeShow: function(){
				var val = $(this).val();
				$(this).ColorPickerSetColor(val);
			},
			onChange: function (hsb, hex, rgb) {
				$(this).css('backgroundColor', '#' + hex);
				$('#colorset').val('custom');
			}
		}).bind('keyup', function(){
			$(this).ColorPickerSetColor(this.value);
			$('#colorset').val('custom');
		});

		$('#colorset').change(function()
		{
			if($(this).val() == 'custom')
			{
				$('#custom_colorset_selector').show();
			}
			else
			{
				$('#custom_colorset_selector').hide();
			}
		});
	});
	
	</script>

	<div style="width: 50%;">
		<label><?php echo elgg_echo('theme_stadsdeelcommunity:settings:label:colorset'); ?></label><br />
		<?php
			$allowed_colorsets = array('purple', 'green', 'custom');
			
			$current_colorset = elgg_get_plugin_setting('colorset', 'theme_stadsdeelcommunity');
			
			$current_colorset_colors = elgg_get_plugin_setting('colorset_colors', 'theme_stadsdeelcommunity');
			
			if($current_colorset != 'custom')
			{
				 $current_colorset_colors = array("731472", "E31937", "B91C8D", "FFFFFF", "DAD7D5", "731472", "FFFFFF");
			}
			else
			{
				$current_colorset_colors = json_decode($current_colorset_colors, true);
			}
			
			echo elgg_view('input/dropdown', array('id' => 'colorset', 'name' => 'colorset', 'options' => $allowed_colorsets, 'value' => $current_colorset));
			
			/*
			define('COLOR_BASIC', 				$colors[0]);
			define('COLOR_NEWS_HEADER', 		$colors[1]);
			define('COLOR_WIDGET_HEADER', 		$colors[2]);
			define('COLOR_WIDGET_HEADER_TEXT', 	$colors[3]);
			define('COLOR_WIDGET_BG', 			$colors[4]);
			define('COLOR_ANCHORS', 			$colors[5]);
			define('COLOR_TRANSPARENCY', 		$colors[6]);
			*/

		?>
		<div id="custom_colorset_selector" class="float-alt <?php echo (($current_colorset != 'custom')?'hidden':''); ?>">
		<table>
			<tr>
				<td>Menu bar</td>
				<td><input type="text" style="background-color:#<?php echo $current_colorset_colors[0]; ?>;" maxlength="6" size="7" id="custom_color_0" value="<?php echo $current_colorset_colors[0]; ?>" name="custom_color[0]"></td>
			</tr>
			<tr>
				<td>Widget headers</td>
				<td><input type="text" style="background-color:#<?php echo $current_colorset_colors[2]; ?>;" maxlength="6" size="7" id="custom_color_2" value="<?php echo $current_colorset_colors[2]; ?>" name="custom_color[2]"></td>
			</tr>
			<tr>
				<td>Widget header text</td>
				<td><input type="text" style="background-color:#<?php echo $current_colorset_colors[3]; ?>;" maxlength="6" size="7" id="custom_color_3" value="<?php echo $current_colorset_colors[3]; ?>" name="custom_color[3]"></td>
			</tr>
			<tr>
				<td>Widget achtergrond</td>
				<td><input type="text" style="background-color:#<?php echo $current_colorset_colors[4]; ?>;" maxlength="6" size="7" id="custom_color_4" value="<?php echo $current_colorset_colors[4]; ?>" name="custom_color[4]"></td>
			</tr>
			<tr>
				<td>Anchors</td>
				<td><input type="text" style="background-color:#<?php echo $current_colorset_colors[5]; ?>;" maxlength="6" size="7" id="custom_color_5" value="<?php echo $current_colorset_colors[5]; ?>" name="custom_color[5]"></td>
			</tr>
			<tr>
				<td>Transparency</td>
				<td><input type="text" style="background-color:#<?php echo $current_colorset_colors[6]; ?>" maxlength="6" size="7" id="custom_color_6" value="<?php echo $current_colorset_colors[6]; ?>" name="custom_color[6]"></td>
			</tr>
		</table>
		</div>
	</div>
	
	<div>
		<label><?php echo elgg_echo('theme_stadsdeelcommunity:settings:label:header_bg'); ?></label><br />
		<?php echo elgg_echo('theme_stadsdeelcommunity:settings:description:header_bg'); ?><br />
		<?php echo elgg_view('input/file', array('name' => 'header_bg')); 
		
		if(elgg_get_plugin_setting('header_bg', 'theme_stadsdeelcommunity'))
		{
			$delete_header_action_url = elgg_view('output/url', array('is_action' => true, 'href' => 'action/template/delete_header', 'text' => $img));
		?>
			<div><?php echo $delete_header_action_url; ?><br />
			<img width="300" src="<?php echo elgg_get_site_url(); ?>theme_stadsdeelcommunity/header_bg" /></div>
		<?php 
		}
	?></div>

	<div>
		<label><?php echo elgg_echo('theme_stadsdeelcommunity:settings:label:site_bg'); ?></label><br />
		<?php echo elgg_echo('theme_stadsdeelcommunity:settings:description:site_bg'); ?><br />
		<?php echo elgg_view('input/file', array('name' => 'site_bg')); 
		
		if(elgg_get_plugin_setting('site_bg', 'theme_stadsdeelcommunity'))
		{
			$delete_bg_action_url = elgg_view('output/url', array('is_action' => true, 'href' => 'action/template/delete_bg', 'text' => $img));
		?>
			<div><?php echo $delete_bg_action_url; ?><br />
			<img width="300" src="<?php echo elgg_get_site_url(); ?>theme_stadsdeelcommunity/site_bg" /></div>
		<?php 
		}
	?></div>
	
	<div><?php
		echo elgg_view('input/submit', array('value' => elgg_echo('save'))); 
	?></div>