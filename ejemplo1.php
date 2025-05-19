<?php
$url = "";

$conexion = curl_init();

curl_setopt($conexion, CURLOPT_URL, $url );


curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true );

$respuesta = curl_exec($conexion);

    if(curl_errno($conexion)){

        echo "Error en curl:" . curl_error($conexion);

    }else {
        $datos = json_decode($respuesta, true);

        echo "Informacion de usuarios: <br>";
        echo "Nombre: " . $datos['name'] . "<br>";
        echo "Correo: " . $datos['email'] . "<br>";
        echo "Ciudad: " . $datos['address']['city'];
    }

curl_close($conexion);