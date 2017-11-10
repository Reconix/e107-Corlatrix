<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 *
 * News default templates
 */

if (!defined('e107_INIT'))  exit;

global $sc_style;

###### Default list item (temporary) - TODO rewrite news ######
//$NEWS_MENU_TEMPLATE['list']['start']       = '<ul class="nav nav-list news-menu-months">';
//$NEWS_MENU_TEMPLATE['list']['end']         = '</ul>';

$NEWS_MENU_TEMPLATE['list']['start']       = '<div class="thumbnails">';
$NEWS_MENU_TEMPLATE['list']['end']         = '</div>';


// XXX The ListStyle template offers a listed summary of items with a minimum of 10 items per page.
// As displayed by news.php?cat.1 OR news.php?all
// {NEWSBODY} should not appear in the LISTSTYLE as it is NOT the same as what would appear on news.php (no query)

// Template/CSS to be reviewed for best bootstrap implementation
$NEWS_TEMPLATE['list']['caption']	= '{NEWSCATEGORY}';
$NEWS_TEMPLATE['list']['start']	= '{SETIMAGE: w=400&h=350&crop=1}';
$NEWS_TEMPLATE['list']['end']	= '';
$NEWS_TEMPLATE['list']['item']	= '

	<div class="row row-fluid">
		<div class="span3 col-md-3">
			<div class="thumbnail">
                {NEWSTHUMBNAIL=placeholder}
            </div>
		</div>
		<div class="span9 col-md-9">
           <h3 class="media-heading">{NEWS_TITLE: link=1}</h3>
            <p>
               	{NEWS_SUMMARY}
			</p>
        	<p>
               <a href="{NEWSURL}" class="btn btn-small btn-primary">'.LAN_READ_MORE.'</a>
			</p>
		</div>
	</div>
	<hr class="visible-xs" />

';

//$NEWS_MENU_TEMPLATE['list']['separator']   = '<br />';

// XXX As displayed by news.php (no query) or news.php?list.1.1 (ie. regular view of a particular category)
//XXX TODO GEt this looking good in the default Bootstrap theme.
/*
$NEWS_TEMPLATE['default']['item'] = '
	{SETIMAGE: w=400}
	<div class="view-item">
		<h2>{NEWSTITLE}</h2>
		<small class="muted">
		<span class="date">{NEWSDATE=short} by <span class="author">{NEWSAUTHOR}</span></span>
		</small>

		<div class="body">
			{NEWSIMAGE}
			{NEWSBODY}
			{EXTENDED}
		</div>
		<div class="options">
			<span class="category">{NEWSCATEGORY}</span> {NEWSTAGS} {NEWSCOMMENTS} {EMAILICON} {PRINTICON} {PDFICON} {ADMINOPTIONS}
		</div>
	</div>
';
*/

$NEWS_WRAPPER['default']['item']['NEWSIMAGE: item=1'] = '<div class="img-blog">{---}</div>';

/*
		{SETIMAGE: w=400&h=400}
		<div class="default-item">
		<h2 class="news-title">{NEWS_TITLE: link=1}</h2>

        <hr class="news-heading-sep">
         	<div class="row">
        		<div class="col-md-6"><small>{GLYPH=user} &nbsp;{NEWSAUTHOR} &nbsp; {GLYPH=time} &nbsp;{NEWSDATE=short} </small></div>
        		<div class="col-md-6 text-right options"><small>{GLYPH=tags} &nbsp;{NEWSTAGS} &nbsp; {GLYPH=folder-open} &nbsp;{NEWSCATEGORY} </small></div>
        	</div>
        <hr>
          {NEWSIMAGE: item=1}

          <p class="lead">{NEWS_SUMMARY}</p>
          {NEWSVIDEO: item=1}
          <div class="text-justify">
          {NEWS_BODY}
          </div>
          <div class="text-right">
          {EXTENDED}
          </div>
		  <hr>
			<div class="options">
			<div class="btn-group hidden-print">{NEWSCOMMENTLINK: glyph=comments&class=btn btn-default}{PRINTICON: class=btn btn-default}{PDFICON}{SOCIALSHARE}{ADMINOPTIONS: class=btn btn-default}</div>
			</div>
		</div>
*/
$NEWS_TEMPLATE['default']['item'] = '
    <div class="blog-item">
        <div class="row">
            <div class="col-xs-12 col-sm-2 text-center">
                <div class="entry-meta">
                    <span id="publish_date">{NEWSDATE=short}</span>
                    <span><i class="fa fa-user"></i> {NEWSAUTHOR}</span>
					<span>{GLYPH=folder-open} {NEWSCATEGORY}</span>
                    <span>{NEWSCOMMENTS} Comments</span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-10 blog-content">
				{SETIMAGE: w=620&h=294}
				{NEWSIMAGE: item=1}
                <h2>{NEWS_TITLE: link=1}</h2>
                <h3>{NEWS_SUMMARY}</h3>
                <a class="btn btn-primary readmore" href="{NEWSURL}">Read More <i class="fa fa-angle-right"></i></a>
				{ADMINOPTIONS: class=btn btn-default}
            </div>
        </div>
    </div><!--/.blog-item-->
