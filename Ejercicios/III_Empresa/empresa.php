<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of empresa
 *
 * @author maximilianodepietro
 */
class empresa {

    private $id = 0;
    private $nombre = "Nombre";
    private $empleado = 0;

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEmpleado($empleado) {
        $this->empleado = $empleado;
    }

}
