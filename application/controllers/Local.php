<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Local extends CI_Controller {

	function __construct(){
		parent::__construct();
		// aqui se caragan todas la librerias que 
		//vamos a utilizar
		$this->load->helper('url');
		$this->load->library('image_lib');
		$this->load->model('Modelomercado');
		$this->load->model('ModeloLocal');
		$this->load->model('ModeloGiro');

	}

	public function index(){

	}

	public function nuevo(){
		$values['mercados'] = $this->Modelomercado->getMercadosidName();
		$values['giros']    = $this->ModeloGiro->getGiros();
		$this->load->view('admin/local/formLocal',$values);
	}

	public function update($idLocal){
		$values['mercados'] = $this->Modelomercado->getMercadosidName();
		$values['giros']    = $this->ModeloGiro->getGiros();
		$values['local']	= $this->ModeloLocal->getLocal($idLocal);
		$this->load->view('admin/viewUpdateLocal',$values);
	}

	public function registrar(){
		if ($_POST) {
			$idMercado  = $_POST['idMercado'];
			$nombre 	= addslashes($_POST['nombre']);
			$giro 		= $_POST['giro'];
			$eslogan 	= addslashes($_POST['eslogan']);
			$historia 	= addslashes($_POST['historia']);
			$tags 		= addslashes($_POST['tags']);
			
			ini_set( 'memory_limit', '200M' );
			ini_set('upload_max_filesize', '200M');  
			ini_set('post_max_size', '200M');  
			ini_set('max_input_time', 3600);  
			ini_set('max_execution_time', 3600);

			$config['upload_path']          = 'assets/recursos/img/temp/';
            $config['allowed_types']        = 'jpeg|jpg|png|PNG|JPEG|JPG';
            $config['max_size'] = '1000000';
			$config['max_width']  = '1024000';
			$config['max_height']  = '768000';
                            

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')){
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                        //accion en caso de error
            }else{
                		
                $fecha = getdate();
                $fecha = $fecha['year']."-".$fecha['mon']."-".$fecha['mday'];
                $data = array('upload_data' => $this->upload->data());
                
                
                $config = array(
							    'source_image'      => $data['upload_data']['full_path'],
							    'new_image'         => 'assets/recursos/img/original/',
							    'maintain_ratio'    => true,
							    'width'             => 1280,
							    'height'            => 720
							    );
				$this->image_lib->initialize($config);
				$this->image_lib->resize();//Aqui me quede

                //creando imagen mediana
				$config = array(
						    'source_image'      => $data['upload_data']['full_path'],
						    'new_image'         => 'assets/recursos/img/mediana/',
						    'maintain_ratio'    => true,
						    'width'             => 600,
						    'height'            => 600
						    );
						    $this->image_lib->initialize($config);
						    $this->image_lib->resize();//Aqui me quede 
				 //creando imagen miniatura
				$config = array(
							    'source_image'      => $data['upload_data']['full_path'],
							    'new_image'         => 'assets/recursos/img/miniatura/',
							    'maintain_ratio'    => true,
							    'width'             => 150,
							    'height'            => 150
							    );
				$this->image_lib->initialize($config);
				$this->image_lib->resize();//Aqui me quede
				$nName = $this->renombrar($data['upload_data']['file_name'],$data['upload_data']['file_ext'],$idMercado);
				unlink('assets/recursos/img/temp/'.$data['upload_data']['file_name']);
                        	
                $nombreArchivo	= explode('.',$nName)[0];
				$tipoArchivo	= $data['upload_data']['file_type'];
				$rutaMiniatura	= 'assets/recursos/img/miniatura/'.$nName;
				$rutaMediana	= 'assets/recursos/img/mediana/'.$nName;
				$rutaCompleta	= 'assets/recursos/img/original/'.$nName;
				$extension		= $data['upload_data']['file_ext'];
				$peso			= $data['upload_data']['file_size'];
				$ancho			= $data['upload_data']['image_width'];
				$alto			= $data['upload_data']['image_height'];
				
				$idLocal = $this->ModeloLocal->insertLocal($idMercado,$nombre,$giro,$eslogan,$historia,$tags);	
				//pasarlo al modelo
                $result = $this->db->query('INSERT INTO 
                        							recurso(idMercado,idLocal,nombre,tipo,rutaMiniatura,rutaMediana,rutaAbsoluta,extension,peso,medidas,fechaCreacion) 
                        							VALUES (
                        							"'.$idMercado.'",
                        							"'.$idLocal.'",
                        							"'.$nombreArchivo.'",
                        							"'.$tipoArchivo.'",
                        							"'.$rutaMiniatura.'",
                        							"'.$rutaMediana.'",
                        							"'.$rutaCompleta.'",
                        							"'.$extension.'",
                        							"'.$peso.'",
                        							"'.$ancho.'x'.$alto.'",
                        							"'.$fecha.'"
                        							)');
                echo "<br><a  href='".base_url()."Local/nuevo'>Registro exitoso (Click Regresar)</a>";

                }



		}

	}

	public function renombrar($nombre,$ext,$idMercado){
		$nuevoName = 'img_'.$idMercado.'_'.time().$ext;
		rename('assets/recursos/img/original/'.$nombre,'assets/recursos/img/original/'.$nuevoName);
		rename('assets/recursos/img/mediana/'.$nombre,'assets/recursos/img/mediana/'.$nuevoName);
		rename('assets/recursos/img/miniatura/'.$nombre,'assets/recursos/img/miniatura/'.$nuevoName);
		return $nuevoName;
	}
}