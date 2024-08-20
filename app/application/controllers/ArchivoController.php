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
        $this->load->library('HttpClientLibrary', null, 'httpClient');
        // Inicializar la configuración
        $this->archivoService = new ArchivoService($this->archivoLibrary, $this->httpClient);
        $this->upload->initialize($this->archivoService->config);
    }

    public function subirArchivo()
    {
        // Verificar si el archivo fue subido
        if ($this->upload->do_upload('archivo')) {
            // Obtener datos del archivo subido
            $data = $this->upload->data();
            $response = $this->archivoService->upload($data);
            $this->output->set_content_type('application/json')
                ->set_status_header(201)
                ->set_output($response);
        } else {
            // Obtener errores
            $error = $this->upload->display_errors();
            $error_response = array('status' => 'error', 'message' => $error);
            echo json_encode($error_response, JSON_UNESCAPED_UNICODE);
        }
    }
}
