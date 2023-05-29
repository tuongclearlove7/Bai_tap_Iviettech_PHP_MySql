<?php

session_start();

$controller = filter_input(INPUT_POST,'controller');
if(empty($controller)){
    $controller = filter_input(INPUT_GET,'controller');
    if(empty($controller)){
        $controller = 'homeController';
    }
}

switch ($controller) {
    case 'homeController':
        include('./controller/homeController.php');
        break;
    case 'nhanvienController':
        include('./controller/nhanvienController.php');
        break;
    case 'phongbanController':
        include('./controller/phongbanController.php');
        break;
    case 'vitriController':
        include('./controller/vitriController.php');
        break;
    case 'homepage':
        include('./controller/homeController.php');
        break;
    default:
        
        break;
}


























?>












































