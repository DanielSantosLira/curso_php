<?php

// i | value
// [0] new Gato("Daniel"); 
// [1] new Gato("Nicolau")
// [2] new Gato("Putiputi"


include "Gato.php";
/*  
$gato1 = new Gato("Daniel");
$gato2 = new Gato("Nicolau");
$gato3 = new Gato("Putiputi");

$arr_gatos = array(
    new Gato("Daniel"),
    new Gato("Nicolau"),
    new Gato("Putiputi")
);
echo "<hr>";
*/
$arr_gatos = array();

$arr_gatos[] = new Gato(" Daniel ");
$arr_gatos[] = new Gato(" Nicolau ");
$arr_gatos[] = new Gato(" Putiputi ");

$arr_gatos_size = count($arr_gatos);


for($i=0; $i<$arr_gatos_size; $i++){
    echo " O gato da posição " . $i . " é " . $arr_gatos[$i]->name . "<br>";
}
 echo "<hr>";

include "Cachorro.php";

//Declarando arrays do db ficticio.
$faz_de_conta_que_vem_do_db = array ("Rax", "Toto", " Maradona");
$faz_de_conta_que_vem_do_db_size = sizeof($faz_de_conta_que_vem_do_db);

//arrays de objeto
$arr_cachorro = array();


//preparando o arrays de obojeto cachorro. 
for($i=0; $i<$faz_de_conta_que_vem_do_db_size; $i++){
     
    $arr_cachorro[] = new Cachorro($faz_de_conta_que_vem_do_db[$i]);

}

//Mostrando o conteudo do arrays de objeto cachorro

$arr_cachorro_size = sizeof($arr_cachorro);

for($i=0; $i<$arr_cachorro_size; $i++){
     
   echo " O cachorro da posição " . $i . " é " . $arr_cachorro[$i]->name . "<br>";

}

?>