<?php

$valores = inicializar_array(10, -10, 40);
print_r($valores);
$maximo = calcular_maximo($valores);
echo "Maximo = $maximo";


function inicializar_array($numero_elementos, $min, $max) {
    
        $lista = array();
        for ($i = 0; $i < $numero_elementos; $i++) {
    
            $lista[$i] = rand($min, $max);
        }
        return $lista;
}



function calcular_maximo($lista) {
    
    $numero_elementos = count($lista);
    $maximo = $numero_elementos[0];
    for ($i = 1; $i < $numero_elementos; $i++) {
    
        if ($numero_elementos[$i] > $maximo) {
    
            $maximo = $numero_elementos[$i];
    
        }
    
    }
    return $maximo;
}


















?>