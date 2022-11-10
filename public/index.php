<?php




require __DIR__ . '/../app/Controllers/MainController.php';


if (isset($_GET['_url'])) {
    $pageToDisplay = $_GET['_url'];
} else {
    $pageToDisplay = '/';
}

$routes = [

    
    '/' => 'homeAction',
];
//var_dump($routes);
if (isset($routes[$pageToDisplay])) {


    $controller = new MainController();


    $methodToCall = $routes[$pageToDisplay];


    $controller->$methodToCall();


} else {
    $controller = new MainController();
    $controller->pageNotFound();
}
