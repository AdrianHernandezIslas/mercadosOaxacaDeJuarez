<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ArchivoLibrary
{
    protected $ci; // Instancia de CodeIgniter

    public function __construct()
    {
        $this->ci = &get_instance(); // Obtener instancia de CodeIgniter
    }

    public function base64Encode($filePath)
    {
        if (!file_exists($filePath)) {
            return false;
        }

        // Obtener el tipo MIME del archivo
        $fileType = mime_content_type($filePath);

        // Leer el contenido del archivo
        $fileContent = file_get_contents($filePath);

        // Convertir el contenido a Base64
        $base64 = base64_encode($fileContent);

        // Crear la cadena Base64 con tipo MIME
        return 'data:' . $fileType . ';base64,' . $base64;
    }
}
