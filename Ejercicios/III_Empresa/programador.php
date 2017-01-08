<?php
class programador extends empleado
{
    private $lenguaje = '';
    private $listaLenguajes = array("PHP","NET","python");

   public function setLenguaje($lenguaje)
   {
       if (in_array($lenguaje, $this->listaLenguajes)) {
           $this->lenguaje = $lenguaje;
           return true;
       } else {
           return false;
       }
   }
    public function getLenguaje()
    {
        return $this->lenguaje;
    }
}
