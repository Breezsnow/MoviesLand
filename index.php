<?php

require ('src/controller/AddMovieController.php');
require ('src/controller/HomeController.php');
require ('src/controller/ListMovieController.php');
require ('src/controller/SearchMovieController.php');
require ('src/controller/ErrorController.php');

require ('src/model/Model.php');
require ('src/service/DbAcces.php');


$page = filter_input(INPUT_GET, "page");

$route = array(
    "addMovie" => AddMovieController::class,
    "home" => HomeController::class,
    "listMovie" => ListMovieController::class,
    "search" => SearchMovieController::class,
    "error" => ErrorController::class
);



foreach ($route as $routeValue => $className) 
{
    if ($page === $routeValue) {
        $controller = new $className;
        $controller->manage();
        break;
    }
}

if (!isset($controller))
{
    $controller = new ErrorController();
    $controller -> manage();
}