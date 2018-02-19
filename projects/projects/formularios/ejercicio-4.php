<form method="get">

    <div>
        <p>Elige el n&uacute;mero de monedas que quieres lanzar</p>

      
            <input type="number" name="numero_monedas" min="1" max="20" value="5">
      

       </br>

       <p>Elige el tipo de moneda que quieres lanzar</p>
    
        <select name="tipo_monedas">
            <option value="euro">Euro</option>
            <option value="dolar">Dolar Estadounidense</option>
            <option value="yen">Yen Japones</option>
            <option value="libra">Libra Esterlina</option>
            <option value="franco">Franco Suizo</option>
        </select>
    
    </div>

    <div>
        <button type="submit">Enviar</button>
    </div>

</form>

<?php


$numero_monedas =$_GET["numero_monedas"];
$tipo_monedas =$_GET["tipo_monedas"];

$monedas = array();

for($i = 0; $i < $numero_monedas; $i++) {

    $monedas[$i] = rand (0 , 1);

}

$images = array();
$images["dolar"]["cara"] = 'images/dolar_cara.jpg';
$images["dolar"]["cruz"] = 'images/dolar_cruz.jpg';
$images["euro"]["cara"] = 'images/euro_cara.jpg';
$images["euro"]["cruz"] = 'images/euro_cruz.gif';
$images["libra"]["cara"] = 'images/libra_cara.jpg';
$images["libra"]["cruz"] = 'images/libra_cruz.jpeg';
$images["yen"]["cara"] = 'images/yen_cara.png';
$images["yen"]["cruz"] = 'images/yen_cruz.jpeg';
$images["franco"]["cara"] = 'images/franco_suizo_cara.jpg';
$images["franco"]["cruz"] = 'images/franco_suizo_cara.jpg';

for($i = 0; $i < $numero_monedas; $i++) {

    if ($monedas[$i] == 0) {

        echo "<img src=\"".$images[$tipo_monedas]["cara"]."\" width=\"100px\" height=\"100px\">";

    }else {

        echo "<img src=\"".$images[$tipo_monedas]["cruz"]."\" width=\"100px\" height=\"100px\">";
        

    }

}

?>