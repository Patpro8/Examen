<?php
function ctrlalumnes($request, $response, $container) {
    $userModel = $container->Alumnes();
    $nom = $request->get(INPUT_POST, "nom");    
    $cognoms = $request->get(INPUT_POST, "cognoms");    
    $data_de_naixement = $request->get(INPUT_POST, "data_de_naixement");    
    $carrer = $request->get(INPUT_POST, "carrer");    
    $numero = $request->get(INPUT_POST, "numero");    
    $ciutat = $request->get(INPUT_POST, "ciutat");    
    $codi_postal = $request->get(INPUT_POST, "codi_postal");    
    $userModel->addalumnes($nom, $cognoms, $data_de_naixement, $carrer, $numero, $ciutat, $codi_postal);
    $response->setTemplate("alumnes.php");
    return $response;
}
