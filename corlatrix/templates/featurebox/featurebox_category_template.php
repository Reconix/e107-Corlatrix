<?php
/*
* Copyright (c) e107 Inc 2017 - e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
*
* Featurebox core category templates
*/

// TODO - list of all available shortcodes & schortcode parameters
$FEATUREBOX_CATEGORY_TEMPLATE = array();
 
 
/*
 * Default Template
 * Example call: {FEATUREBOX} or {FEATUREBOX|default}
 */
$FEATUREBOX_CATEGORY_TEMPLATE['corlatrix_custom_home']['list_start'] = '
    <div id="three" class="no-padding">
        <div class="container-fluid">
            <div class="row no-gutter">';

$FEATUREBOX_CATEGORY_TEMPLATE['corlatrix_custom_home']['list_end'] = '
            </div>
        </div>
    </div>';

$FEATUREBOX_CATEGORY_TEMPLATE['corlatrix_custom_home']['col_start'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['corlatrix_custom_home']['col_end'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['corlatrix_custom_home']['item_start'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['corlatrix_custom_home']['item_end'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['corlatrix_custom_home']['item_separator'] = ' ';
$FEATUREBOX_CATEGORY_TEMPLATE['corlatrix_custom_home']['item_empty'] = '';
 
?>