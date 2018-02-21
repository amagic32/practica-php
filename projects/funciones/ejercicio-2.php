<?php
$listaA = inicializar_array(10, 1, 20);
echo "<pre>";
print_r($listaA);
echo "</pre>";

$listaB = inicializar_array(30, -10, -20);
echo "<pre>";
print_r($listaB);
echo "</pre>";

function inicializar_array($numero_elementos, $min, $max) {

    $lista = array();
    for ($i = 0; $i < $numero_elementos; $i++) {

        $lista[$i] = rand($min, $max);
    }
    return $lista;
}

?>