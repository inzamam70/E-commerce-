<?php

use function PHPSTORM_META\map;

include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$navItemsInJson = file_get_contents($mainnavitems . "navitems.json");
$navItems = json_decode($navItemsInJson);


// $navgroups = ['Main','Forms','Components','Layout', 'Data Visualization','Extension','Table','Page Kits'];
// $mainnavitems = ['Dashboard','Layouts','Themes','Starter Kits','Change Log',' RTL version'];
// $formnavitems = ['Form components','JSON forms','Text editors','Pickers','Form layouts'];
// $componentsnavitems = ['Basic components','Content styling','Extra components','Color system','Animations','Icons'];
// $layoutnavitems = ['Page layouts','Sidebars','Navbars','Vertical navigation','Horizontal navigation','Menu levels'];
// $visualizationnavitems = ['Echarts library','D3 library','C3 library','Google charts','Mzzzaps integration'];
// $extensionsnavitems = ['Extentions','JQuery UI','File uploaders','Event calenders','Internationalization'];
// $tablesnavitems = ['Basic tables','Data tables','Data tables extantions','Responsive tables'];
// $pagekitsnavitems = ['General pages','Service pages','User pages','Application pages','Widgets'];

// $mainicons = ['<i class="icon-home4"></i>','<i class="icon-copy2"></i>','<i class="icon-color-sampler"></i>','<i class="icon-stack"></i>','<i class="icon-list"></i>','<i class="icon-width"></i>'];
// $layoutsubnavitems = ['Default layout','Layout 2','Layout 3','Layout 4'];

// $mainnavitem2d = [
//     'Dashboard',
//     'Layouts'=>$layoutsubnavitems,
//     'Themes'];

// $navgroup3d = [
//     'Main'=>$mainnavitem2d,
//     'Forms'=>$formnavitems
// ];
//dd($navgroup3d);

?>

<!-- Main sidebar -->
<div class="sidebar sidebar-light sidebar-main sidebar-expand-md">




    <!-- Sidebar content -->
    <div class="sidebar-content">

        <?php //include_once($partials."profile.php"); 
        ?>


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">


                <?php
                foreach ($navItems as $navItem) {
                    //  dd(array_keys(get_object_vars($navItem)));
                    $arrKey = array_keys(get_object_vars($navItem));
                    foreach ($arrKey as $key) {
                        //dd($key);
                        echo '<li class="nav-item-header">
                <div class="text-uppercase font-size-xs line-height-xs">'
                            . $key .
                            '</div> <i class="icon-menu" title="Main"></i></li>';
                        // dd($navitem);
                        foreach ($navItem->$key as $subnavitem) {
                            //    dd($subnavitem);
                            echo '<li class="nav-item">


                    <a href="slider_index.php" class="nav-link active">
                    <i class="icon-home4"></i>
                        <span>
                            ' . $subnavitem . '
                        </span>
                    </a>';


                            echo '</li>';
                        }
                    }



                    // if($key === 1){
                    //     foreach($formnavitems as $formnavitem){
                    //         echo '<li class="nav-item">
                    //         <a href="index.html" class="nav-link active">
                    //         <i class="icon-home4"></i>
                    //             <span>
                    //                 '.$formnavitem.'
                    //             </span>
                    //         </a>

                    //     </li>';
                    //     }
                    // }

                    // if($key === 2){
                    //     foreach($componentsnavitems as $componentsnavitem){
                    //         echo '<li class="nav-item">
                    //         <a href="index.html" class="nav-link active">
                    //             <i class="icon-home4"></i>
                    //             <span>
                    //                 '.$componentsnavitem.'
                    //             </span>
                    //         </a>
                    //     </li>';
                    //     }
                    // }

                    // if($key === 3){
                    //     foreach($layoutnavitems as $layoutnavitem){
                    //         echo '<li class="nav-item">
                    //         <a href="index.html" class="nav-link active">
                    //             <i class="icon-home4"></i>
                    //             <span>
                    //                 '.$layoutnavitem.'
                    //             </span>
                    //         </a>
                    //     </li>';
                    //     }
                    // }

                    // if($key === 4){
                    //     foreach($visualizationnavitems as $visualizationnavitem){
                    //         echo '<li class="nav-item">
                    //         <a href="index.html" class="nav-link active">
                    //             <i class="icon-home4"></i>
                    //             <span>
                    //                 '.$visualizationnavitem.'
                    //             </span>
                    //         </a>
                    //     </li>';
                    //     }
                    // }

                    // if($key === 5){
                    //     foreach($extensionsnavitems as $extensionsnavitem){
                    //         echo '<li class="nav-item">
                    //         <a href="index.html" class="nav-link active">
                    //             <i class="icon-home4"></i>
                    //             <span>
                    //                 '.$extensionsnavitem.'
                    //             </span>
                    //         </a>
                    //     </li>';
                    //     }
                    // }

                    // if($key === 6){
                    //     foreach($tablesnavitems as $tablesnavitem){
                    //         echo '<li class="nav-item">
                    //         <a href="index.html" class="nav-link active">
                    //             <i class="icon-home4"></i>
                    //             <span>
                    //                 '.$tablesnavitem.'
                    //             </span>
                    //         </a>
                    //     </li>';
                    //     }
                    // }

                    // if($key === 7){
                    //     foreach($pagekitsnavitems as $pagekitsnavitem){
                    //         echo '<li class="nav-item">
                    //         <a href="index.html" class="nav-link active">
                    //             <i class="icon-home4"></i>
                    //             <span>
                    //                 '.$pagekitsnavitem.'
                    //             </span>
                    //         </a>
                    //     </li>';
                    //     }
                    // }

                }


                ?>




            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->