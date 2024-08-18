<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MercadoService
{

    protected $locationModel, $mercadoModel, $direccionModel;

    public function __construct($locationModel, $mercadoModel, $direccionModel)
    {
        $this->mercadoModel = $mercadoModel;
        $this->locationModel = $locationModel;
        $this->direccionModel = $direccionModel;
    }


    public function create($data)
    {
        $locacionData = $this->locacionBuild($data);
        $locacionEntity = $this->locationModel->create($locacionData);
        $direccionData = $this->direccionBuild($data);
        $direccionEntity = $this->direccionModel->create($direccionData);
        $mercadoData = $this->mercadoBuild($data, $locacionEntity->id_locacion, $direccionEntity->id_direccion);
        $mercadoEntity = $this->mercadoModel->create($mercadoData);
        return $mercadoEntity;
    }

    public function findAll()
    {
        return $this->mercadoModel->findAll();
    }

    public function update($data, $id)
    {
        $locacionData = $this->locacionBuild($data);
        $locacionEntity = $this->locationModel->update($locacionData,$data["id_locacion"]);
        $direccionData = $this->direccionBuild($data);
        $direccionEntity = $this->direccionModel->update($direccionData,$data["id_direccion"]);
        $mercadoData = $this->mercadoBuild($data, $data["id_locacion"], $data["id_direccion"]);
        $mercadoEntity = $this->mercadoModel->update($mercadoData,$id);
        return $mercadoEntity;
    }
    public function delete($id)
    {
        return $this->mercadoModel->delete($id);
    }

    private function locacionBuild($values)
    {
        return array(
            'nombre'     => $values['nombre'],
            'historia'   => $values['historia'],
            'telefono'   => $values['telefono'],
        );
    }

    private function mercadoBuild($values, $idLocacion = 0, $idDireccion = 0)
    {
        return array(
            'id_locacion'  => $idLocacion,
            'id_direccion'  => $idDireccion,
            'zona'       => $values['zona'],
            'descripcion' => $values['descripcion'],
            'hora_apertura'    => $values['hora_apertura'],
            'hora_cierre'    => $values['hora_cierre']
        );
    }

    private function direccionBuild($values)
    {
        return array(
            'calle'       => $values['calle'],
            'numero' => $values['numero'],
            'colonia'    => $values['colonia'],
            'codigo_postal'    => $values['codigo_postal'],
            'municipio'    => $values['municipio'],
            'estado'    => $values['estado'],
            'latitud'    => $values['latitud'],
            'longitud'    => $values['longitud'],
        );
    }
}
