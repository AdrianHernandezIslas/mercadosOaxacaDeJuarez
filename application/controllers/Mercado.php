<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mercado extends CI_Controller {

	function __construct(){
		parent::__construct();
		// aqui se caragan todas la librerias que 
		//vamos a utilizar
		$this->load->helper('url');
		$this->load->model('Modelomercado');
		$this->load->library('image_lib');
	}

	public function index()
	{
         $this->load->view('prueba');
	}

	public function mercado1($clave,$idMercado){
		$resultado['mercado'] = $this->Modelomercado->getMercado($idMercado);

		if($clave == 'saulpopo'){
			echo json_encode($resultado);
		}else{
			echo '<b>ACCESO DENEGADO POR MENSO</b>';
		}
	}

	public function nuevo(){
		
			if($_POST){
				print_r($_POST);
				//$this->Modelomercado->insertar($_POST);
				echo "1";
			}else{
				echo 'Not fount';
			}	
	}

	public function mercado($idMercado)
	{
         $resultado['mercado'] = $this->Modelomercado->getMercado($idMercado);
         $resultado['principal'] = $this->Modelomercado->getImagenPrincipal($idMercado);
         $resultado['logo'] = $this->Modelomercado->getlogoMercado($idMercado);
         $resultado['locales'] = $this->Modelomercado->getLocales($idMercado);
         $resultado['imagenes'] = $this->Modelomercado->getImagenesGaleria($idMercado);
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
			$resultado['local'] = $this->divideMercados($resultado);
			
		}else{
			
		}
	}

	public function divideMercados($local){
		
		//print_r($local);
		$q = new SplStack();
		foreach ($local as $key => $value) {
			switch ($value['idMercado']) {
			    case 1:
			    $q->push($value);
			        //array_push($array[0],$value);
			        break;
			    case 2:
			     	//array_push($array[1],$value);
			        break;
			    case 3:
			        //array_push($array[2],$value);
			        break;
			    case 4:
			        //array_push($array[3],$value);
			        break;
			    case 5:
			        //array_push($array[0], "manzana", "arándano");
			        break;
			    case 6:
			        //array_push($array[0], "manzana", "arándano");
			        break;
			    case 7:
			        //array_push($array[0], "manzana", "arándano");
			        break;
			    case 8:
			        //array_push($array[0], "manzana", "arándano");
			        break;
			    case 9:
			        //array_push($array[0], "manzana", "arándano");
			        break;
			    case 10:
			        //array_push($array[0], "manzana", "arándano");
			        break;
			    case 11:
			        //array_push($array[0], "manzana", "arándano");
			        break;
			    case 12:
			        //array_push($array[0], "manzana", "arándano");
			        break;
			    case 13:
			        //array_push($array[0], "manzana", "arándano");
			        break;
			    case 14:
			        //array_push($array[0], "manzana", "arándano");
			        break;
			    case 15:
			        //array_push($array[0], "manzana", "arándano");
			        break;
			    case 16:
			        //array_push($array[0], "manzana", "arándano");
			        break;
			    
			}
		}

				$q->rewind();
				//$localesDivididos->rewind();
		while($q->valid()){
		    print_r( $q->current());
		    echo "<br>";
		    $q->next();
	     }	

	     //$localesDivididos['noviembre'] = $q;
	     //$localesDivididos['noria'] = $listanoria;
	     //$this->load->view('vistaToniofake',$localesDivididos);
	}

	public function nuevoMercado(){
		if (!$_POST) {
			$this->load->view('formMercado');
		}
	}

	public function updateMercado($idMercado){
		$values['mercado'] = $this->Modelomercado->getMercado($idMercado);

		$this->load->view('admin/vistaUpdateMercado',$values);
		
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

	public function getGirosByMercado($idMercado){
		$resultado['giros'] = $this->Modelomercado->getGirosByMercado($idMercado);
		echo json_encode($resultado);
	}

	public function getLocalByGiro($idMercado,$giro){
		$resultado['locales'] = $this->Modelomercado->getLocalByGiro($idMercado,$giro);
		echo json_encode($resultado,JSON_UNESCAPED_UNICODE);
	}

	public function mercados(){
		$resultado['mercados'] = $this->Modelomercado->getMercados();
		echo json_encode($resultado,JSON_UNESCAPED_UNICODE);
	}

	public function localesDelMercado($idMercado){
		$resultado['locales'] = $this->Modelomercado->getLocalesDeMercado($idMercado);
		echo json_encode($resultado,JSON_UNESCAPED_UNICODE);
	}

	public function local($idLocal){
		$resultado['local'] = $this->Modelomercado->getLocal($idLocal);
		echo json_encode($resultado,JSON_UNESCAPED_UNICODE);
	}
}