<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'services/ArchivoService.php');
class ArchivoController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); // Para redirección
        $this->load->library('upload'); // Cargar la biblioteca de carga de archivos
        $this->load->library('ArchivoLibrary', null, 'archivoLibrary');
        // Inicializar la configuración
        $this->archivoService = new ArchivoService();
        $this->upload->initialize($this->archivoService->config);
    }

    public function subirArchivo()
    {


        // Verificar si el archivo fue subido
        if ($this->upload->do_upload('archivo')) {
            // Obtener datos del archivo subido
            $data = $this->upload->data();

            $base64Data = $this->archivoLibrary->base64Encode($data['full_path']);

            // Mostrar el resultado
            echo "<h2>Archivo en Base64:</h2>";
            echo "<textarea rows='10' cols='100'>" . htmlspecialchars($base64Data) . "</textarea>";
            unlink($data['full_path']);
        } else {
            // Obtener errores
            $error = $this->upload->display_errors();
            echo "Error al subir el archivo: " . $error;
        }
    }
}
