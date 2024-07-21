<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recurso extends CI_Controller {

	function __construct(){
		parent::__construct();
		// aqui se caragan todas la librerias que 
		//vamos a utilizar
		$this->load->helper('url');
		$this->load->library('image_lib');
	}

	public function subir(){
		if ($_POST)
		{ 
				$config['upload_path']          = 'recurso/original/';
                $config['allowed_types']        = 'jpeg|jpg|png|PNG|JPEG|JPG';
                $config['max_size']             = 51200;
                

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        //accion en caso de error
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        	

                        	$idRecurso 		= $id;
                        	$lado 		= $_POST['lado'];
                        	$nombreArchivo	= $data['upload_data']['file_name'];
							$tipoArchivo	= $data['upload_data']['file_type'];
							$ruta			= $data['upload_data']['file_path'];
							$rutaCompleta	= $data['upload_data']['full_path'];
							$nombreOriginal	= $data['upload_data']['orig_name'];
							$nombreServidor	= $data['upload_data']['client_name'];
							$extension		= $data['upload_data']['file_ext'];
							$peso			= $data['upload_data']['file_size'];
							$imagen			= $data['upload_data']['is_image'];
							$ancho			= $data['upload_data']['image_width'];
							$alto			= $data['upload_data']['image_height'];
							$tipo			= $data['upload_data']['file_ext'];
							$medidas		= $data['upload_data']['image_size_str'];
							$miniatura		= 'recurso/miniatura/'.$data['upload_data']['file_name'];
							$mediana		= 'recurso/mediana/'.$data['upload_data']['file_name'];
							$medidas = str_replace('"', '', $medidas);
						

                        $result = $this->db->query('INSERT INTO 
                        							imagen(idRecurso,nombreArchivo,tipoArchivo,ruta,rutaCompleta,nombreOriginal,nombreServidor,extension,peso,imagen,ancho,alto,tipo,medidas,miniatura,mediana,lado	) 
                        							VALUES (
                        							"'.$idRecurso.'",
                        							"'.$nombreArchivo.'",
                        							"'.$tipoArchivo.'",
                        							"'.$ruta.'",
                        							"'.$rutaCompleta.'",
                        							"'.$nombreOriginal.'",
                        							"'.$nombreServidor.'",
                        							"'.$extension.'",
                        							"'.$peso.'",
                        							"'.$imagen.'",
                        							"'.$ancho.'",
                        							"'.$alto.'",
                        							"'.$tipo.'",
                        							"'.$medidas.'",
                        							"'.$miniatura.'",
                        							"'.$mediana.'",
                        							"'.$lado.'"
                        							)');
                      //$datas['imagen'] = get_object_vars($this->Modelo_Recurso->getImagenes($id));;
                      
                        echo "listo";


                }
		}
	}
}