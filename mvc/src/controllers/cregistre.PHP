<?php
function cregistre($request, $response, $container){
    $response->setTemplate("registre.php");
    return $response;    
}