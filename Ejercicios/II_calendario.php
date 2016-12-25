<?php
$dias_pasados = date('z');
$dias_totales = bisiesto_query();
$dias_restantes = $dias_totales - $dias_pasados;
$porcentaje_completado = intval($dias_pasados * 100 / $dias_totales);
$porcentaje_restante = intval($dias_restantes * 100 / $dias_totales);

function bisiesto_query() {
    if (date('L') == 1) {
        return 366;
    } else {
        return 365;
        
    }
}

echo '<!DOCTYPE html>' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<title>Ejercicio II - Tiempo</title>' . '<meta charset="utf-8">';
echo "\n" . '<body>';
echo 'Días completados: ' . $dias_pasados;
echo "</br>";
echo 'Porcentaje completado: %' . $porcentaje_completado;
echo '</br>';

for ($index = 0; $index < $porcentaje_completado / 5; $index++) {
    echo '&block;';
}

for ($index1 = 0; $index1 < $porcentaje_restante / 5; $index1++) {
    echo '&blk14;';
}

echo '</body>';
echo "\n" . '</html>';
//&block; &blk14;