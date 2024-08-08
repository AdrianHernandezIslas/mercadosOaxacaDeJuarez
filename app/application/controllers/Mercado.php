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
		$this->load->model('ModeloImagen');
		$this->load->library('RecursoImagen');
		$this->load->helper('download');
		$this->LOCAL_KEY = 'r5da3dfd0dssw4hfohu9fdgrv14';
	}

	public function index()
	{
         $this->load->view('prueba');
	}

	public function nuevo(){
		if(!$_POST){
			$this->load->view('admin/mercado/formMercado');
		}
	}

	public function eliminar($idMercado){
		$this->recursoimagen->deleteImgs($this->Modelomercado->getImgRutas($idMercado));
		$si = $this->Modelomercado->eliminarMercado($idMercado);
		if ($si) {
			redirect('Mercado/admin');
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
         $resultado['alimentos'] = $this->Modelomercado->getLocalGiro($idMercado,'Alimentos');
         $resultado['panaderia'] = $this->Modelomercado->getLocalGiro($idMercado,'Panaderia');
         $resultado['menudo'] = $this->Modelomercado->getLocalGiro($idMercado,'Menudo');
         $resultado['flores'] = $this->Modelomercado->getLocalGiro($idMercado,'Flores');
         $resultado['carnes'] = $this->Modelomercado->getLocalGiro($idMercado,'Carnes');
         $resultado['artesanias'] = $this->Modelomercado->getLocalGiro($idMercado,'Artesanias');
         $resultado['textil'] = $this->Modelomercado->getLocalGiro($idMercado,'Textil');
         $this->load->view('vistaMercado',$resultado);
	}

	public function galeria()
	{
         $resultado['noviembre'] = $this->Modelomercado->getImagenesGaleria(8);
         $resultado['artesanias'] = $this->Modelomercado->getImagenesGaleria(9);
         $resultado['centenario'] = $this->Modelomercado->getImagenesGaleria(10);
         $resultado['pascuas'] = $this->Modelomercado->getImagenesGaleria(11);
         $resultado['merced'] = $this->Modelomercado->getImagenesGaleria(12);
         $resultado['socrates'] = $this->Modelomercado->getImagenesGaleria(1);
         
         $this->load->view('vistaGaleria',$resultado);
	}

	public function nosotros(){
		$this->load->view('vistaNosotros');
	}

	public function descargas(){
		$this->load->view('vistaAplicacion');
	}

	public function getFile(){
		force_download('assets/app/Mercados_Oaxaca_App.apk', NULL);
		redirect('Mercado/descargas');
	}

	public function busqueda(){
		if($_POST) {
			$resultado = $this->Modelomercado->busca($_POST['tags']);
			$resultado = $this->divideMercados($resultado);
			if ($resultado) {
				$this->load->view('vistaResultBusqueda',$resultado);
			}
			else{
				$this->load->view('mensajeBusqueda');
			}	
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

	     if (!$bandera) {
	     	return $bandera;
	     }
	     
	    // $this->load->view('vistaResultBusqueda',$localesDivididos);
	    return $localesDivididos;
}	


	public function updateMercado($idMercado){
		$values['mercado'] = $this->Modelomercado->getMercado($idMercado);
		$values['imagenes'] = $this->Modelomercado->imgsDelMercado($idMercado);
		$this->load->view('admin/mercado/vistaUpdateMercado',$values);	
	}

	public function insertMercado(){
		//RENOMBRAR IMAGENES FALTA
			$this->recursoimagen->configCarga();
			$this->load->library('upload',$this->recursoimagen->configLoadImg());
			if(!$this->upload->do_upload('foto')){
	             $error = array('error' => $this->upload->display_errors());
	             print_r($error);
	                        //accion en caso de error
	        }else{
	        	$fecha = $this->recursoimagen->getFecha();
	            $data = array('upload_data' => $this->upload->data());

	           	$this->recursoimagen->resizeImg($data['upload_data']['full_path'],'original',1280,720);
	           	$this->recursoimagen->resizeImg($data['upload_data']['full_path'],'mediana',600,600);
	           	$this->recursoimagen->resizeImg($data['upload_data']['full_path'],'miniatura',150,150);

				$idMercado = $this->insertarMercado($_POST);
				$nName = $this->recursoimagen->renombrar($data['upload_data']['file_name'],$data['upload_data']['file_ext'],$idMercado);
				$this->recursoimagen->deleteImg($data['upload_data']['file_name']);
				$nombreArchivo	= explode('.',$nName)[0];
				$rutaMiniatura	= 'assets/recursos/img/miniatura/'.$nName;
				$rutaMediana	= 'assets/recursos/img/mediana/'.$nName;
				$rutaCompleta	= 'assets/recursos/img/original/'.$nName;
				$peso			= $data['upload_data']['file_size'];
				$tipo = 1;

				$this->ModeloImagen->insertarImagen($idMercado,$nombreArchivo,$rutaMediana,$rutaCompleta,$peso,$fecha,$tipo);
				 echo "Registro Completo";
        	}	
	}

	private function insertarMercado($values){
		$datos = array('nombre'     => $values['nombre'],
				  'direccion'  => $values['direccion'],
				  'telefono'   => $values['telefono'],
				  'zona'       => $values['zona'],
				  'descripcion'=> $values['descripcion'],
				  'historia'   => $values['historia'],
				  'latitud'    => $values['latitud'],
				  'longitud'   => $values['longitud'],
				  'horario'    => $values['horaA'].'-'.$values['horaC']
		         );
			return $this->Modelomercado->insertar($datos);		
			
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

	public function imgsMercados($key){
		if($key == $this->LOCAL_KEY){
			$resultado['imagenes'] = $this->Modelomercado->getImgPrincipalDeMercado();
			echo json_encode($resultado,JSON_UNESCAPED_UNICODE);
		}else{
			echo "Error";
		}
	}


}