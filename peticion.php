<?php

$url = "";

$conexion = curl_init();

curl_setopt($conexion, CURLOPT_URL, $url);
curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

$respuesta = curl_exec($conexion);

if(curl_errno($conexion)){
    echo "error en cUrl:" . curl_error($conexion);
}else {
    $datos = json_decode($respuesta, true);
echo "<h2>Datos del Pokémon:</h2>";
echo "<strong>Experiencia base:</strong> " . $datos['base_experience'] . "<br>";

echo "<strong>Habilidad 1:</strong> " . $datos['abilities'][0]['ability']['name'] . "<br>";
echo "<strong>Habilidad 2:</strong> " . $datos['abilities'][1]['ability']['name'] . "<br>";

}

curl_close($conexion);