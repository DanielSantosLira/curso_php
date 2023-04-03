<?php

// i | value
// [0] Joao 
// [1] José
// [2] Maria
// [3] Joana

$lista_name = array();
$lista_name[] = "Joao";
$lista_name[] = "José";
$lista_name[] = "Maria";
$lista_name[] = "Joana";
$lista_name[] = "Daniel";
$lista_name[] = "Vanessa";
$lista_name[] = "Heloisa";
$arquivo = fopen("lista_name.text", "a");

 var_dump($lista_name);

 echo "<hr />";

 echo count($lista_name);

 echo "<hr />";

  echo $lista_name[3];

  echo "<hr>";

  

  $total_lista_name = count($lista_name);

  for($i=0; $i< $total_lista_name; $i++)
  {
    echo " Olá, " . $lista_name[$i] ."<br>";
    fwrite($arquivo,  $lista_name[$i] .  "\n");
  }


?>