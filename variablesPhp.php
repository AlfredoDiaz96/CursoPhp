<?php

$num = 5;
echo "esto es un numero: $num <br>";
var_dump($num);
echo "</br>";


$palabra = "hola";
echo "esto es una palabra: $palabra </br>";
var_dump($palabra);
echo "</br>";



$bool = true;
echo "esto es un booleano: $bool </br>";
var_dump($bool);
echo "</br>";



$colores = array("rojo", "amarillo");
echo "esto es un array de colores: $colores[1] </br>";
var_dump($colores);
echo "</br>";


#ARREGLO CON PROPIEDADES

$verdura = array('verdura1' => "lechuga",'verdura2' => "cebolla");
echo "esto es un array con propiedades: $verdura[verdura1]</br>";
var_dump($verdura);
echo "</br>";



#VARIABLES DE TIPO OBJETO

$frutas = (object) ["fruta1" => "pera", "fruta2" => "manzana"];
echo "esto es una variable objeto: $frutas->fruta2</br>";
var_dump($frutas);
?>