<?php

/*
* class = planta, da arquitetura
*  - atributos =caracteristicas
*  - métodos = ações
* objeto = casa
*/

include 'Animal.php';
 
$gato_dan = new Animal("Daniel ");
$gato_dan->dorme();
$gato_dan->come(" Wiskas");

echo "<br>" .$gato_dan->name ;

echo "<hr> <br>";

$cachorro_dan = new Animal("Rex ");
$cachorro_dan->dorme();
$cachorro_dan->come("bosta");



?>