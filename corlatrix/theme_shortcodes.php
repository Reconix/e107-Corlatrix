<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Bootstrap Theme Shortcodes.
 *
*/

class theme_shortcodes extends e_shortcode
{
	// public $override = true;
	private $themePref = null;

	function __construct()
	{

		$this->themePref = e107::pref('theme');
	}

	function sc_corlate_topbar()
	{

		if(!$this->themePref['topbar'])
		{
			return null;
		}

		$text = '
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-xs-4">
						<div class="top-number"><p><i class="fa fa-phone-square"></i> {CORLATE_PHONE}</p></div>
					</div>
					<div class="col-sm-6 col-xs-8">
						<div class="social">
							{XURL_ICONS: template=header}
							{CORLATE_SEARCH}
						</div>
					</div>
				</div>
			</div><!--/.container-->
		</div><!--/.top-bar-->
		';

		return e107::getParser()->parseTemplate($text,true);

	}

	// Phone Number
	function sc_corlate_phone()
	{
		$phone = e107::pref('theme', 'phone');

		if(empty($phone))
		{
			return '0123546789';
		}

		return $phone;
	}

	// Search
	function sc_corlate_search($parm = array())
	{
	    // todo fix languages call new way
	    include_lan(e_PLUGIN."search_menu/languages/".e_LANGUAGE.".php");
	    $text = "";
	  	$text .= "<div class='search'>
	               <form method='get' action='".e_SEARCH."'>";
	  	$text .= "<input type='hidden' name='t' value='all' />\n";
	  	$text .= "<input type='hidden' name='r' value='0' />\n";
	  	$text .=  	'
	      <input class="search-form" name="q" placeholder="'.LAN_SEARCH.'" type="text" autocomplete="off">
	      <i class="fa fa-search"></i>
	                 ';
	  	$text .="</form></div>	";
	  	return $text;
	}

	// Top Right Nav
	function sc_top_right_nav($parm='')
	{
		include_lan(e_PLUGIN."login_menu/languages/".e_LANGUAGE.".php"); //deprecated ??

		$tp = e107::getParser();
		require(e_PLUGIN."login_menu/login_menu_shortcodes.php"); // don't use 'require_once'.
		$direction = vartrue($parm['dir']) == 'up' ? ' dropup' : '';

		$userReg = defset('USER_REGISTRATION');

		$text = '';

		if(!USERID) // Logged Out.
		{
			$text = '
		<div class="top-right-nav">
			<ul>
			';
			if($userReg==1)
			{
				$text .= '
				<li><a href="'.e_SIGNUP.'"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
				'; // Signup
			}
			$socialActive = e107::pref('core', 'social_login_active');
			if(!empty($userReg) || !empty($socialActive)) // e107 or social login is active.
			{
				$text .= //Header
				'

				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-secret" aria-hidden="true"></i> Login <span class="caret" style="margin-right:10px;"></span></a>
					<ul id="login-dp" class="dropdown-menu">
						<li>
							<div class="row">
								<div class="col-md-12">

				'; // Sign In
			}
			else
			{
				return '';
			}

			if(!empty($userReg)) // value of 1 or 2 = login okay.
			{
			//	global $sc_style; // never use global - will impact signup/usersettings pages.
			//	$sc_style = array(); // remove any wrappers.
				$text .= //Body
				'
				{SOCIAL_LOGIN: size=2x&label=1}
				<p>Social Login</p>
				<div class="social-buttons">
					<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
					<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
				</div>
				<p>Site Login</p>
				<form class="form" role="form" method="post" onsubmit="hashLoginPassword(this);return true" action="'.e_REQUEST_HTTP.'" accept-charset="UTF-8" id="login-nav">
					<div class="form-group">
						{LM_USERNAME_INPUT}
					</div>
					<div class="form-group">
						{LM_PASSWORD_INPUT}
					</div>
					<div class="form-group">
						<button type="submit" name="userlogin" id="userlogin" class="btn btn-primary btn-block">Sign in</button>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="autologin" id="autologin"> keep me logged-in
						</label>
					</div>
					{LM_IMAGECODE_NUMBER}
					{LM_IMAGECODE_BOX}
				</form>
				';

				$text .= //Footer
				'
								</div>
								<div class="bottom text-center">
									<div class="help-block text-right"><a href="{LM_FPW_LINK=href}">Forgotten Password</a></div>
									<div class="help-block text-right"><a href="{LM_RESEND_LINK=href}">Resend Activation Link</a></div>
								</div>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
				';

			}

			return $tp->parseTemplate($text, true, $login_menu_shortcodes);
		}

		// Logged in.
		//TODO Generic LANS. (not theme LANs)
		$userNameLabel = !empty($parm['username']) ? USERNAME : '';

		$text .= //Header
		'
		<div class="top-right-nav">
			<ul>
		';

		$text .= //PM
		'
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Private Messages <span class="caret" style="margin-right:10px;"></span></a>
					<ul id="login-dp" class="dropdown-menu">
						{PM_NAV}
						<li><a href="#">Conversation list</a></li>
						<li><a href="#">Single conversation</a></li>
						<li><a href="#">Start new conversation</a></li>
					</ul>
				</li>
		';
		$text .= //Profile
		'
				<li class="dropdown">
				  <a href="{LM_PROFILE_HREF}" class="dropdown-toggle" data-toggle="dropdown"><i style="padding:6px;">{SETIMAGE: w=16} {USER_AVATAR: shape=circle}</i> '. $userNameLabel.'Profile <span class="caret" style="margin-right:10px;"></span></a>
					<ul id="login-dp" class="dropdown-menu">
						<li><a href="{LM_PROFILE_HREF}">Your Profile</a></li>
						<li><a href="{LM_USERSETTINGS_HREF}">Settings</a></li>
						<li><a href="'.e_HTTP.'index.php?logout"> Logout</a></li>
					</ul>
				</li>

		';

		if(ADMIN) // Admin Link
		{
			$text .= '<li><a href="'.e_ADMIN_ABS.'"> Admin Area</a></li>';
		}

		$text .= //Footer
		'
			</ul>
		</div>
		';

		return $tp->parseTemplate($text,true,$login_menu_shortcodes);
	}

	// Site Disclaimer
	function sc_sitedisclaimer($copyYear = NULL)
  	{
	  	//	$default = "Proudly powered by <a href='http://e107.org'>e107</a> which is released under the terms of the GNU GPL License.";
	    $default = '<a target="_blank" href="http://e107corlate.reconix.net/" title="Corlatrix">Corlatrix e107 theme</a>. Design by <a target="_blank" href="https://shapebootstrap.net/licenses" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>';
	  	$sitedisclaimer = deftrue('SITEDISCLAIMER',$default);

	    $copyYear = vartrue($copyYear,'2013');
	  	$curYear = date('Y');
	  	$text = '&copy; '. $copyYear . (($copyYear != $curYear) ? ' - ' . $curYear : '');

	  	$text .= ' '.$sitedisclaimer;

	  	return e107::getParser()->toHtml($text, true, 'SUMMARY');
  	}

}
?>
