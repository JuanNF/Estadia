<?php

/*
TIPOS DE DATOS:
Entero (int / integer) = 99
Coma flotante / decimales (float / double) = 10.982
Cadenas (string) = "Texto"
Boleano (bool) = true / false
null
Array (coleccion de datos)
Objetos
*/

$numero = 100;
$decimal = 10.5;
$texto = 'Soy un texto';
$verdadero = true;
$nula = null;

echo gettype($numero).'</br>';
echo gettype($decimal).'</br>';
echo gettype($texto).'</br>';

$texto2 = "Soy un texto $numero";//imprimir variable sin concatenar es unicamento con comillas dobles, es mejor concatenar ya que hay un mejor procesamient con comillas simples
echo $texto2.'</br>';

echo $verdadero.'</br>';
echo gettype($verdadero).'</br>';

echo gettype($nula);

$mi_nombre = 'Araceli Vázquez';
//Debuguear variable
var_dump($mi_nombre);

$mi_nombre2 [] = 'Araceli Vázquez';
$mi_nombre2 [] = 'Araceli Vázquez';
//Debuguear variable
var_dump($mi_nombre2);

//imprimir comillas 
echo "\" Texto ' ";
echo "</br>";
echo '\' Texto " ';

?>