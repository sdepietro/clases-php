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
class empresa
{
    private $id = 0;
    private $nombre = "";
    private $listaEmpleados = array();

    public function __construct($nombre = null)
    {
        if (empty($nombre)) {
            $this->setNombre($nombre);
        }
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setEmpleado($empleado)
    {
        $empleado->setId(count($this->listaEmpleados) + 1); //devuelve el total de elementos del array + 1 para que no empiece por 0
        $this->listaEmpleados[] = $empleado;
    }
    public function getPromedioEdad(){
      foreach ($this->listaEmpleados as $value) {
        # code...
      }
    }
//    public function
}
