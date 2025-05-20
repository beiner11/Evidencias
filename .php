<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$appToken = "";
$userToken = "";
$sessionToken = "";

function iniciarSession($client, $appToken,   $userToken)
{

  try {

    $response = $client->get("https://", [

      'headers' => [
        'app-Token' => $appToken,
        'Authorization' => 'user_token '   . $userToken,
        'Content' => 'application/json'

      ]

    ]);

    $datos = json_decode($response->getBody(), true);
    return $datos['session_token'];
  } catch (Exception $e) {
    echo "Error al iniciar session: " .  $e->getMessage();
    return null;
  }
}

function obtenerUser($client, $appToken,  $sessionToken)
{

  try {

    $response = $client->get("https://", [
      'headers' => [
        'app-Token' => $appToken,

        'Session-token' => $sessionToken
      ]
    ]);

    $data = json_decode($response->getBody(), true);

    echo "Nombre:  " . $data['name'] . '<br>';
    echo "Id:  " . $data['id'] .  '<br>';
  } catch (Exception $e) {
    echo "Error al obetener el usuario" . $e->getMessage();

  }

}

$sessionToken = iniciarSession($client, $appToken, $userToken);

obtenerUser($client, $appToken, $sessionToken);

echo "$sessionToken";
