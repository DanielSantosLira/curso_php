<?php
session_start();

if(!isset( $_SESSION["usuario_logado"]))
header("Location: login.php");


if(isset($_GET['sair'])){
    unset($_SESSION["usuario_logado"]);
    header("Location:login.php");

}
/*
try{
    include 'Dao/MySQL.php';

    $mysql = new MySQL();
    
$stmt = $$mysql->prepare("SELECT  nome FROM usuario WHERE id=:marcador_id AND senha=?");

$stmt->execute(array('marcador_id' =>$_SESSION['usuario_logado']));

$dado_do_usuario = $stmt->fetchObject();

}catch (Exception $e) {
  
    echo $e->getMessage();
}
*/
?>
<h1>Bem-vindo a area restrita</h1>
<a href="index.php?sair=true">Sair</a>