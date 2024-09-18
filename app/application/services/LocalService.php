<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LocalService
{

    protected $locationModel, $localModel, $mercadoModel, $giroModel;

    public function __construct($locationModel, $localModel, $mercadoModel, $giroModel)
    {
        $this->locationModel = $locationModel;
        $this->localModel = $localModel;
        $this->mercadoModel = $mercadoModel;
        $this->giroModel = $giroModel;
    }


    public function create($data)
    {
        $locacionData = $this->locacionBuild($data);
        $locacionEntity = $this->locationModel->create($locacionData);
        $localData = $this->localBuild($data, $locacionEntity->id_locacion);
        $localEntity = $this->localModel->create($localData);
        return $localEntity;
    }

    public function findAll()
    {
        return $this->localModel->findAll();
    }

    /*public function update($data, $id)
    {
        $locacionData = $this->locacionBuild($data);
        $locacionEntity = $this->locationModel->update($locacionData,$data["id_locacion"]);
        $direccionData = $this->direccionBuild($data);
        $direccionEntity = $this->direccionModel->update($direccionData,$data["id_direccion"]);
        $mercadoData = $this->mercadoBuild($data, $data["id_locacion"], $data["id_direccion"]);
        $mercadoEntity = $this->mercadoModel->update($mercadoData,$id);
        return $mercadoEntity;
    }*/

    public function delete($id)
    {
        return $this->localModel->delete($id);
    }

    private function locacionBuild($values)
    {
        return array(
            'nombre'     => $values['nombre'],
            'historia'   => $values['historia'],
            'telefono'   => $values['telefono'],
        );
    }

    private function localBuild($values, $idLocacion = 0)
    {
        return array(
            'id_locacion'  => $idLocacion,
            'id_giro'  => $values['giro'],
            'id_mercado'  => $values['mercado'],
            'clave' => $this->claveGenerate(),
            'eslogan'       => $values['eslogan']
        );
    }

    private function claveGenerate($letras = 3, $numeros = 3) {
        $clave = '';
    
        // Generar letras aleatorias
        $letrasArray = array_merge(range('A', 'Z'), range('a', 'z'));
        for ($i = 0; $i < $letras; $i++) {
            $clave .= $letrasArray[array_rand($letrasArray)];
        }
    
        // Generar números aleatorios
        for ($i = 0; $i < $numeros; $i++) {
            $clave .= rand(0, 9);
        }
    
        // Mezclar la clave para asegurar que el formato no sea predecible
        $clave = str_shuffle($clave);
        echo $clave;
        error_log('Este es un mensaje de depuración');
    
        return $clave;
    }

    /*private function direccionBuild($values)
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
    }*/
}
