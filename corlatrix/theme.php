<?php

/**
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * @file
 * Bootstrap 3 Theme for e107 v2.x.
 */

if(!defined('e107_INIT'))
{
	exit;
}

define("BOOTSTRAP", 3);
define("FONTAWESOME", 4);

e107::library('load', 'bootstrap');
e107::library('load', 'fontawesome');

/* @example prefetch  */
//e107::link(array('rel'=>'prefetch', 'href'=>THEME.'images/browsers.png'));
//e107::js("footer-inline", 	"$('.e-tip').tooltip({container: 'body'})"); // activate bootstrap tooltips.

//CSS
//e107::css('theme', 'css/bootstrap.min.css');
//e107::css('theme', 'css/font-awesome.min.css');
e107::css('theme', 'css/animate.min.css');
e107::css('theme', 'css/main.css');
e107::css('theme', 'css/responsive.css');

e107::js('theme','js/html5shiv.js','','2','<!--[if lt IE 9]>','');
e107::js('theme','js/respond.min.js','','2','','<![endif]-->');

//JS - Note: Automatically sent to footer.
e107::js("theme", "js/jquery.isotope.min.js", 'jquery');
e107::js("theme", "js/main.js", 'jquery');
e107::js("theme", "js/wow.min.js", 'jquery');

if(THEME_LAYOUT == 'custom_home')
{
  define('BODYTAG', '<body class="homepage '.THEME_LAYOUT.'">');

	e107::css('theme', 'css/prettyPhoto.css');
	e107::js("theme", "js/jquery.prettyPhoto.js", 'jquery');
}

// Search
if(!defined('e_SEARCH'))
{
	define('e_SEARCH', SITEURL.(file_exists(e_BASE.'customsearch.php') ? 'customsearch.php' : 'search.php'));
}

/**
 * @param string $caption
 * @param string $text
 * @param string $id : id of the current render
 * @param array $info : current style and other menu data.
 */
function tablestyle($caption, $text, $id='', $info=array())
{
//	global $style; // no longer needed.

	$style = $info['setStyle'];

	echo "<!-- tablestyle: style=".$style." id=".$id." -->\n\n";

	$type = $style;
	if(empty($caption))
	{
		$type = 'box';
	}

	if($style == 'navdoc' || $style == 'none')
	{
		echo $text;
		return;
	}

	if($id == 'wm') // Welcome Message
	{
		echo '
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
					'.$text.'
					</div>
				</div>
			</div>
		</section>
		';
		return;
	}
	/*

	if($id == 'featurebox') // Example - If rendered from 'featurebox'
	{

	}
	*/


	if($style == 'jumbotron')
	{
		echo '<div class="jumbotron">
      	<div class="container">';
        	if(!empty($caption))
	        {
	            echo '<h1>'.$caption.'</h1>';
	        }
        echo '
        	'.$text.'
      	</div>
    	</div>';
		return;
	}

	if($style == 'col-md-4' || $style == 'col-md-6' || $style == 'col-md-8')
	{
		echo ' <div class="col-xs-12 '.$style.'">';

		if(!empty($caption))
		{
            echo '<h2>'.$caption.'</h2>';
		}

		echo '
          '.$text.'
        </div>';
		return;

	}

	if($style == 'menu')
	{
		echo '<div class="panel panel-default">
	  <div class="panel-heading">'.$caption.'</div>
	  <div class="panel-body">
	   '.$text.'
	  </div>
	</div>';
		return;

	}

	if($style == 'portfolio')
	{
		 echo '
		 <div class="col-lg-4 col-md-4 col-sm-6">
            '.$text.'
		</div>';
		return;
	}

	/// Headers \\\
	if($style == 'page-header')
	{
		echo '
			<div class="center">
			 '.$text.'
			</div>
		';
		return;
	}

	/// Sidebar Widgets \\\

	// 30 none / blank
	if($style == 'sidebar-blank')
	{
		echo '
			'.$text.'
		';
		return;
	}

	// No HEADER 31
	if($style == 'sidebar-no-header')
	{
		echo '
		<div class="widget ">
			'.$text.'
		</div>';
		return;
	}
	// default col-sm-6 32

	// default col-sm-12 33

	// default 34
	if($style == 'sidebar')
	{
		echo '
		<div class="widget '.$caption.'">
			<h3 class="border-bottom-grad">'.$caption.'</h3>
			<div class="row">
				'.$text.'
			</div>
		</div>';
		return;
	}



	// default.

	if(!empty($caption))
	{
		echo '<h2 class="caption">'.$caption.'</h2>';
	}

	echo $text;

	return;

}

