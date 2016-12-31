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
class programador extends empresa
{
    private $lenguaje = 'PHP';
    private $listaLenguajes = array("PHP","NET","python");
   // REVISAR: private $validarLenguaje = in_array($lenguaje, $listaLenguajes);

   public function setLenguaje($lenguaje)
   {
       if (in_array($lenguaje, $listaLenguajes)) {
           $this->$lenguaje = $lenguaje;
       } else {
           return false;
       }
   }

    public function getLenguaje()
    {
        return $this->lenguaje;
    }
}
