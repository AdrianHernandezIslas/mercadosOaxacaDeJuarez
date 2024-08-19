<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class RecursoImagen{

	public function __construct(){
		$this->CI =& get_instance();
		$this->CI->load->library('image_lib');    
    }

	public function renombrar($nombre,$ext,$idMercado){
		$nuevoName = 'img_'.$idMercado.'_'.time().$ext;
		rename('assets/recursos/img/original/'.$nombre,'assets/recursos/img/original/'.$nuevoName);
		rename('assets/recursos/img/mediana/'.$nombre,'assets/recursos/img/mediana/'.$nuevoName);
		rename('assets/recursos/img/miniatura/'.$nombre,'assets/recursos/img/miniatura/'.$nuevoName);
		return $nuevoName;
	}

	public function configCarga(){
		ini_set( 'memory_limit', '200M' );
		ini_set('upload_max_filesize', '200M');  
		ini_set('post_max_size', '200M');  
		ini_set('max_input_time', 3600);  
		ini_set('max_execution_time', 3600);
	}

	public function configLoadImg(){
			$config['upload_path']          = 'assets/recursos/img/temp/';
            $config['allowed_types']        = 'jpeg|jpg|png|PNG|JPEG|JPG';
            $config['max_size'] = '1000000';
			$config['max_width']  = '1024000';
			$config['max_height']  = '768000';
			return $config;
	}

	public function resizeImg($archivo,$ruta,$ancho,$largo){
		 //creando imagen originalRedimensionada
				$config = array(
							    'source_image'      => $archivo,
							    'new_image'         => 'assets/recursos/img/'.$ruta.'/',
							    'maintain_ratio'    => true,
							    'width'             => $ancho,
							    'height'            => $largo
							    );
				$this->CI->image_lib->initialize($config);
				$this->CI->image_lib->resize();//Aqui me quede
	}

	public function deleteImg($fileName){
		unlink('assets/recursos/img/temp/'.$fileName);
	}

	public function deleteImgs($arreglo){
		foreach ($arreglo as $key => $value){
			unlink($value['rutaMediana']);	
			unlink($value['rutaAbsoluta']);
		}
	}

	public function getFecha(){
		$fecha = getdate();
	    return $fecha = $fecha['year']."-".$fecha['mon']."-".$fecha['mday'];
	}

}


?>