/*
// Default Header
$LAYOUT['_header_'] =  <<<TMPL
<header id="header">
<div class="top-bar">
<div class="container">
<div class="row">
<!-- Social Icons -->
{XURL_ICONS}
<!-- Contact Number
<div class="col-sm-3 col-xs-4">
   <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
</div>
-->
<div class="col-sm-6 col-xs-4">
   {TOP_RIGHT_NAV}
</div> <!-- /.col-sm-6 col-xs-4 -->
</div> <!-- /.row -->
</div><!--/.container-->
</div><!--/.top-bar-->
<nav class="navbar navbar-inverse" role="banner">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
   <span class="sr-only">Toggle navigation</span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="{SITEURL}"><img src="{SITEURL}e107_themes/corlatrix/images/logo.png" alt="logo"></a>
</div>
<div class="collapse navbar-collapse navbar-right">
{NAVIGATION=main}
</div>
</div><!--/.container-->
</nav><!--/nav-->
</header><!--/header-->
TMPL;     */
$LAYOUT['_header_'] = '
<header id="header">
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
<nav class="navbar navbar-inverse" role="banner">
<div class="container">
<div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	   <span class="sr-only">Toggle navigation</span>
	   <span class="icon-bar"></span>
	   <span class="icon-bar"></span>
	   <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="{SITEURL}">{SITELOGO}</a>
</div>

<div class="collapse navbar-collapse navbar-right">
   {NAVIGATION=main}
   {BOOTSTRAP_USERNAV: placement=top}
</div>
</div><!--/.container-->
</nav><!--/nav-->

</header><!--/header-->

';

// Default Footer
$LAYOUT['_footer_'] =  <<<TMPL

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="http://www.e107.org" target="_blank">e107</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
					{SITEDISCLAIMER=2016}
                </div>
				<div class="col-sm-6">
					{NAVIGATION=footernav}
				</div>
            </div>
        </div>
    </footer><!--/#footer-->

	<!-- Going up ? -->
	<a id="gototop" href="#"><span class="fa fa fa-angle-up"></span></a>

TMPL;

// NOTE:$LAYOUT is a combination of $HEADER and $FOOTER, automatically split at the point of "{---}"

//------------------------------=[ Default ]=------------------------------\\

$LAYOUT['default'] =  <<<TMPL
    <section id="content">
        <div class="container">
			{---}
		</div>
	</section>
TMPL;

//------------------------------=[ Custom Home ]=------------------------------\\

$LAYOUT['custom_home'] =  <<<TMPL

	{ALERTS}

	{CHAPTER_MENUS: name=home-slider}

	{WMESSAGE}

	{SETSTYLE=none}
	{CMENU=home-features}

	{CMENU=home-recent-works}

	{CMENU=home-our-service}

	{CMENU=home-our-skills}

	{CMENU=home-testimonials}

	{CMENU=home-our-partners}

	{CMENU=home-questions}

	{---}

TMPL;

