<?php

class MySQL extends PDO{
    private $host = "localhost";
    private  $usuario = "root";
    private $senha = "@MySQL_dev_2020";
    private $db = "sistema_revisao";

    public function __construct()
    {
       //data source name
       $dsn = "mysql:host=" . $this->host . ";dbname=". $this->db;

       //PHP Data Object
       return parent::__construct($dsn, $this->usuario, $this->senha);

      // $conexao = new PDO($dsn, $this->usuario, $this->senha);

       //return $conexao;
    }
}
?>