';

$NEWS_WRAPPER['view']['item']['NEWSIMAGE: item=1'] = '<div class="img-blog">{---}</div>';

/*
		<h2 class="news-title">{NEWS_TITLE: link=1}</h2>

        <hr class="news-heading-sep">
         	<div class="row">
        		<div class="col-md-6"><small>{GLYPH=user} &nbsp;{NEWSAUTHOR} &nbsp; {GLYPH=time} &nbsp;{NEWSDATE=short} </small></div>
        		<div class="col-md-6 text-right options"><small>{GLYPH=tags} &nbsp;{NEWSTAGS} &nbsp; {GLYPH=folder-open} &nbsp;{NEWSCATEGORY} </small></div>
        	</div>
        <hr>


		<div class="body">
			{NEWSIMAGE: item=1}
			 <p class="lead">{NEWS_SUMMARY}</p>
			  <div class="text-justify">
			{NEWS_BODY=body}
			</div>
			<div class="news-videos-1">
			{NEWSVIDEO: item=1}
		 	{NEWSVIDEO: item=2}
		 	{NEWSVIDEO: item=3}
			</div>


			<br />
			{SETIMAGE: w=400&h=400}

			<div class="row  news-images-1">
        		<div class="col-md-6">{NEWSIMAGE: item=2}</div>
        		<div class="col-md-6">{NEWSIMAGE: item=3}</div>
        	</div>
        	<div class="row news-images-2">
        		<div class="col-md-6">{NEWSIMAGE: item=4}</div>
        		<div class="col-md-6">{NEWSIMAGE: item=5}</div>
            </div>

            {NEWSVIDEO: item=4}
			{NEWSVIDEO: item=5}

           <div class="body-extended text-justify">
				{NEWS_BODY=extended}
			</div>

		</div>

		<hr>

		<div class="options hidden-print ">
			<div class="btn-group">{NEWSCOMMENTLINK: glyph=comments&class=btn btn-default}{PRINTICON: class=btn btn-default}{ADMINOPTIONS: class=btn btn-default}{SOCIALSHARE}</div>
		</div>


*/

$NEWS_TEMPLATE['view']['item'] = '
{SETIMAGE: w=750&h=356}

	<div class="blog-item">
		{NEWSIMAGE: item=1}
		 <div class="row">
			 <div class="col-xs-12 col-sm-3 text-center">
				 <div class="entry-meta">
					 <span id="publish_date">07  NOV</span>
					 <span><i class="fa fa-user"></i> {NEWSAUTHOR}</span>
					 <span><i class="fa fa-comment"></i> {NEWSCOMMENTS}</span>
					 <!-- Remove - Can you even like posts
					 <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
					 -->
					 <br/>
					 {ADMINOPTIONS: class=btn btn-default}
				 </div>
			 </div>
			 <div class="col-xs-12 col-sm-9 blog-content">
				<h2>{NEWS_TITLE: link=1}</h2>
				<p>
				 	{NEWS_SUMMARY}
				</p>
				<div class="post-tags">
					<strong>Tags:</strong> {NEWSTAGS}
				</div>
			 </div>
		 </div><!--/.row-item-->
	</div><!--/.blog-item-->

	<div class="blog-item">
	 {NEWS_BODY=body}

	 <div class="news-videos-1">
	 {NEWSVIDEO: item=1}
	 {NEWSVIDEO: item=2}
	 {NEWSVIDEO: item=3}
	 </div>


	 <br />
	 {SETIMAGE: w=400&h=400}

	 <div class="row  news-images-1">
		 <div class="col-md-6">{NEWSIMAGE: item=2}</div>
		 <div class="col-md-6">{NEWSIMAGE: item=3}</div>
	 </div>
	 <div class="row news-images-2">
		 <div class="col-md-6">{NEWSIMAGE: item=4}</div>
		 <div class="col-md-6">{NEWSIMAGE: item=5}</div>
	 </div>

	 {NEWSVIDEO: item=4}
	 {NEWSVIDEO: item=5}

	<div class="body-extended text-justify">
		 {NEWS_BODY=extended}
	 </div>

	</div><!--/.blog-item-->

	 <div class="media reply_section">
		 <div class="pull-left post_reply text-center">
			 {NEWS_AUTHOR_AVATAR: shape=circle}
			 <ul>
				 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
				 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
				 <li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
			 </ul>
		 </div>
		 <div class="media-body post_reply_content">
			 <h3>{NEWSAUTHOR}</h3>
			 {NEWS_AUTHOR_SIGNATURE}
			 <p><strong>All Posts:</strong> <a href="{NEWS_AUTHOR_ITEMS_URL}">View more posts by this author.</a></p>
		 </div>
	 </div>

	 <h1 id="comments_title">{NEWSCOMMENTS}</h1>
	 <div class="media comment_section">
		 <div class="pull-left post_comments">
			 <a href="#"><img src="images/blog/girl.png" class="img-circle" alt="" /></a>
		 </div>
		 <div class="media-body post_reply_comments">
			 <h3>Marsh</h3>
			 <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
			 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
			 <a href="#">Reply</a>
		 </div>
	 </div>
	 <div class="media comment_section">
		 <div class="pull-left post_comments">
			 <a href="#"><img src="images/blog/boy2.png" class="img-circle" alt="" /></a>
		 </div>
		 <div class="media-body post_reply_comments">
			 <h3>Marsh</h3>
			 <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
			 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
			 <a href="#">Reply</a>
		 </div>
	 </div>
	 <div class="media comment_section">
		 <div class="pull-left post_comments">
			 <a href="#"><img src="images/blog/boy3.png" class="img-circle" alt="" /></a>
		 </div>
		 <div class="media-body post_reply_comments">
			 <h3>Marsh</h3>
			 <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
			 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
			 <a href="#">Reply</a>
		 </div>
	 </div>

	 <div id="contact-page clearfix">
		 <div class="status alert alert-success" style="display: none"></div>
		 <div class="message_heading">
			 <h4>Leave a Replay</h4>
			 <p>Make sure you enter the(*)required information where indicate.HTML code is not allowed</p>
		 </div>

		 <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
			 <div class="row">
				 <div class="col-sm-5">
					 <div class="form-group">
						 <label>Name *</label>
						 <input type="text" class="form-control" required="required">
					 </div>
					 <div class="form-group">
						 <label>Email *</label>
						 <input type="email" class="form-control" required="required">
					 </div>
					 <div class="form-group">
						 <label>URL</label>
						 <input type="url" class="form-control">
					 </div>
				 </div>
				 <div class="col-sm-7">
					 <div class="form-group">
						 <label>Message *</label>
						 <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
					 </div>
					 <div class="form-group">
						 <button type="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
					 </div>
				 </div>
			 </div>
		 </form>
	 </div><!--/#contact-page-->

	<hr />
	{NEWSRELATED}
	<hr>
	{NEWSNAVLINK}

