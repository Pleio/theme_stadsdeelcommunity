<?php ?>
.elgg-menu-site .elgg-child-menu {

    border-right: 1px solid #<?php echo COLOR_BASIC;?>;
    border-left: 1px solid #<?php echo COLOR_BASIC;?>;
    border-bottom: 1px solid #<?php echo COLOR_BASIC;?>;

	min-width: 100%;
    left: -1px;
    position: absolute;
}

.elgg-menu-site .elgg-child-menu li {
	border-bottom: 1px <?php echo COLOR_BASIC;?> solid;
}

.elgg-menu-site .elgg-child-menu a {
 	background-color: white;
    color: #<?php echo COLOR_BASIC;?>;
    font-weight: bold;
    height: 20px;
    padding: 3px 13px 0;
    white-space: nowrap;
}

.elgg-menu-site .elgg-child-menu > li:last-child > a {

}

.elgg-menu-site .elgg-child-menu a:hover {
	text-decoration: none;
	background: #<?php echo COLOR_BASIC;?>;
	color: white;
}

.elgg-menu-site .elgg-child-menu li .elgg-menu {
	display: none;
	border-top: 1px solid #999999;
}

.elgg-menu-site .elgg-child-menu li .elgg-menu li a {
}

.elgg-menu-site .elgg-child-menu li:hover > ul.elgg-menu {
	display: block;
}

.elgg-menu-site .elgg-child-menu > li > .elgg-child-menu {
	position: absolute;
	top: 0px;
}

.menu_builder_add_link{
	text-align: center;
}

.elgg-menu-site > li.elgg-menu-item-menu-builder-add > a,
.elgg-menu-site > li.elgg-menu-item-menu-builder-edit-mode > a,
.elgg-menu-site > li.elgg-menu-item-menu-builder-switch-context > a,
.elgg-menu-site > li.elgg-menu-item-menu-builder-add:hover > a,
.elgg-menu-site > li.elgg-menu-item-menu-builder-edit-mode:hover > a,
.elgg-menu-site > li.elgg-menu-item-menu-builder-switch-context:hover > a {
	background: none;
	padding-left: 3px;
	padding-right: 3px;

}

.menu-builder-edit-menu-item {
	display: none;
	vertical-align: middle;
}

.elgg-menu-site li:hover > a > .menu-builder-edit-menu-item {
	display: inline-block;
	margin-left: 10px;
}

.menu-builder-context-logged-out li,
.menu-builder-context-logged-in-normal .menu-builder-access-0,
.menu-builder-access--5 {
	display: none;
}

.menu-builder-context-all li,
.menu-builder-context-logged-out .menu-builder-access-2,
.menu-builder-context-logged-out .menu-builder-access--5 {
	display: list-item;
}

.elgg-menu-item-menu-builder-switch-context,
.elgg-menu-item-menu-builder-add,
.elgg-menu-item-menu-builder-edit-mode {
	display: list-item !important;
}