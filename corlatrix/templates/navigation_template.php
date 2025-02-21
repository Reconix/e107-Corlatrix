<?php
/*
* Copyright (c) 2012 e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id: e_shortcode.php 12438 2011-12-05 15:12:56Z secretr $
*
* Navigation Template
*/

// TEMPLATE FOR {NAVIGATION=main}
$NAVIGATION_TEMPLATE['main']['start'] = '<ul class="nav navbar-nav">';

// Main Link
$NAVIGATION_TEMPLATE['main']['item'] = '
	<li>
		<a  class="page-scroll" role="button" href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">
		 {LINK_ICON}{LINK_NAME}
		</a>
	</li>
';

// Main Link - active state
$NAVIGATION_TEMPLATE['main']['item_active'] = '
	<li class="active">
		<a class="e-tip" role="button"  data-target="#" href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">
		 {LINK_ICON} {LINK_NAME}
		</a>
	</li>
';

// Main Link which has a sub menu.
$NAVIGATION_TEMPLATE['main']['item_submenu'] = '
	<li class="dropdown {LINK_IDENTIFIER}">
		<a class="dropdown-toggle"  role="button" data-toggle="dropdown" data-target="#" href="{LINK_URL}" title="{LINK_DESCRIPTION}">
		 {LINK_ICON}{LINK_NAME}
		 <i class="fa fa-angle-down"></i>
		</a>
		{LINK_SUB}
	</li>
';

// Main Link which has a sub menu - active state.
$NAVIGATION_TEMPLATE['main']['item_submenu_active'] = '
	<li class="dropdown active {LINK_IDENTIFIER}">
		<a class="dropdown-toggle" role="button" data-toggle="dropdown" data-target="#" href="{LINK_URL}">
		 {LINK_ICON}{LINK_NAME}
		 <span class="caret"></span>
		</a>
		{LINK_SUB}
	</li>
';

$NAVIGATION_TEMPLATE['main']['end'] = '</ul>';

// Sub menu
$NAVIGATION_TEMPLATE['main']['submenu_start'] = '
		<ul class="dropdown-menu" role="menu" >
';

// Sub menu Link
$NAVIGATION_TEMPLATE['main']['submenu_item'] = '
			<li role="menuitem" >
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
			</li>
';

// Sub menu Link - active state
$NAVIGATION_TEMPLATE['main']['submenu_item_active'] = '
			<li role="menuitem" class="active">
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
			</li>
';

// Sub Menu Link which has a sub menu.
$NAVIGATION_TEMPLATE['main']['submenu_loweritem'] = '
			<li role="menuitem" class="dropdown-submenu">
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
				<span class="caret"></span>
				{LINK_SUB}
			</li>
';

$NAVIGATION_TEMPLATE['main']['submenu_loweritem_active'] = '
			<li role="menuitem" class="dropdown-submenu active">
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
				<span class="caret"></span>
				{LINK_SUB}
			</li>
';


$NAVIGATION_TEMPLATE['main']['submenu_end'] = '</ul>';


// TEMPLATE FOR {NAVIGATION=side}

$NAVIGATION_TEMPLATE['side']['start'] 				= '<ul class="nav nav-list"><li class="nav-header">Sidebar</li>
														';

$NAVIGATION_TEMPLATE['side']['item'] 				= '<li><a href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['side']['item_submenu'] 		= '<li class="nav-header">{LINK_ICON}{LINK_NAME}{LINK_SUB}</li>
														';

$NAVIGATION_TEMPLATE['side']['item_active'] 		= '<li class="active"{LINK_OPEN}><a href="{LINK_URL}" title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['side']['end'] 				= '</ul>
														';

$NAVIGATION_TEMPLATE['side']['submenu_start'] 		= '';

$NAVIGATION_TEMPLATE['side']['submenu_item']		= '<li><a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['side']['submenu_loweritem'] = '
			<li role="menuitem" class="dropdown-submenu">
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
				{LINK_SUB}
			</li>
';

