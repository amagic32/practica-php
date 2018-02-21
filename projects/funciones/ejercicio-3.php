<?php

    $valores = inicializar_array(10, -10, 40);
    print_r($valores);
    $media = calcular_media($valores);
    echo "Media = $media";

    function inicializar_array($numero_elementos, $min, $max) {
        
            $lista = array();
            for ($i = 0; $i < $numero_elementos; $i++) {
        
                $lista[$i] = rand($min, $max);
            }
            return $lista;
    }

    function calcular_media($lista) {


        $suma = 0;
        $numero_elementos = count($lista);
        for ($i = 0; $i < count($lista); $i++){

            $suma = $suma + $lista[$i];

        }
        $media = $suma / $numero_elementos;
        return $media;
    }


?>