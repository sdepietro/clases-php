<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of empleado
 *
 * @author maximilianodepietro
 */
abstract class empleado {
    protected $id = 0;
    protected $nombre = 'Juan';
    protected $apellido = 'Pelotas';
    protected $edad = 0;
    
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function setEdad($edad){
        $this->edad=$edad;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getApellido(){
        return $this->apellido;
    }
    
    public function getedad(){
        return $this->edad;
    }
    
    //put your code here
}
