<?php
//Imprimir en pantalla los números del 1 al 100. Si el número es múltiplo de 3 que imprima pepe. Y si es múltiplo de 5: biondi
for ($i=1; $i < 101; $i++) {
  $texto = $i;
  if($i % 3 == 0){
    $texto = $texto . " Pepe";
  }
  if ($i % 5 == 0) {
    $texto = $texto . " Biondi";
  }
  echo $texto . "<br />";
}
?>
