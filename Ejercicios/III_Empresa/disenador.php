<?php
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
class disenador extends empleado
{
    private $tipo = 'web';
    private $listaTipos = array('grafico','web');
    
    public function setTipo($tipo)
    {
        if (in_array($tipo, $this->listaTipos)) {
            $this->tipo=$tipo;
        } else {
            return false;
        }
    }
    public function getTipo()
    {
        return $this->tipo;
    }
}
