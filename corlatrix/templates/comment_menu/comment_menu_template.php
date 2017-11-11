<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Comment menu default template
 *
 * $Source: /cvs_backup/e107_0.8/e107_plugins/comment_menu/comment_menu_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
*/

// Category
$sc_style['CM_TYPE']['pre'] = "[";
$sc_style['CM_TYPE']['post'] = "]";

$sc_style['CM_AUTHOR']['pre'] = CM_L13." ";
$sc_style['CM_AUTHOR']['post'] = "";

$sc_style['CM_DATESTAMP']['pre'] = " ";
$sc_style['CM_DATESTAMP']['post'] = "";

$sc_style['CM_COMMENT']['pre'] = "";
$sc_style['CM_COMMENT']['post'] = "";

// $SC_WRAPPER['CM_AUTHOR'] = CM_L13."{---}"; //XXX Not working as template is loaded the old way.


if (!isset($COMMENT_MENU_TEMPLATE))
{
	$COMMENT_MENU_TEMPLATE['start'] = '
	<div class="widget comments">
		<h3 class="border-bottom-grad"><i class="fa fa-comment-o"></i> Recent Comments</h3>
		<div class="row">
			<div class="col-sm-12">
	';

// <h4 class="comment-menu-item-title">{CM_URL_PRE}{CM_TYPE} {CM_HEADING}{CM_URL_POST}</h4>
// {CM_AUTHOR_AVATAR: shape=circle}
// May wish to add Heading
	$COMMENT_MENU_TEMPLATE['item'] = '
				<div class="single_comments">
					{SETIMAGE: w=64&h=64&crop=1}
					{CM_AUTHOR_AVATAR}
					<p>{CM_COMMENT}</p>
					<div class="entry-meta small muted">
						<span>By <a href="#">{CM_AUTHOR}</a></span>
						<span>In <a href="#">{CM_TYPE}</a></span>
						<span>{CM_DATESTAMP}</span>
					</div>
				</div>
	';

	$COMMENT_MENU_TEMPLATE['end'] = '
			</div>
		</div>
	</div><!--/.recent comments-->
	';

}
?>
