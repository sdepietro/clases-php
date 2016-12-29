<?php
include 'empleado.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of programador
 *
 * @author maximilianodepietro
 */
class programador extends empresa{
   private $lenguaje = 'PHP';   
   public function setLenguaje($lenguaje){
       $this->lenguaje=$lenguaje;
   }
   public function getLenguaje(){
       return $this->lenguaje;
   }
 }
