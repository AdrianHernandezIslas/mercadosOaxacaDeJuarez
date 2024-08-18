<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service
{
    protected $ci; // Instancia de CodeIgniter

    public function __construct() {
        $this->ci = &get_instance(); // Obtener instancia de CodeIgniter
    }

}