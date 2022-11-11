<?php




require __DIR__ . '/../app/Controllers/MainController.php';
require __DIR__ . '/../app/Controllers/CatalogController.php';

if (isset($_GET['_url'])) {
    $pageToDisplay = $_GET['_url'];
} else {
    $pageToDisplay = '/';
}



$routes = [
    '/' =>
    [
        'controller' => 'MainController',
        'method' => 'homeAction',
    ],
    '/catalogue/categorie' =>
    [
        'controller' => 'CatalogController',
        'method' => 'categoryAction',
    ],
];




//var_dump($routes);
if (isset($routes[$pageToDisplay])) {

    //on récupère dans $routeInfos toutes les infos 
    $routeInfos = $routes[$pageToDisplay];



    //on récupère le nom du controller
    $controllerToUse = $routeInfos['controller'];


    //on récupère le nom de la méthod
    $methodToCall = $routeInfos['method'];

    //var_dump($controllerToUse);
    //var_dump($methodToCall);

    //on instancie le bon controller
    $controller = new $controllerToUse();

    //on appel la méthod du bon controller
    $controller->$methodToCall();

} else {
    //page 404 si la ressource n'est pas trouvée
    $controller = new MainController();
    $controller->pageNotFound();
}
