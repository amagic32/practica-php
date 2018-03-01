<?php

   $personas_valor = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");
   $personas_valor_inverso = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");
   $personas_clave = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");
   $personas_clave_inverso = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");
    
	asort($personas_valor);
	arsort($personas_valor_inverso);
	ksort($personas_clave);
	krsort($personas_clave_inverso);
	
	print_r($personas_valor);
	echo "</br>";
	
	print_r($personas_valor_inverso);
	echo "</br>";
	
	print_r($personas_clave);
	echo "</br>";
	
	print_r($personas_clave_inverso);
	echo "</br>";
	
?>
