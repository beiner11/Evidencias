<?php
 $url = "";
 $conexion = curl_init();

 curl_setopt($conexion, CURLOPT_URL, $url);

 curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

$respuesta = curl_exec($conexion);
 

    if(curl_errno($conexion)){
        echo "Error en curl: " . curl_error($conexion);
    }else{
        $datos = json_decode($respuesta, true);

        echo "Datos climaticos <br>" ;
        echo "Temperatura: "  . $datos['current_weather']['temperature'] . "<br>" ;
        echo "Viento: " . $datos['current_weather']['windspeed'] . "<br>";
        echo "Hora: " . $datos['current_weather']['time'];}

        echo "<h3>Respuesta de la API de GLPI:</h3>";
    echo "<pre>";
    print_r($datos); 
    echo "</pre>";

        curl_close($conexion);



