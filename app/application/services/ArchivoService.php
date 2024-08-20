<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ArchivoService
{
    public $config;
    private $archivoLibrary;
    private $httpClientLibrary;
    private $url = "https://api-files-cn1f.onrender.com/api/v1/file/";

    public function __construct($archivoLibrary, $httpClientLibrary)
    {
        $this->config['upload_path']   = 'assets/recursos/img/temp/'; // No se utilizará realmente
        $this->config['allowed_types'] = '*'; // Aceptar cualquier tipo de archivo
        $this->config['max_size']      = 0; // Sin límite de tamaño
        $this->config['overwrite']     = FALSE; // No sobrescribir archivos existentes
        $this->config['remove_spaces'] = TRUE; // Eliminar espacios en el nombre del archivo
        $this->archivoLibrary = $archivoLibrary;
        $this->httpClientLibrary = $httpClientLibrary;
    }

    public function upload($data)
    {
        $base64Data = $this->archivoLibrary->base64Encode($data['full_path']);
        unlink($data['full_path']);
        $response = $this->httpClientLibrary->post($this->url, array("file" => $base64Data, "destination" => "/files/img/mercado"));
        return $response;
    }
}
