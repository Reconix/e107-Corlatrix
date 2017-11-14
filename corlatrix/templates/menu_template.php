<?php


#### Panel Template - Used by menu_class.php  for Custom Menu Content.


	$MENU_TEMPLATE['default']['start'] 					= '';
	$MENU_TEMPLATE['default']['body'] 					= '{CMENUBODY}';
	$MENU_TEMPLATE['default']['end'] 					= '';

	$MENU_TEMPLATE['button']['start'] 					= '<div class="cpage-menu">';
	$MENU_TEMPLATE['button']['body'] 					= '<div>{CMENUBODY}</div>{CPAGEBUTTON}';
	$MENU_TEMPLATE['button']['end'] 					= '</div>';

	### Additional control over image thumbnailing is possible via SETIMAGE e.g. {SETIMAGE: w=200&h=150&crop=1}
	$MENU_TEMPLATE['buttom-image']['start'] 			= '<div class="cpage-menu">';
	$MENU_TEMPLATE['buttom-image']['body'] 				= '<div>{CMENUIMAGE}</div>{CPAGEBUTTON}';
	$MENU_TEMPLATE['buttom-image']['end'] 				= '</div>';



	$MENU_TEMPLATE['2-column_1:1_text-left']['start'] 	= '{SETIMAGE: w=700&h=450}';
	$MENU_TEMPLATE['2-column_1:1_text-left']['body'] 	= '
													       <div class="cpage-menu col-lg-6 col-md-6 col-sm-6"><h2>{CMENUICON}{CMENUTITLE}</h2>{CMENUBODY}<p>{CPAGEBUTTON}</p></div>
													       <div class="cpage-menu col-lg-6 col-md-6 col-sm-6">{CMENUIMAGE}</div>
													       ';
	$MENU_TEMPLATE['2-column_1:1_text-left']['end'] 	= '';


	$MENU_TEMPLATE['2-column_1:1_text-right']['start'] = '{SETIMAGE: w=700&h=450}';
	$MENU_TEMPLATE['2-column_1:1_text-right']['body'] 	= '
															<div class="cpage-menu col-lg-6 col-md-6 col-sm-6">{CMENUIMAGE}</div>
															<div class="cpage-menu col-lg-6 col-md-6 col-sm-6"><h2>{CMENUICON}{CMENUTITLE}</h2>{CMENUBODY}<p>{CPAGEBUTTON}</p></div>
														';
	$MENU_TEMPLATE['2-column_1:1_text-right']['end'] 	= '';


	$MENU_TEMPLATE['2-column_2:1_text-left']['start'] 	= '';
	$MENU_TEMPLATE['2-column_2:1_text-left']['body'] 	= '
													       <div class="cpage-menu col-lg-8 col-md-8"><h4>{CMENUICON}{CMENUTITLE}</h4>{CMENUBODY}</div>
													       <div class="cpage-menu col-lg-4 col-md-4">
													       <a class="btn btn-lg btn-primary pull-right" href="{CPAGEBUTTON=href}">'.LAN_READ_MORE.'</a>
													       </div>
													       ';
	$MENU_TEMPLATE['2-column_2:1_text-left']['end'] 	= '';


	//-----------------------=[ Home Page Slider ]=------------------------\\

	$MENU_TEMPLATE['home-slider']['start'] 			= ' {SETIMAGE: w=0&h=0}
	  <section id="main-slider" class="no-margin">
        <div class="carousel slide">
        {CHAPTER_MENUS: name=home-slider&template=home-slider-indicators&active=1}
            <div class="carousel-inner">';
	$MENU_TEMPLATE['home-slider']['body'] 				= '
                <div class="item {CMENU_TAB_ACTIVE} " style="background-image: url({CPAGEFIELD: name=bigimage&mode=raw})">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">{CMENUTITLE}</h1>
                                    <h2 class="animation animated-item-2">{CMENUBODY}</h2>
                                    <a class="btn-slide animation animated-item-3" href="{CMENUURL}">'.LAN_READ_MORE.'</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    {SETIMAGE: w=0&h=0}
                                    {CPAGEFIELD: name=smallimage}
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->';
	$MENU_TEMPLATE['home-slider']['end'] 				= '
	       </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->';
         
	$MENU_TEMPLATE['home-slider-indicators']['start'] = '<ol class="carousel-indicators">';
	$MENU_TEMPLATE['home-slider-indicators']['body'] =
	'<li data-target="#main-slider" data-slide-to="{CPAGEFIELD: name=counter}" class="{CMENU_TAB_ACTIVE}"></li>';
	$MENU_TEMPLATE['home-slider-indicators']['end'] = '</ol>';


?>
