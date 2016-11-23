<?php

require 'libs/kint/Kint.class.php';

//ARRAY

$pepe2 = [];

$pepe2[] = "Maxi";
$pepe2[] = "Lele";
// var_dump(var) = imprime el contenido de un array
// print_r(var) = imprime el array en una sola linea
//
//echo "<pre>";
//print_r($pepe2);
//echo "</pre>"; //etiqueta para separar \n en <br>
//Libreria kint debug php
//die() corta un script muere lo que reciba como parámetro
//exit()
//d($pepe); //mmuestra más elegante
//s($pepe); //muestra más rustico para arrays grandes
//ddd($pepe); //mata lo que viene despois
//sd($pepe); // mata lo que viene después
// recorrer array

for ($i = 0; $i < 5; $i++) {
    echo $i . "<br>";
}

echo "</br>";




for ($i = 0; $i < count($pepe2); $i++) {
    echo $pepe2[$i] . "</br>";
}

echo "<hr>";

foreach ($pepe2 as $var) { //por cada elemento de pepe2 ponelo en var
    echo $var . "</bar>";
}

foreach ($pepe2 as &$var) { //por cada elemento de pepe2 ponelo en var
    echo $var . "</bar>";
    $var = "Oruga";
}

foreach ($pepe2 as $k => $var) {
    echo "K: " . $k . "|| var: " . $var . "</bar";
}

//empty($var) devuelve si la variable ingresada está o no vacía

$a = empty($variabletest);

var_dump($a);

echo '<hr>';

// Array asociativo es un array que en vez de tener índice numérico tiene un índice un string

$array = array(
    "primero" => "kiki",
    1 => "maxi",
    2 => "Sergio",
    3 => "Noelia",
    "cuarto" => "Pepe"
);

var_dump($array);


// La memoria es menos valiosa que el procesamiento por ende:

$cant = count($pepe2); //procesa la función una sola vez
for ($i = 0; $i < $cant; $i++) {
    echo $pepe2[$i] . "<br>";
}

foreach ($pepe2 as $k => $var) {
    if ($k == 3) {
        break; // corta la iteración
    }
    if ($k == 0) {
        continue; // saltea la iteración
    }
    echo "K: " . $k . "|| var: " . $var . "</bar";
}


echo "<hr>";
echo "<h2>FUNCIONES</h2>";
echo "<hr>";

$resultado = calcular(2, 9);

echo "$resultado";

function calcular($var1, $var2) {
    return $var1 + $var2;
}

$juan = 33;

calcularP($juan);

echo $juan;


function calcularP(&$var1){

    $var1 = 55;

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

