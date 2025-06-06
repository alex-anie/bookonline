<?php

$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

if($uri === '/' || $uri === '/home'){
    require 'views/home.php';
}elseif ($uri === '/book'){
    require 'controllers/dashboard.controller.php';
    require 'views/dashboard/index.php';
}elseif($uri === '/authors'){
    require 'views/authors.php';
} else {
    http_response_code(404);
    require 'views/404.php';
}