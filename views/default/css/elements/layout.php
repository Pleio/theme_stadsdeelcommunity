<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

body
{
	background-attachment: fixed;
    background-image: url("<?php echo theme_stadsdeelcommunity_get_site_bg(); ?>");
    background-repeat: repeat;
    background-size: 100% auto;
}

.elgg-page-default .elgg-page-header > .elgg-inner-menu {
	width: 990px;
	margin: 0 auto;
	height: 30px;
	position: relative;
	background: #<?php echo COLOR_BASIC;?>;
}

.elgg-page-default .elgg-page-header > .elgg-inner > h1,
.elgg-page-default .elgg-page-header > .elgg-inner > h1 > a {
    height: 40px;
    line-height: 40px;
    width: 370px;
}

.elgg-page-default .elgg-page-header > .elgg-inner > h1 {
    position: absolute;
	background: #<?php echo COLOR_BASIC;?>;
	
	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
	
    left: 90px;
	bottom: 0;
}

.elgg-page-default .elgg-page-header > .elgg-inner > h1 > a {
	display: block;
	width: auto;
    padding-left: 12px;
}


.elgg-page-body
{
	position: relative !important;
}

.theme_stadsdeelcommunity_delete_header_bg
{
	background-image: url(<?php echo elgg_get_site_url(); ?>mode/theme_stadsdeelcommunity/graphics/toptoolbar_background.gif);
	background-position: top right;
}

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 998px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	height: 80px;
	
    background-image: url("<?php echo theme_stadsdeelcommunity_get_header_bg(); ?>");
	background-repeat: no-repeat;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	
	background-color: transparent;
	background-color: rgba(<?php echo theme_stadsdeelcommunity_get_rgb_from_hex(COLOR_TRANSPARENCY);?>,0.5);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#7f<?php echo COLOR_TRANSPARENCY;?>,endColorstr=#7f<?php echo COLOR_TRANSPARENCY;?>);
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#7f<?php echo COLOR_TRANSPARENCY;?>,endColorstr=#7f<?php echo COLOR_TRANSPARENCY;?>)";
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	padding: 5px 0;
	border-top: 1px solid #DEDEDE;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	/*background: #333333 url(<?php echo elgg_get_site_url(); ?>_graphics/toptoolbar_background.gif) repeat-x top left;*/
	background-color: #EEEEEE;
	border-bottom: 1px solid #000000;
	position: relative;
	height: 24px;
	z-index: 9000;
}
.elgg-page-topbar > .elgg-inner {
	padding: 0 10px;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 24px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
	/*background: #4690D6 url(<?php echo elgg_get_site_url(); ?>_graphics/header_shadow.png) repeat-x bottom left;*/
}
.elgg-page-header > .elgg-inner {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-one-sidebar {
	/*background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/sidebar_background.gif) repeat-y right top;*/
}
.elgg-layout-two-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/two_sidebar_background.gif) repeat-y right top;
}
.elgg-sidebar {
	position: relative;
	padding: 20px 10px;
	float: right;
	width: 210px;
	margin: 0 0 0 10px;
	/*background-image: url("<?php echo elgg_get_site_url(); ?>mod/theme_stadsdeelcommunity/graphics/main-bg.png");*/
}
.elgg-sidebar-alt {
	position: relative;
	padding: 20px 10px;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 10px;
	
	background: white;
}
.elgg-main > .elgg-head {
	padding-bottom: 3px;
	border-bottom: 1px solid #CCCCCC;
	margin-bottom: 10px;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	position: relative;
}
.elgg-page-footer {
	color: #999;
}
.elgg-page-footer a:hover {
	color: #666;
}