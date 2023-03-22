<?php

include_once 'Animal.php';

class Gato extends Animal{
  
    public function miar(){
        echo $this->name . " está miando";
    }
}





?>