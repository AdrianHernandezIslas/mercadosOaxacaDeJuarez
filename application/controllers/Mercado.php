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
			$this->load->view('vistaResultBusqueda',$resultado);
		}else{
			
		}
	}

	public function divideMercados($local)
	{	
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
	     }

	     if (!($qPazm->isEmpty())) {
	     	$localesDivididos['paz'] = $qPazm;
	     }

	    if (!($qHidalgo->isEmpty())) {
	    	$localesDivididos['hidalgo'] = $qHidalgo;
	    }
	     	
	    if (!($qCascada->isEmpty())) {
	     	$localesDivididos['cascada'] = $qCascada;
	 	}

	 	if (!($qCandiani->isEmpty())) {
	     	$localesDivididos['candiani'] = $qCandiani;
	 	}

	 	if (!($qVenustianoc->isEmpty())) {
	     	$localesDivididos['venustiano'] = $qVenustianoc;
	     }

	     if (!($qBenitoj->isEmpty())) {
	     	$localesDivididos['benito'] = $qBenitoj;
	     }

	     if (!($qVeinten->isEmpty())) {
	     	$localesDivididos['veinte'] = $qVeinten;
	     }

	     if (!($qArtesanias->isEmpty())) {
	     	$localesDivididos['artesanias'] = $qArtesanias;
	     }

	     if (!($qCentenario->isEmpty())) {
	     	$localesDivididos['centenario'] = $qCentenario;
	     }

	     if (!($qSanchezp->isEmpty())) {
	     	$localesDivididos['sanchez'] = $qSanchezp;
	     }

	     if (!($qMerced->isEmpty())) {
	     	$localesDivididos['merced'] = $qMerced;
	     }

	     if (!($qFlores->isEmpty())) {
	     	$localesDivididos['flores'] = $qFlores;
	     }

	     if (!($qSantarosa->isEmpty())) {
	     	$localesDivididos['santarosa'] = $qSantarosa;
	     }

	     if (!($qAbastos->isEmpty())) {
	     	$localesDivididos['abastos'] = $qAbastos;
	     }

	     if (!($qNoria->isEmpty())) {
	     	$localesDivididos['noria'] = $qNoria;
	     }
	    // $this->load->view('vistaResultBusqueda',$localesDivididos);
	    return $localesDivididos;
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