//------------------------------=[ News / Blog ]=------------------------------\\
$LAYOUT['news'] =  <<<TMPL

    <section id="blog" class="container">

		{SETSTYLE=page-header}
		{CMENU=blogheader}

		<div class="blog">
            <div class="row">
                <div class="col-md-8">
					{---}
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
					{SETSTYLE=sidebar-blank}
					{MENU=31}

					{SETSTYLE=sidebar-no-header}
					{MENU=32}

					{SETSTYLE=sidebar}
					{MENU=33}

					{SETSTYLE=sidebar}
					{MENU=34}

					{SETSTYLE=sidebar}
					{MENU=35}
    			</aside>

            </div><!--/.row-->
        </div><!--/.blog-->
    </section><!--/#blog-->

TMPL;

//------------------------------=[ Forums ]=------------------------------\\




//------------------------------=[ Contact Us ]=------------------------------\\
$LAYOUT['contact'] =  <<<TMPL

<section id="contact-info">
	<div class="center">
		<h2>How to Reach Us?</h2>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
	</div>
	<div class="gmap-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 text-center">
					<div class="gmap">
						<iframe width="300" height="300" frameborder="0" style="border:0" marginheight="0" marginwidth="0" allowfullscreen
						 	src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d131984.01355465007!2d68.33027504406412!3d-73.19804959955366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNzPCsDA4JzU1LjciUyA2OMKwMjUnMDIuMyJF!5e1!3m2!1sen!2suk!4v1510373156796">
						</iframe>
					</div>
				</div>

				<div class="col-sm-7 map-content">
					<ul class="row">
						<li class="col-sm-6">
							<address>
								<h5>Head Office</h5>
								<p>1537 Flint Street <br>
								Tumon, MP 96911</p>
								<p>Phone:670-898-2847 <br>
								Email Address:info@domain.com</p>
							</address>

							<address>
								<h5>Zonal Office</h5>
								<p>1537 Flint Street <br>
								Tumon, MP 96911</p>
								<p>Phone:670-898-2847 <br>
								Email Address:info@domain.com</p>
							</address>
						</li>


						<li class="col-sm-6">
							<address>
								<h5>Zone#2 Office</h5>
								<p>1537 Flint Street <br>
								Tumon, MP 96911</p>
								<p>Phone:670-898-2847 <br>
								Email Address:info@domain.com</p>
							</address>

							<address>
								<h5>Zone#3 Office</h5>
								<p>1537 Flint Street <br>
								Tumon, MP 96911</p>
								<p>Phone:670-898-2847 <br>
								Email Address:info@domain.com</p>
							</address>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>  <!--/gmap_area -->

<section id="contact-page">
	<div class="container">
		<div class="center">
			<h2>Drop Your Message</h2>
			<p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="row contact-wrap">
			<div class="status alert alert-success" style="display: none"></div>
			<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="form-group">
						<label>Name *</label>
						<input type="text" name="name" class="form-control" required="required">
					</div>
					<div class="form-group">
						<label>Email *</label>
						<input type="email" name="email" class="form-control" required="required">
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="number" class="form-control">
					</div>
					<div class="form-group">
						<label>Company Name</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-sm-5">
					<div class="form-group">
						<label>Subject *</label>
						<input type="text" name="subject" class="form-control" required="required">
					</div>
					<div class="form-group">
						<label>Message *</label>
						<textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
					</div>
				</div>
			</form>
		</div><!--/.row-->

{---}

	</div><!--/.container-->
</section><!--/#contact-page-->

TMPL;


// Are these still used ?
$NEWSCAT = "\n\n\n\n<!-- News Category -->\n\n\n\n
	<div style='padding:2px;padding-bottom:12px'>
	<div class='newscat_caption'>
	{NEWSCATEGORY}
	</div>
	<div style='width:100%;text-align:left'>
	{NEWSCAT_ITEM}
	</div>
	</div>
";


$NEWSCAT_ITEM = "\n\n\n\n<!-- News Category Item -->\n\n\n\n
		<div style='width:100%;display:block'>
		<table style='width:100%'>
		<tr><td style='width:2px;vertical-align:middle'>&#8226;&nbsp;</td>
		<td style='text-align:left;height:10px'>
		{NEWSTITLELINK}
		</td></tr></table></div>
";

?>
