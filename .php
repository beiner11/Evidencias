<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$appToken = "EVrxTRk2MVD8aZ2tPh3epgPy7zDq84uUvTnRlCFC";
$userToken = "B43VKS814RkrcNHn5PPRgYYN29oIilfBHEtWELlc";
$sessionToken = "u2je725b8g5gt770iu5s4er5c8";

function iniciarSession($client, $appToken,   $userToken)
{

  try {

    $response = $client->get("https://glpi.dwsistemas.net/apirest.php/initSession", [

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

    $response = $client->get("https://glpi.dwsistemas.net/apirest.php/User/11", [
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
