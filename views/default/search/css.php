<?php
/**
 * Elgg Search css
 * 
 */
?>

/**********************************
Search plugin
***********************************/
.elgg-search-header {
	bottom: 17px;
	height: 23px;
	position: absolute;
	right: 10px;
}
.elgg-search input[type=text] {
	width: 230px;
	height: 25px;
}
.elgg-search input[type=submit] {
	display: none;
}
.elgg-search input[type=text] {
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	
	/*border: 1px solid #71b9f7;*/
	border: 0px;
	color: #000000;
	font-size: 12px;
	font-weight: bold;
	padding: 2px 4px 2px 4px;
	/*background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png) no-repeat 2px -934px;*/
	background: url(<?php echo elgg_get_site_url(); ?>mod/theme_stadsdeelcommunity/graphics/main-bg-70.png);
}
.elgg-search input[type=text]:focus, .elgg-search input[type=text]:active {
	border: 0px;
}

.search-list li {
	padding: 5px 0 0;
}
.search-heading-category {
	margin-top: 20px;
	color: #666666;
}

.search-highlight {
	background-color: #bbdaf7;
}
.search-highlight-color1 {
	background-color: #bbdaf7;
}
.search-highlight-color2 {
	background-color: #A0FFFF;
}
.search-highlight-color3 {
	background-color: #FDFFC3;
}
.search-highlight-color4 {
	background-color: #ccc;
}
.search-highlight-color5 {
	background-color: #4690d6;
}
