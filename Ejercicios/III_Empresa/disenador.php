<?php
include 'empleado.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of disenador
 *
 * @author maximilianodepietro
 */
class disenador extends empleado{
    private $tipo = 'web';
    
    public function setTipo($tipo){
        $this->tipo=$tipo;
    }
    
    public function getTipo(){
        return $this->tipo;
    }
}
