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

    public function update($data, $id)
    {
        $locacionData = $this->locacionBuild($data);
        $locacionEntity = $this->locationModel->update($locacionData,$data["id_locacion"]);
        $localData = $this->localBuild($data, $data["id_locacion"], false);
        $localEntity = $this->localModel->update($localData,$id);
        return $localEntity;
    }

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

    private function localBuild($values, $idLocacion = 0, $flagCreate=true)
    {
        return array(
            'id_locacion' => $idLocacion,
            'id_giro' => $values['id_giro'],
            'id_mercado' => $values['id_mercado'],
            'clave' => $flagCreate ? $this->claveGenerate() : $values['clave'],
            'eslogan' => $values['eslogan']
        );
    }

    private function claveGenerate($letras = 3, $numeros = 3) {
        $clave = '';
    
        // Genera letras aleatorias
        $letrasArray = array_merge(range('A', 'Z'), range('a', 'z'));
        for ($i = 0; $i < $letras; $i++) {
            $clave .= $letrasArray[array_rand($letrasArray)];
        }
    
        // Genera números aleatorios
        for ($i = 0; $i < $numeros; $i++) {
            $clave .= rand(0, 9);
        }
    
        // Combina la clave para que no se repita
        $clave = str_shuffle($clave);
        echo $clave;
        error_log('Este es un mensaje de error');
    
        return $clave;
    }
}