';

/*
 * 	<hr />
	<h3>About the Author</h3>
	<div class="media">
			<div class="media-left">{SETIMAGE: w=80&h=80&crop=1}{NEWS_AUTHOR_AVATAR: shape=circle}</div>
			<div class="media-body">
				<h4>{NEWS_AUTHOR}</h4>
					{NEWS_AUTHOR_SIGNATURE}
					<a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">My Articles</a>
			</div>
	</div>
 */


//$NEWS_MENU_TEMPLATE['view']['separator']   = '<br />';

###### news_categories.sc
$NEWS_TEMPLATE['category']['body'] = '
	<div style="padding:5px"><div style="border-bottom:1px inset black; padding-bottom:1px;margin-bottom:5px">
	{NEWSCATICON}&nbsp;{NEWSCATEGORY}
	</div>
	{NEWSCAT_ITEM}
	</div>
';

$NEWS_TEMPLATE['category']['item'] = '
	<div style="width:100%;padding-bottom:2px">
	<table style="width:100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td style="width:2px;vertical-align:top">&#8226;
	</td>
	<td style="text-align:left;vertical-align:top;padding-left:3px">
	{NEWSTITLELINK}
	<br />
	</td></tr>
	</table>
	</div>
';

### Related 'start' - Options: Core 'single' shortcodes including {SETIMAGE}
### Related 'item' - Options: {RELATED_URL} {RELATED_IMAGE} {RELATED_TITLE} {RELATED_SUMMARY}
### Related 'end' - Options:  Options: Core 'single' shortcodes including {SETIMAGE}
/*
$NEWS_TEMPLATE['related']['start'] = "<hr><h4>".defset('LAN_RELATED', 'Related')."</h4><ul class='e-related'>";
$NEWS_TEMPLATE['related']['item'] = "<li><a href='{RELATED_URL}'>{RELATED_TITLE}</a></li>";
$NEWS_TEMPLATE['related']['end'] = "</ul>";*/

$NEWS_TEMPLATE['related']['start'] = '{SETIMAGE: w=350&h=350&crop=1}<h2 class="caption">You Might Also Like</h2><div class="row">';
$NEWS_TEMPLATE['related']['item'] = '<div class="col-md-4"><a href="{RELATED_URL}">{RELATED_IMAGE}</a><h3><a href="{RELATED_URL}">{RELATED_TITLE}</a></h3></div>';
$NEWS_TEMPLATE['related']['end'] = '</div>';
