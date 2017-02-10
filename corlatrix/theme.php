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

//e107::library('load', 'bootstrap');
e107::library('load', 'fontawesome');

/* @example prefetch  */
//e107::link(array('rel'=>'prefetch', 'href'=>THEME.'images/browsers.png'));
//e107::js("footer-inline", 	"$('.e-tip').tooltip({container: 'body'})"); // activate bootstrap tooltips.

//CSS
e107::css('theme', 'css/bootstrap.min.css');
e107::css('theme', 'css/font-awesome.min.css');
e107::css('theme', 'css/animate.min.css');
e107::css('theme', 'css/prettyPhoto.css');
e107::css('theme', 'css/main.css');
e107::css('theme', 'css/responsive.css');
/* TODO
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
*/
//JS - Note: Automatically sent to footer.
e107::js("theme", "js/jquery.js", 'jquery');
e107::js("theme", "js/bootstrap.min.js", 'jquery');
e107::js("theme", "js/jquery.prettyPhoto.js", 'jquery');
e107::js("theme", "js/jquery.isotope.min.js", 'jquery');
e107::js("theme", "js/main.js", 'jquery');
e107::js("theme", "js/wow.min.js", 'jquery');

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

	/*
	if($id == 'wm') // Example - If rendered from 'welcome message'
	{

	}

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



	// default.

	if(!empty($caption))
	{
		echo '<h2 class="caption">'.$caption.'</h2>';
	}

	echo $text;



	return;



}

// Default Header
$LAYOUT['_header_'] =  <<<TMPL

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
					<div class="col-sm-6 col-xs-4">
					    <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                       </div>
					</div>
					<!--
                    <div class="col-sm-3 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                    </div>
					-->
					
				<div class="col-sm-6 col-xs-4">

				<div class="top-right-nav">
				<ul>
					<li><a href="#register">Register</a></li>
				  
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret" style="margin-right:10px;"></span></a>
						<ul id="login-dp" class="dropdown-menu">
							<li>
								 <div class="row">
										<div class="col-md-12">
											<p>Social Login</p>
											<div class="social-buttons">
												<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
												<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
											</div>
											<p>Site Login</p>
											 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
													<div class="form-group">
														 <label class="sr-only" for="exampleInputEmail2">Email address</label>
														 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Username / Email" required>
													</div>
													<div class="form-group">
														 <label class="sr-only" for="exampleInputPassword2">Password</label>
														 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
													</div>
													<div class="form-group">
														 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
													</div>
													<div class="checkbox">
														 <label>
														 <input type="checkbox"> keep me logged-in
														 </label>
													</div>
											 </form>
										</div>
										<div class="bottom text-center">
											<div class="help-block text-right"><a href="">Forgotten the password ?</a></div>
											<div class="help-block text-right"><a href="">Resend verification ?</a></div>
										</div>
										
								 </div>
							</li>
						</ul>
					</li>
				</ul>

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
                    <a class="navbar-brand" href="index.html"><img src="{SITEURL}e107_themes/corlatrix/images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
					{NAVIGATION=main}
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

TMPL;

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
                    &copy; 2017 <a target="_blank" href="#" title="Corlatrix">Corlatrix</a>. All Rights Reserved.
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

	{---}


TMPL;

//TODO Add {GALLERY_PORTFOLIO}  to portfolio_menu.php
$LAYOUT['blog'] =  <<<TMPL


	{---}



TMPL;









/* XXX EVERYTHING BELOW THIS POINT IS UNUSED FOR NOW */
/**
* $HEADER AND $FOOTER are deprecated.
*/


/*

	$CUSTOMHEADER, CUSTOMFOOTER and $CUSTOMPAGES are deprecated.
	Default custom-pages can be assigned in theme.xml

 */

/*

$LAYOUT['docs'] = <<<TMPL

  <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.html">Bootstrap</a>
          <div class="nav-collapse collapse">
             {NAVIGATION=main}
          </div>
        </div>
      </div>
    </div>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>{PAGE_CHAPTER_NAME}</h1>
    <p class="lead">{PAGE_CHAPTER_DESCRIPTION}</p>
  </div>
</header>


  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">

      <div class="span3 bs-docs-sidebar">
      {SETSTYLE=navdoc}
	  {PAGE_NAVIGATION: template=navdocs&auto=1}
      </div>
		{SETSTYLE=doc}

      <div class="span9">


		{---}


 	</div>
	  </div>
 </div>

    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <p>{SITEDISCLAIMER}</p>
        <!--
        <ul class="footer-links">
          <li><a href="http://blog.getbootstrap.com">Blog</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twitter/bootstrap/issues?state=open">Issues</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twitter/bootstrap/blob/master/CHANGELOG.md">Changelog</a></li>
        </ul>
        -->
      </div>
    </footer>



TMPL;


 */



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
