<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MercadoService
{

    protected $locationModel, $mercadoModel; // Esta variable mantendrá la instancia del controlador

    public function __construct($locationModel, $mercadoModel)
    {
        $this->mercadoModel = $mercadoModel;
        $this->locationModel = $locationModel;
    }


    public function create($data)
    {
        $locacionData = $this->locacionBuild($data);
        $locacionEntity = $this->locationModel->create($locacionData);
        $mercadoData = $this->mercadoBuild($data, $locacionEntity->id_locacion);
        $mercadoEntity = $this->mercadoModel->create($mercadoData);
        return $mercadoEntity;
    }

    public function findAll(){
        return $this->mercadoModel->findAll();
    }

    private function locacionBuild($values)
    {
        return array(
            'nombre'     => $values['nombre'],
            'historia'   => $values['historia'],
            'telefono'   => $values['telefono'],
        );
    }

    private function mercadoBuild($values, $idLocacion = 0)
    {
        return array(
            'id_locacion'  => $idLocacion,
            'direccion'  => $values['direccion'],
            'zona'       => $values['zona'],
            'descripcion' => $values['descripcion'],
            'latitud'    => $values['latitud'],
            'longitud'   => $values['longitud'],
            'horario'    => $values['horaA'] . '-' . $values['horaC']
        );
    }
}
