<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();


try{

$response = $client->get('');

    $datos = json_decode($response->getBody(), true);

    foreach($datos as $cliente ){
       echo "ID: " . $cliente['id'] . " - Título: " . $cliente['title'] . "\n";
    }

}catch(Exception $e){
    echo "error" . $e->getMessage();

}









$client = new Client();

try{
    $response = $client->get('https://jsonplaceholder.typicode.com/comments');


    $informes = json_decode($response->getBody(), true);

    foreach($informes as $informe){ 
       
        echo "Id: " . $informe['id'] . "<br>";
        echo "Nombre: ". $informe['name' ]. "<br>";
        echo "Correo: " . $informe['email'] . "<br>";
        echo "Cuerpo: " .$informe['body'];
       
        echo "<hr>";
     }   }
catch(Exception $e){
    echo "error" . $e->getMessage();
}





