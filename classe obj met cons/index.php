<?php

/*
* classe = planta, da arquitetura
*  - atributos = caracteristicas
*  - métodos = ações
* objeto = casa


include 'Animal.php';
 
$gato_dan = new Animal("Daniel ");
$gato_dan->dorme();
$gato_dan->come(" Wiskas");

echo "<br>" .$gato_dan->name ;

echo "<hr> <br>";

$cachorro_dan = new Animal("Rex ");
$cachorro_dan->dorme();
$cachorro_dan->come("bosta");

*/
try {
    include "Gato.php";

    $gato2 = new Gato(" daniel ");
    $gato2->come(" Sache");
    $gato2->dorme();
    $gato2->miar();

    echo "<hr>";
    

    include "Cachorro.php";

    $cao = new Cachorro(" Maradona ");
    $cao->dorme();
    $cao->come("carne fresca <br>");
    $cao->latir();

    
}catch(Exception $e){

    echo $e->getMessage();
}


?>