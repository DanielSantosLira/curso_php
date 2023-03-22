<?php

abstract class Animal {

    public $name;
    public $cor;
    public $raça;

    public function __construct($_name)
    {
        $this->name = $_name;
    }

    public function dorme(){

        echo $this->name ."está domindo " ."<br>";
    }

    public function come($_comida){

        echo $this->name . " está comendo " . $_comida;
    }


}
