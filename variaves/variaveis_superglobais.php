<?php

try {

    if (!empty($_GET["parametro1"]))
    {
        if(strlen($_GET["parametro1"]) < 3)
           throw new Exception("valor do parametro 1 precisa ter mais que 3 caracteres");
    }else{
        throw new Exception("parametro 1 vazio o inexistente.");
       
    }
    if (empty($_GET["parametro2"]))
        throw new Exception("Nenhum valor para parametro 2");

    $nome = $_GET["parametro1"];

    $idade = $_GET["parametro2"]; //casting

    $frase = "Olá, meu nome e " . $nome;
    $frase .= " e tenho " . $idade . "anos.";

    echo $frase;
} catch (Exception $e) {
    echo $e->getMessage();
}
