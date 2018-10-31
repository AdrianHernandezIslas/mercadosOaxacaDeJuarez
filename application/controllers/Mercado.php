<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mercado extends CI_Controller {

	private $LOCAL_KEY;

	function __construct(){
		parent::__construct();
		// aqui se caragan todas la librerias que 
		//vamos a utilizar
		$this->load->helper('url');
		$this->load->model('Modelomercado');
		$this->load->library('image_lib');
		$this->LOCAL_KEY = 'r5da3dfd0dssw4hfohu9fdgrv14';
	}

	public function index()
	{
         $this->load->view('prueba');
	}

	public function nuevo(){
		if (!$_POST) {
			$this->load->view('admin/mercado/formMercado');
		}
	}
	
	public function actualizar($idMercado){
	  
	   if($_POST){
	       echo $this->Modelomercado->actualizarRecurso($idMercado,$_POST);
	   }
	    
	}

	public function mercado($idMercado)
	{
         $resultado['mercado'] = $this->Modelomercado->getMercado($idMercado);
         $resultado['principal'] = $this->Modelomercado->getImagenPrincipal($idMercado);
         $resultado['logo'] = $this->Modelomercado->getlogoMercado($idMercado);
         $resultado['locales'] = $this->Modelomercado->getLocales($idMercado);
         $resultado['imagenes'] = $this->Modelomercado->getImagenesGaleria($idMercado);
         $resultado['alimentos'] = $this->Modelomercado->getLocalByGiro($idMercado,'Alimentos');
         $resultado['panaderia'] = $this->Modelomercado->getLocalByGiro($idMercado,'Panaderia');
         $resultado['menudo'] = $this->Modelomercado->getLocalByGiro($idMercado,'Menudo');
         $resultado['flores'] = $this->Modelomercado->getLocalByGiro($idMercado,'Flores');
         $resultado['carnes'] = $this->Modelomercado->getLocalByGiro($idMercado,'Carnes');
         $resultado['artesanias'] = $this->Modelomercado->getLocalByGiro($idMercado,'Artesanias');
         $resultado['textil'] = $this->Modelomercado->getLocalByGiro($idMercado,'Textil');
         $this->load->view('vistaMercado',$resultado);
	}

	public function galeria()
	{
         $resultado['imagenes'] = $this->Modelomercado->getGaleria();
         
         $this->load->view('vistaGaleria',$resultado);
	}

	public function nosotros(){
		$this->load->view('vistaNosotros');
	}

	public function busqueda(){
		if ($_POST) {
			$resultado = $this->Modelomercado->busca($_POST['tags']);
			$resultado = $this->divideMercados($resultado);
			if ($resultado==true) {
				$this->load->view('vistaResultBusqueda',$resultado);
			}
			else{
				$this->load->view('mensajeBusqueda');
			}
			
		}else{
			
		}
	}

	public function divideMercados($local){
		$qSocrates = new SplStack();
		$qPazm = new SplStack();
		$qHidalgo = new SplStack();
		$qCascada = new SplStack();
		$qCandiani = new SplStack();
		$qVenustianoc = new SplStack();
		$qBenitoj = new SplStack();
		$qVeinten = new SplStack();
		$qArtesanias = new SplStack();
		$qCentenario = new SplStack();
		$qSanchezp = new SplStack();
		$qMerced = new SplStack();
		$qFlores = new SplStack();
		$qSantarosa = new SplStack();
		$qAbastos = new SplStack();
		$qNoria = new SplStack();

		$bandera=false;


		foreach ($local as $key => $value) {
			switch ($value['idMercado']) {
			    case 1:
			    	$qSocrates->push($value);
			    	
			        break;
			    case 2:
			    	$qPazm->push($value);
			        break;
			    case 3:
			        $qHidalgo->push($value);
			        break;
			    case 4:
			        $qCascada->push($value);
			        break;
			    case 5:
			        $qCandiani->push($value);
			        break;
			    case 6:
			        $qVenustianoc->push($value);
			        break;
			    case 7:
			        $qBenitoj->push($value);
			        break;
			    case 8:
			        $qVeinten->push($value);
			        break;
			    case 9:
			        $qArtesanias->push($value);
			        break;
			    case 10:
			        $qCentenario->push($value);
			        break;
			    case 11:
			        $qSanchezp->push($value);
			        break;
			    case 12:
			        $qMerced->push($value);
			        break;
			    case 13:
			        $qFlores->push($value);
			        break;
			    case 14:
			        $qSantarosa->push($value);
			        break;
			    case 15:
			        $qAbastos->push($value);
			        break;
			    case 16:
			        $qNoria->push($value);
			        break;
			}
		}
                 $qSocrates->rewind();
                 $qPazm->rewind();
                 $qHidalgo->rewind();
                 $qCascada->rewind();
				 $qCandiani->rewind();
		
	     
	     if (!($qSocrates->isEmpty())) {
	     	$localesDivididos['socrates'] = $qSocrates;
	     	$bandera=true;
	     }

	     if (!($qPazm->isEmpty())) {
	     	$localesDivididos['paz'] = $qPazm;
	     	$bandera=true;
	     }

	    if (!($qHidalgo->isEmpty())) {
	    	$localesDivididos['hidalgo'] = $qHidalgo;
	    	$bandera=true;
	    }
	     	
	    if (!($qCascada->isEmpty())) {
	     	$localesDivididos['cascada'] = $qCascada;
	     	$bandera=true;
	 	}

	 	if (!($qCandiani->isEmpty())) {
	     	$localesDivididos['candiani'] = $qCandiani;
	     	$bandera=true;
	 	}

	 	if (!($qVenustianoc->isEmpty())) {
	     	$localesDivididos['venustiano'] = $qVenustianoc;
	     	$bandera=true;
	     }

	     if (!($qBenitoj->isEmpty())) {
	     	$localesDivididos['benito'] = $qBenitoj;
	     	$bandera=true;

	     }

	     if (!($qVeinten->isEmpty())) {
	     	$localesDivididos['veinte'] = $qVeinten;
	     	$bandera=true;
	     }

	     if (!($qArtesanias->isEmpty())) {
	     	$localesDivididos['artesanias'] = $qArtesanias;
	     	$bandera=true;
	     }

	     if (!($qCentenario->isEmpty())) {
	     	$localesDivididos['centenario'] = $qCentenario;
	     	$bandera=true;
	     }

	     if (!($qSanchezp->isEmpty())) {
	     	$localesDivididos['sanchez'] = $qSanchezp;
	     	$bandera=true;
	     }

	     if (!($qMerced->isEmpty())) {
	     	$localesDivididos['merced'] = $qMerced;
	     	$bandera=true;
	     }


	     if (!($qFlores->isEmpty())) {
	     	$localesDivididos['flores'] = $qFlores;
	     	$bandera=true;
	     }

	     if (!($qSantarosa->isEmpty())) {
	     	$localesDivididos['santarosa'] = $qSantarosa;
	     	$bandera=true;
	     }

	     if (!($qAbastos->isEmpty())) {
	     	$localesDivididos['abastos'] = $qAbastos;
	     	$bandera=true;
	     }

	     if (!($qNoria->isEmpty())) {
	     	$localesDivididos['noria'] = $qNoria;
	     	$bandera=true;
	     }

	     if ($bandera==false) {
	     	return $bandera;
	     }
	     
	    // $this->load->view('vistaResultBusqueda',$localesDivididos);
	    return $localesDivididos;
}	


	public function updateMercado($idMercado){
		$values['mercado'] = $this->Modelomercado->getMercado($idMercado);
		$values['imagenes'] = $this->Modelomercado->imgsDelMercado($idMercado);
		$this->load->view('admin/vistaUpdateMercado',$values);	
	}

	public function insertImgMercado($idMercado){
		if ($_POST) {
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
			if (!$this->upload->do_upload('foto')){
	                        $error = array('error' => $this->upload->display_errors());
	                        print_r($error);
	                        //accion en caso de error
	        }else{
	        	$fecha = getdate();
	            $fecha = $fecha['year']."-".$fecha['mon']."-".$fecha['mday'];
	            $data = array('upload_data' => $this->upload->data());

	            //creando imagen originalRedimensionada
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

				unlink('assets/recursos/img/temp/'.$data['upload_data']['file_name']);

				$nombreArchivo	= $data['upload_data']['file_name'];
				$rutaMediana	= 'assets/recursos/img/mediana/'.$data['upload_data']['file_name'];
				$rutaCompleta	= 'assets/recursos/img/original/'.$data['upload_data']['file_name'];
				$peso			= $data['upload_data']['file_size'];


				 $result = $this->db->query('INSERT INTO 
                        							imagen(idMercado,nombre,rutaMediana,rutaAbsoluta,peso,fechaCreacion,tipo) 
                        							VALUES (
                        							"'.$idMercado.'",
                        							"'.$nombreArchivo.'",
                        							"'.$rutaMediana.'",
                        							"'.$rutaCompleta.'",
                        							"'.$peso.'",
                        							"'.$fecha.'",
                        							"'.$_POST['tipo'].'"
                        							)');
				 echo "Registro Completo";
        	}
		}	
	}


	public function admin(){
		$values['CH'] = $this->Modelomercado->getMercadoZona('CH');
		$values['C'] = $this->Modelomercado->getMercadoZona('C');
		$values['N'] = $this->Modelomercado->getMercadoZona('N');
		$values['S'] = $this->Modelomercado->getMercadoZona('S');
		$values['P'] = $this->Modelomercado->getMercadoZona('P');
		$values['O'] = $this->Modelomercado->getMercadoZona('O');
		$this->load->view('admin/vistaMercados',$values);
	}

	public function actualizarMercado(){
		if ($_POST) {
			//print_r($_POST);
			$nombre 	= $_POST['nombre'];
			$direccion 	= $_POST['direccion'];
			$telefono	= $_POST['telefono'];
			$zona  		= $_POST['zona'];
			$historia	= $_POST['historia'];
			$descripcion = $_POST['descripcion'];
			$latitud    = $_POST['latitud'];
			$longitud 	= $POST['longitud'];
			
		}else{
			echo "Not Found";
		}
	}

	public function getGirosByMercado($key,$idMercado){
		if($key == $this->LOCAL_KEY){
			$resultado['giros'] = $this->Modelomercado->getGirosByMercado($idMercado);
			echo json_encode($resultado);
		}else{
			echo "<br><br><br><br><br><br><center><b>Authentication Error</b></center>";
		}	
	}

	public function getLocalByGiro($key,$idMercado,$giro){
		if ($key == $this->LOCAL_KEY) {
			$resultado['locales'] = $this->Modelomercado->getLocalByGiro($idMercado,$giro);
			echo json_encode($resultado,JSON_UNESCAPED_UNICODE);
		}else{
			echo "<br><br><br><br><br><br><center><b>Authentication Error</b></center>";
		}
		
	}

	public function mercados($key){
		if ($key == $this->LOCAL_KEY) {
			$resultado['mercados'] = $this->Modelomercado->getMercados();
			echo json_encode($resultado,JSON_UNESCAPED_UNICODE);
		}else{
			echo "<br><br><br><br><br><br><center><b>Authentication Error</b></center>";
		}
		
	}

	public function localesDelMercado($key,$idMercado){
		if ($key == $this->LOCAL_KEY) {
			$resultado['locales'] = $this->Modelomercado->getLocalesDeMercado($idMercado);
			echo json_encode($resultado,JSON_UNESCAPED_UNICODE);
		}else{
			echo "<br><br><br><br><br><br><center><b>Authentication Error</b></center>";
		}
		
	}

	public function local($key,$idLocal){
		if ($key == $this->LOCAL_KEY) {
			$resultado['local'] = $this->Modelomercado->getLocal($idLocal);
			echo json_encode($resultado,JSON_UNESCAPED_UNICODE);
		}else{
			echo "<br><br><br><br><br><br><center><b>Authentication Error</b></center>";
		}
		
    }

    public function mercadoById($key,$idMercado){
		if($key == $this->LOCAL_KEY){
			$resultado['mercado'] =  $this->Modelomercado->getMercadosApp($idMercado);
			echo json_encode($resultado,JSON_UNESCAPED_UNICODE);
		}else{
			echo "<br><br><br><br><br><br><center><b>Authentication Error</b></center>";
		}
	}

	public function imgFromMercado($key,$idMercado){
		if($key == $this->LOCAL_KEY){
			$resultado['imagenes'] = $this->Modelomercado->getImg($idMercado);
			echo json_encode($resultado,JSON_UNESCAPED_UNICODE);
		}else{
			echo "Error";
		}
	}
}