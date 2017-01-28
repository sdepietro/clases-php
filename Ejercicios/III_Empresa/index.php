<?php
include ("empleado.php");
include ("disenador.php");
include ("programador.php");
include ("empresa.php");

$empresa = new empresa ( "Dantex" );
$empleado = new programador ();

$empleado->setNombre ( "Maxi" );
echo $empleado->getNombre () . "</br> <pre>";
var_dump ( $empleado );
echo "</pre>";
$empleado->setApellido ( "Pato" );
$empleado->setEdad ( 15 );
$result = $empleado->setLenguaje ( "PHP" );
if ($result === false) {
	echo 'ERROR';
}
echo "<pre>";
var_dump ( $empleado );
echo "</pre>";

$empresa->setEmpleado ( $empleado );

$empleado = new disenador ();

$empleado->setNombre ( "Maxi" );
echo $empleado->getNombre () . "</br> <pre>";
var_dump ( $empleado );
echo "</pre>";
$empleado->setApellido ( "Pato" );
$empleado->setEdad ( 15 );
$result = $empleado->setTipo ( "web" );
if ($result === false) {
	echo 'ERROR';
}
echo "<pre>";
var_dump ( $empleado );
echo "</pre>";
