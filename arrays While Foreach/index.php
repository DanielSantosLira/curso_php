<?php

// i | value
// [0] Joao 
// [1] José
// [2] Maria
// [3] Joana

$lista_name = array("Joao", "José", "Maria", "Joana", "Daniel", "Vanessa", "Heloisa");

//reset($lista_name);

$lista_name_copy = array_reverse($lista_name);

while(key($lista_name_copy) !== null){
    echo "Olá " .current($lista_name_copy) . "<br>";
  next($lista_name_copy);
}

echo "<hr>";

foreach($lista_name_copy as $name){
    echo "Olá " . $name . "<br>";
}

?>