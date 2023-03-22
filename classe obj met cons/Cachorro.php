<?php

include_once 'Animal.php';

class Cachorro extends Animal{

    public function latir(){
        echo $this->name . "está Latindo muito e é bravo ";
    }
}


?>