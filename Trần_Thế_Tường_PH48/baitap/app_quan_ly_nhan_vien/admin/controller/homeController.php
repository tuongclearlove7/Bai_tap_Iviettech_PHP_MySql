<?php


$action = filter_input(INPUT_POST,'action');
if(empty($action)){
    $action = filter_input(INPUT_GET,'action');
    if(empty($action)){
        $action = 'show_admin_menu';
    }
}


switch ($action) {
    case 'show_admin_menu':
        include('./view/home/home.php');
        break;
    
    default:
        
        break;
}























?>












































