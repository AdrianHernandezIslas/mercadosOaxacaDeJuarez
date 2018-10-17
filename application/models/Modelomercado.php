<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelomercado extends CI_Model {

	function __construct(){
		parent::__construct();
		// aqui se caragan todas la librerias que 
		//vamos a utilizar
		$this->load->database();
	}

	public function index()
	{
		echo "aqui toy";
	}

    public function insertar($valores){
    	$query = $this->db->insert('mercado',$valores);
    	return $query;
    }

    public function getMercado($idMercado)
    {
      $this->db->select('*');
      $this->db->from('mercado');
      $this->db->where('idMercado',$idMercado);
      $consulta = $this->db->get();
      return $consulta->row();
    }

    public function getImagenPrincipal($idMercado)
    {
      $this->db->select('*');
      $this->db->from('imagen');
      $this->db->where('idMercado',$idMercado);
      $consulta = $this->db->get();
      return $consulta->row();
    }

    public function getLogoMercado($idMercado)
    {
      $this->db->select('*');
      $this->db->from('imagen');
      $this->db->where('idMercado',$idMercado);
      $consulta = $this->db->get();
      return $consulta->row();
    }

    public function getLocales($idMercado)
    {
      $this->db->select('*');
      $this->db->from('local');
      $this->db->where('idMercado',$idMercado);
      $consulta = $this->db->get();
      return $consulta->result_array();
    }

    public function busca($tags){
      $this->db->select("mercado.idMercado,mercado.nombre as nombreMercado,local.nombre as nombreLocal,eslogan,local.historia,local.logo");
      $this->db->from('mercado');
      $this->db->join('local', 'mercado.idMercado = local.idMercado');
      $this->db->like('tags',$tags);
      $this->db->order_by("nombreMercado");
      $consulta = $this->db->get();
      return $consulta->result_array();
    }
    
    public function getGirosByMercado($idMercado){
      $this->db->select("nombreGiro");
      $this->db->from("local");
      $this->db->join("giro","local.idGiro = giro.idGiro");
      $this->db->where("idMercado",$idMercado);
      $this->db->group_by("nombreGiro");
      $consulta = $this->db->get();
      return $consulta->result_array();
    }

    public function getLocalByGiro($idMercado,$giro){
      $this->db->select("nombre,nombreGiro,eslogan,logo,historia");
      $this->db->from("local");
      $this->db->join("giro","local.idGiro = giro.idGiro");
      $this->db->where("idMercado",$idMercado);
      $this->db->where("nombreGiro",$giro);
      $consulta = $this->db->get();
      return $consulta->result_array();
    }

    public function getMercados(){
      $this->db->select("idMercado,nombre,zona,latitud,longitud");
      $this->db->from("mercado");
      $consulta = $this->db->get();
      return $consulta->result_array();
    }

    public function getMercadoZona($zona){
      $this->db->select("mercado.idMercado,mercado.nombre,descripcion, rutaAbsoluta as imagen");
      $this->db->from("mercado");
      $this->db->join("imagen","mercado.idMercado = imagen.idMercado");
      $this->db->where("zona",$zona);
      $this->db->where("imagen.tipo","1");
      $consulta = $this->db->get();
      return $consulta->result_array();
    }

    public function getMercadosidName(){
      $this->db->select("idMercado,nombre");
      $this->db->from("mercado");
      $consulta = $this->db->get(); 
      return $consulta->result_array();
    }

    public function getLocalesDeMercado($idMercado){
      $this->db->select("local.idLocal,local.nombre,nombreGiro,rutaMediana as imagen");
      $this->db->from("local");
      $this->db->join("giro","local.idGiro = giro.idGiro");
      $this->db->join("recurso","local.idLocal = recurso.idLocal");
      $this->db->where("local.idMercado",$idMercado);
      $consulta = $this->db->get();
      return $consulta->result_array();
    }

    public function getLocal($idLocal){
      $this->db->select("local.idLocal,local.nombre,nombreGiro,logo as imagen,eslogan,historia,tags");
      $this->db->from("local");
      $this->db->join("giro","local.idGiro = giro.idGiro");
      $this->db->where("local.idLocal",$idLocal);
      $consulta = $this->db->get();
      return $consulta->result_array();
    }

    public function getImagenesGaleria($idMercado){
      $this->db->select("rutaAbsoluta");
      $this->db->from("imagen");
      $this->db->where("idMercado",$idMercado);
      $this->db->where("tipo",'2');
      $consulta = $this->db->get();
      return $consulta->result_array();
    }

    public function getGaleria(){
      $this->db->select("rutaAbsoluta");
      $this->db->from("recurso");
      $consulta = $this->db->get();
      return $consulta->result_array();
    }

    public function getImg($idMercado){
      $this->db->select("rutaMediana as imagen");
      $this->db->from("recurso");
      $this->db->where("idMercado",$idMercado);
      $consulta = $this->db->get();
      return $consulta->result_array();
    }
    public function actualizarRecurso($idMercado,$data){
          $this->db->where('idMercado',$idMercado );
          return $this->db->update('mercado', $data);
    }

    public function getMercadosApp($idMercado){
      $this->db->select('mercado.nombre,direccion,historia,horario,rutaAbsoluta as imagen');
      $this->db->from('mercado');
      $this->db->join('imagen','mercado.idMercado = imagen.idMercado');
      $this->db->where('Mercado.idMercado',$idMercado);
      return $this->db->get()->result_array();
    }

    
}
