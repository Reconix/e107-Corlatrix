<?php
/**
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

/**
 * {XURL_ICONS} template
 * 	 <a rel="external" href="{XURL_ICONS_HREF}"
 * 	  data-tooltip-position="top"
 * 	  class="e-tip social-icon social-{XURL_ICONS_ID}"
 * 	  title="{XURL_ICONS_TITLE}">
 *
 * 	  <span class="fa fa-fw fa-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span>
 * 	  </a>
 */

// Default
 $SOCIAL_XURL_TEMPLATE['default']['start'] = '
<div class="col-sm-6 col-xs-4">
	<div class="social">
		<ul class="social-share">
 ';
 $SOCIAL_XURL_TEMPLATE['default']['item'] = '
<li>
	<a href="{XURL_ICONS_HREF}" title="{XURL_ICONS_TITLE}" target="_blank">
		<i class="fa fa-fw fa-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></i>
	</a>
</li>
 ';
 $SOCIAL_XURL_TEMPLATE['default']['end'] = '
		</ul>
	</div>
</div>
 ';

// Top Nav bar
$SOCIAL_XURL_TEMPLATE['header']['start'] = '

	   <ul class="social-share">
';
$SOCIAL_XURL_TEMPLATE['header']['item'] = '
<li>
   <a href="{XURL_ICONS_HREF}" title="{XURL_ICONS_TITLE}" target="_blank">
	   <i class="fa fa-fw fa-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></i>
   </a>
</li>
';
$SOCIAL_XURL_TEMPLATE['header']['end'] = '
	   </ul>

';
