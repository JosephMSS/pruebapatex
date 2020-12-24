<?php
require_once 'autoload.php';
$requestUri=$_SERVER['REQUEST_URI'];
if ($requestUri=='/') {
    $controller= new ProgressBarController;
    $controller->index();
    exit();
}
if (isset($_GET['controller']) && class_exists($_GET['controller'].'Controller')) {
    $nameController = $_GET['controller'].'Controller';
    $controller = new $nameController;

    if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
        $action = $_GET['action'];
        $controller->$action();
    } else {
        var_dump('Page not found 
        ');
    }
} else {
    var_dump('Page not found controller');
}
