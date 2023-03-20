<?php
 try{
 //data source name
 $dns = "mysql=localhost;dbname=sakila";

 //PHP Data Object

 $conexao = new PDO($dsn, "root", "@MySQL_dev_2020");
 
 }catch(Exception $e){
    echo $e->getMessage();
 }

?>