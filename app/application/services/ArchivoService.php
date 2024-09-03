<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ArchivoService
{
    public $config;
    private $archivoLibrary;
    private $httpClientLibrary;
    private $archivoModel;
    private $url = "https://api-files-cn1f.onrender.com/api/v1/file/";

    public function __construct($archivoLibrary, $httpClientLibrary, $archivoModel)
    {
        $this->config['upload_path']   = 'assets/recursos/img/temp/'; // No se utilizará realmente
        $this->config['allowed_types'] = '*'; // Aceptar cualquier tipo de archivo
        $this->config['max_size']      = 0; // Sin límite de tamaño
        $this->config['overwrite']     = FALSE; // No sobrescribir archivos existentes
        $this->config['remove_spaces'] = TRUE; // Eliminar espacios en el nombre del archivo
        $this->archivoLibrary = $archivoLibrary;
        $this->httpClientLibrary = $httpClientLibrary;
        $this->archivoModel = $archivoModel;
    }

    public function upload($data)
    {
        $base64Data = $this->archivoLibrary->base64Encode($data['full_path']);
        unlink($data['full_path']);
        $response = $this->httpClientLibrary->post($this->url, array("file" => $base64Data, "destination" => "/files/img/mercado"));
        return $response;
    }

    public function save($bodyRequest, $responseFile)
    {
        $fileEntity =  $this->archivoModel->create([
            "tipo" => $bodyRequest["tipo"],
            "ruta" => $responseFile["file"],
        ]);

        $this->archivoModel->intance_db()->insert("v3.locacion_archivo", [
            "id_archivo"=> $fileEntity->id_archivo,
            "id_locacion"=> $bodyRequest["id_locacion"]
        ]);

        return $fileEntity;
    }

    public function findByIdLocacion($idLocacion){
        return $this->archivoModel->findByIdLocacion($idLocacion);
    }

    public function findPaginationByIdLocacion($idLocacion,$start, $length){
        return $this->archivoModel->findAllPaginationById($idLocacion,$start,$length);
    }
}
