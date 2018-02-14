<p>Introduzca un n&uacute; para saber el d&iacute;a de la semana.</p>

</br>

<form method="get">

    <div>
    
        <input type="number" name="dia" min="1" max="7" value="5">
    
    </div>

    <div>
    
    <button type="submit">Enviar</button>
    
    </div>

</form>

<?php

$dia = $_GET["dia"];

switch ($dia) {

    case 1:
    echo "Lunes";
    break;

    case 2:
    echo "Martes";
    break;

    case 3:
    echo "Miercoles";
    break;

    case 4:
    echo "Jueves";
    break;

    case 5:
    echo "Viernes";
    break;

    case 6:
    echo "Sabado";
    break;

    case 7:
    echo "Domingo";
    break;
}

?>