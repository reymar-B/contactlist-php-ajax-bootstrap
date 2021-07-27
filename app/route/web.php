<?php


function getUri($routes,$requestMethod)
{
    return $routes[$requestMethod];
}

function setUri( $requestMethod, $uri )
{
    if(array_key_exists($uri,$requestMethod))
    {
        return $requestMethod[$uri];
    }
    return $requestMethod['error'];
}

