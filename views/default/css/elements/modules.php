<?php
?>
/* ***************************************
	Modules
*************************************** */
.elgg-module {
	overflow: hidden;
	margin-bottom: 20px;
}

/* Aside */
.elgg-module-aside .elgg-head {
	border-bottom: 1px solid #CCC;
	
	margin-bottom: 5px;
	padding-bottom: 5px;
}

/* Info */
.elgg-module-info > .elgg-head {
	background: #e4e4e4;
	padding: 5px;
	margin-bottom: 10px;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.elgg-module-info > .elgg-head * {
	color: #333;
}

/* Popup */
.elgg-module-popup {
	background-color: white;
	border: 1px solid #ccc;
	
	z-index: 9999;
	margin-bottom: 0;
	padding: 5px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	
	-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
}
.elgg-module-popup > .elgg-head {
	margin-bottom: 5px;
}
.elgg-module-popup > .elgg-head * {
	color: #0054A7;
}

/* Dropdown */
.elgg-module-dropdown {
	background-color:white;
	border:5px solid #<?php echo COLOR_WIDGET_HEADER; ?>;
	
	-webkit-border-radius: 5px 0 5px 5px;
	-moz-border-radius: 5px 0 5px 5px;
	border-radius: 5px 0 5px 5px;
	
	display:none;
	
	width: 210px;
	padding: 12px;
	margin-right: 0px;
	z-index:100;
	
	-webkit-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	-moz-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	
	position:absolute;
	right: 0px;
	top: 100%;
}

/* Featured */
.elgg-module-featured {
	border: 1px solid #4690D6;
	
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
}
.elgg-module-featured > .elgg-head {
	padding: 5px;
	background-color: #4690D6;
}
.elgg-module-featured > .elgg-head * {
	color: white;
}
.elgg-module-featured > .elgg-body {
	padding: 10px;
}

/* ***************************************
	Widgets
*************************************** */
.elgg-widgets {
	float: right;
	min-height: 30px;
}
.elgg-widget-add-control {
	text-align: right;
	margin: 5px 5px 15px;
}
.elgg-widgets-add-panel {
	padding: 10px;
	margin: 0 5px 15px;
	background: #dedede;
	border: 2px solid #ccc;
}
<?php //@todo location-dependent style: make an extension of elgg-gallery ?>
.elgg-widgets-add-panel li {
	float: left;
	margin: 2px 10px;
	width: 200px;
	padding: 4px;
	background-color: #ccc;
	border: 2px solid #b0b0b0;
	font-weight: bold;
}
.elgg-widgets-add-panel li a {
	display: block;
}
.elgg-widgets-add-panel .elgg-state-available {
	color: #333;
	cursor: pointer;
}
.elgg-widgets-add-panel .elgg-state-available:hover {
	background-color: #bcbcbc;
}
.elgg-widgets-add-panel .elgg-state-unavailable {
	color: #888;
}

.elgg-module-widget {
	/*background-color: #dedede;
	padding: 2px;*/
	margin: 0 5px 15px;
	position: relative;
}
.elgg-module-widget:hover {
	background-color: #ccc;
}
.elgg-module-widget > .elgg-head {
	background-color: #<?php echo COLOR_WIDGET_HEADER;?>;
	height: 26px;
	overflow: hidden;
	
	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
}
.elgg-module-widget > .elgg-head h3 {
	float: left;
	padding: 4px 45px 0 20px;
	color: #<?php echo COLOR_WIDGET_HEADER_TEXT;?>;
}
.elgg-module-widget > .elgg-head h3 a {
	color: #<?php echo COLOR_WIDGET_HEADER_TEXT;?>;
}
.elgg-module-widget.elgg-state-draggable .elgg-widget-handle {
	cursor: move;
}
a.elgg-widget-collapse-button {
	color: #c5c5c5;
}
a.elgg-widget-collapse-button:hover,
a.elgg-widget-collapsed:hover {
	color: #9d9d9d;
	text-decoration: none;
}
a.elgg-widget-collapse-button:before {
	content: "\25BC";
}
a.elgg-widget-collapsed:before {
	content: "\25BA";
}
.elgg-module-widget > .elgg-body {
	background-color: #<?php echo COLOR_WIDGET_BG;?>;
	width: 100%;
	overflow: hidden;
	/*border-top: 2px solid #dedede;*/
}
.elgg-widget-edit {
	display: none;
    
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	
    margin: 5px;
    padding: 10px;
    background-color: #ffffff;
    
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.elgg-widget-content {
    padding: 10px;
    
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	
    margin: 5px;
    background-color: #ffffff;
}
.elgg-widget-placeholder {
	border: 2px dashed #dedede;
	margin-bottom: 15px;
}

/* theme specific */
.elgg-module-widget.widget_manager_disable_widget_content_style .elgg-widget-content{
	margin: 0px;
}

.widget-citymap {
	height: 300px;
	position: relative;
	overflow: hidden;
	border: 1px solid #DAD7D5;
}

.widget-citymap > img {
	float: left;
	width: 100%;
}

.widget-citymap-title {
	background: white;
    font-size: 20px;
    font-weight: bold;
    opacity: 0.9;
    padding: 10px;
    position: absolute;
    right: 40px;
    top: 5px;
    z-index: 1;
}

.widget-citymap-title2 {
	position: absolute;
    right: 0;
    text-align: center;
    top: 35px;
    width: 250px;
    z-index: 1;
}

.widget-citymap-subtitle {
	bottom: 10px;
    font-size: 16px;
    font-weight: bold;
    left: 0;
    opacity: 0.9;
    padding: 10px;
    position: absolute;
    right: 249px;
    background: white;
}

.widget-citymap-map {
	position: absolute;
    right: 0;
    top: 0;
    
    opacity: 0.9;
	background: white;
}