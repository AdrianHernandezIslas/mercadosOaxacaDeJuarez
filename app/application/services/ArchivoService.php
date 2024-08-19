<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ArchivoService
{
    public $config;
    
    public function __construct()
    {
        $this->config['upload_path']   = 'assets/recursos/img/temp/'; // No se utilizará realmente
        $this->config['allowed_types'] = '*'; // Aceptar cualquier tipo de archivo
        $this->config['max_size']      = 0; // Sin límite de tamaño
        $this->config['overwrite']     = FALSE; // No sobrescribir archivos existentes
        $this->config['remove_spaces'] = TRUE; // Eliminar espacios en el nombre del archivo
    }
}
