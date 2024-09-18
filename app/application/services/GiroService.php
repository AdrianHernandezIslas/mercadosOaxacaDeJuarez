<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GiroService
{

    protected $giroModel;

    public function __construct($giroModel)
    {
        $this->giroModel = $giroModel;
    }

    public function findAll()
    {
        return $this->giroModel->findAll();
    }
}
