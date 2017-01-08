<?php
abstract class empleado
{
    protected $id = 0;
    protected $nombre = '';
    protected $apellido = '';
    protected $edad = 0;

    public function setId($id)
    {
        $this->id=$id;
    }
    public function setNombre($nombre)
    {
        $this->nombre=$nombre;
    }
    public function setApellido($apellido)
    {
        $this->apellido=$apellido;
    }
    public function setEdad($edad)
    {
        $this->edad=$edad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getedad()
    {
        return $this->edad;
    }

    //put your code here
}
