<?php


$url = "";

$appToken = "";

$userToken = "";

$conexion = curl_init();
curl_setopt($conexion, CURLOPT_URL, $url );

curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);


$header=[
    "app-Token: $appToken",
    "Sess: user_token $userToken",
    "Content-Type: application/json"
];

curl_setopt($conexion, CURLOPT_HTTPHEADER, $header);

$respuesta = curl_exec($conexion);


if(curl_errno($conexion)){
    echo "error " . curl_error($conexion, );

}else {
    $datos = json_decode($respuesta, true);



    echo "<h3>Respuesta de la API de GLPI:</h3>";
    echo "<pre>";
    print_r($datos); 
    echo "</pre>";


}

curl_close($conexion);








