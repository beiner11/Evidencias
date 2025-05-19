
<?php
$url = "https://randomuser.me/api/";

$conexion = curl_init();

curl_setopt($conexion, CURLOPT_URL, $url);

curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

$respuesta = curl_exec($conexion);

    if(curl_errno($conexion)){
        echo "Error en cUrl" . curl_error($conexion) . "<br>";
    }else {
        $datos = json_decode($respuesta, true);

            

        
    echo "nombre "  .  $datos['results']['0']['login']['username'];
    echo "longitud" . $datos['results']['0']['location']['coordinates']['longitude'];
    echo "Correo" . $datos['results']['0']['email'];

  



    }

    curl_close($conexion);



