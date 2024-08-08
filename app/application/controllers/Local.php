<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Local extends CI_Controller {

	function __construct(){
		parent::__construct();
		// aqui se caragan todas la librerias que 
		//vamos a utilizar
		$this->load->helper('url');
		$this->load->library('image_lib');
		$this->load->library('RecursoImagen');
		$this->load->model('Modelomercado');
		$this->load->model('ModeloLocal');
		$this->load->model('ModeloRecurso');
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

			$this->recursoimagen->configCarga();
			$this->load->library('upload',$this->recursoimagen->configLoadImg());

            if (!$this->upload->do_upload('userfile')){
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                        //accion en caso de error
            }else{
                		
                $fecha = $this->recursoimagen->getFecha();
                $data = array('upload_data' => $this->upload->data());
                
                
                $this->recursoimagen->resizeImg($data['upload_data']['full_path'],'original',1280,720);
	           	$this->recursoimagen->resizeImg($data['upload_data']['full_path'],'mediana',600,600);
	           	$this->recursoimagen->resizeImg($data['upload_data']['full_path'],'miniatura',150,150);

				$nName = $this->recursoimagen->renombrar($data['upload_data']['file_name'],$data['upload_data']['file_ext'],$idMercado);
				$this->recursoimagen->deleteImg($data['upload_data']['file_name']);
                        	
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
                $this->ModeloRecurso->insertRecurso($idMercado,$idLocal,$nombreArchivo,$tipoArchivo,$rutaMiniatura,$rutaMediana,$rutaCompleta,$extension,$peso,$ancho,$alto,$fecha);
                echo "<br><a  href='".base_url()."Local/nuevo'>Registro exitoso (Click Regresar)</a>";

                }



		}

	}

	
}