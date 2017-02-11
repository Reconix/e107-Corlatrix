<?php
/*
* Copyright (c) e107 Inc 2009 - e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id$
*
* Featurebox core item templates
*/

global $sc_style;


// e107 v2.x Defaults. 

$FEATUREBOX_TEMPLATE['corlatrix_custom_home'] = '{SETIMAGE: w=1080&h=720&crop=1}
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="{FEATUREBOX_IMAGE|corlatrix_custom_home=src} ">
                        <img src="{FEATUREBOX_IMAGE|corlatrix_custom_home=src}" class="img-responsive" alt="{FEATUREBOX_TITLE}">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
  ';

 
?>
