<?php

require "app/route/web.php";
require "app/route/routes.php";

$uri = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);

$uri = trim( parse_url($uri, PHP_URL_PATH ),'/');

$requestMethod = $_SERVER['REQUEST_METHOD'];

require_once setUri( getUri( $routes, $requestMethod ), $uri );