$NAVIGATION_TEMPLATE['side']['submenu_item_active'] = '<li class="active"><a href="{LINK_URL}">{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['side']['submenu_end'] 		= '';


// Main Footer links.  - ie. 3 columns of links.
/*
$NAVIGATION_TEMPLATE["footer"]["start"] 				= "<ul class='list-unstyled nav-footer row'>\n";
$NAVIGATION_TEMPLATE["footer"]["item"] 					= "<li class='col-md-6'><a href='{LINK_URL}'{LINK_OPEN} title=\"{LINK_DESCRIPTION}\">{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer"]["item_submenu"] 			= "<li class='nav-header col-md-6'>{LINK_ICON}{LINK_NAME}{LINK_SUB}</li>\n";
$NAVIGATION_TEMPLATE["footer"]["item_active"] 			= "<li class='active'{LINK_OPEN}><a href='{LINK_URL}' title=\"{LINK_DESCRIPTION}\">{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer"]["end"] 					= "</ul>\n";
$NAVIGATION_TEMPLATE["footer"]["submenu_start"] 		= "<ul class='list-unstyled'>";
$NAVIGATION_TEMPLATE["footer"]["submenu_item"]			= "<li><a href='{LINK_URL}'{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer"]["submenu_loweritem"] 	= "<li><a href='{LINK_URL}'{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>{LINK_SUB}</li>\n";
$NAVIGATION_TEMPLATE["footer"]["submenu_item_active"] 	= "<li class='active'><a href='{LINK_URL}'>{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer"]["submenu_end"] 			= "</ul>";
*/



// Footer Bottom Right Nav - {NAVIGATION=footernav}
$NAVIGATION_TEMPLATE["footernav"]["start"] 				= "<ul class='pull-right'>\n";
$NAVIGATION_TEMPLATE["footernav"]["item"] 				= "<li><a href='{LINK_URL}'{LINK_OPEN} title=\"{LINK_DESCRIPTION}\">{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footernav"]["item_active"] 		= "<li class='active'{LINK_OPEN}><a href='{LINK_URL}' title=\"{LINK_DESCRIPTION}\">{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footernav"]["end"] 				= "</ul>\n";


$NAVIGATION_TEMPLATE["alt"]["start"] 				    = '';
$NAVIGATION_TEMPLATE["alt"]["item"] 			        = '<div class="col-md-3 col-sm-6">
										                    	<div class="widget">
										                        	<h3>{LINK_ICON}{LINK_NAME}</h3>{LINK_SUB}
										                        </div>
										                   </div>';

// Footer Link Menus.
$NAVIGATION_TEMPLATE["alt"]["item_submenu"]             = $NAVIGATION_TEMPLATE["alt"]["item"];
$NAVIGATION_TEMPLATE["alt"]["item_active"]              = $NAVIGATION_TEMPLATE["alt"]["item"] ;
//$NAVIGATION_TEMPLATE["alt"]["item_active"] 			= "<li class='active'{LINK_OPEN}><a href='{LINK_URL}' title=\"{LINK_DESCRIPTION}\">{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["alt"]["end"] 					    = '';


$NAVIGATION_TEMPLATE["alt"]["submenu_start"] 		= "<ul>";
$NAVIGATION_TEMPLATE["alt"]["submenu_item"]			= "<li><a href='{LINK_URL}'{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["alt"]["submenu_loweritem"] 	= "<li><a href='{LINK_URL}'{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>{LINK_SUB}</li>\n";
$NAVIGATION_TEMPLATE["alt"]["submenu_item_active"] 	= "<li class='active'><a href='{LINK_URL}'>{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["alt"]["submenu_end"] 			= "</ul>";


//Alts
//$NAVIGATION_TEMPLATE['alt'] 						= $NAVIGATION_TEMPLATE['side'];
$NAVIGATION_TEMPLATE['alt5'] 						= $NAVIGATION_TEMPLATE['side'];
$NAVIGATION_TEMPLATE['alt6'] 						= $NAVIGATION_TEMPLATE['side'];

?>
