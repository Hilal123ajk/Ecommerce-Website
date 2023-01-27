<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/user-register' => 'controllers/user/register.php',
    '/user-login' => 'controllers/user/login.php',
    '/user-register/success' => 'controllers/user/register-success.php'
];



function routeToController($uri,$routes){

    if(array_key_exists($uri,$routes)){

        require $routes[$uri];
    
    }else{
    
        abort();
    
    }
}

function abort($code = 404){

    http_response_code(404);

    require "views/{$code}.view.php";
}

routeToController($uri,$routes);