<?php
require "config.php";

$controller = "";
$method = "";
$params = "";
$url = $_GET['url'] ?? "Index/Index";
$arrayUrl = explode("/", $url);

if (isset($arrayUrl[0])) {
    $controller = $arrayUrl[0];
}
if (isset($arrayUrl[1])) {
    if ($arrayUrl[1] != '') {
        $method = $arrayUrl[1];
    }
}
if (isset($arrayUrl[2])) {
    if ($arrayUrl[2] != '') {
        $params = $arrayUrl[2];
    }
}

spl_autoload_register(function ($class) {
    if (file_exists(LIBRARY . $class . ".php")) {
        require LIBRARY . $class . ".php";
    }
});

require 'Controllers/ErrorController.php';   //Siempre que se pase una url invalida
$error = new ErrorController();
$controller = $controller . 'Controller';
$controllersPath = "Controllers/" . $controller . '.php';
if (file_exists($controllersPath)) {
    require $controllersPath;
    $controller = new $controller();

    if (isset($method)) {
        if (method_exists($controller, $method)) {
            if (isset($params)) {
                $controller->{$method}($params);
            } else {
                $controller->{$method}();
            }
        } else {
            $error->Error($url);
        }
    }
} else {
    $error->Error($url);
}
    // echo $controller . " " . $method . " " . $params;
