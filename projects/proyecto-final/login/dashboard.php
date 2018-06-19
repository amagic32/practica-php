<?php
session_start();

if ($_SESSION['canAccess'] = false) {

    header('Location: login.php');
    exit;

} 

    echo "<h1>Welcome</h1>";

  function Conectar(){
    $link = mysql_connect("1","usuario@usuario.es","usuario","usuario");
    return $link;
   }
      

  


?>

