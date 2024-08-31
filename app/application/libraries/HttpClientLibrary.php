<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HttpClientLibrary
{
    public function post($url, $data)
    {
        // Inicializa cURL
        $ch = curl_init($url);

        // Configura opciones para la petición POST
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen(json_encode($data))
        ));

        // Ejecuta la solicitud y obtiene la respuesta
        $respuesta = curl_exec($ch);
        curl_close($ch);
        return json_decode($respuesta, true) ;
    }
}
