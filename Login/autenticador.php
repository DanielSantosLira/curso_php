<?php
session_start();
try {
/*
     include 'Dao/MySQL.php';

     $mysql = new MySQL();
     
$sql = "SELECT id, nome
        FROM usuario
        WHERE usuario=? AND senha=?";

$stmt = $$mysql->prepare($$sql);

$stmt->bindValue(1, $_POST["user"]);
$stmt->bindValue(2, $_POST["pass"]);

$stmt->execute();

$dado_do_usuario = $stmt->fetchObject();

if($dado_do_usuario){
    $_SESSION["usuario_logado"] = $usuario_digitado->id;
    header("Location: index.php");
} else {
    header("Location: login.php?falhou=true"); 
}
*/


    $usuario_certo = "Daniel";
    $senha_certa = "123";

    $usuario_digitado = $_POST["user"];
    $senha_digitada = $_POST["pass"];

    if ($usuario_digitado == $usuario_certo) 
    {
        if ($senha_digitada == $senha_certa) 
        {
            $_SESSION["usuario_logado"] = $usuario_digitado;
            header("Location: index.php");
        } else {
            header("Location: login.php?falhou=true"); 
        }
    } else {
        header("Location: login.php?falhou=true"); 
    }

  
} catch (Exception $e) {

    echo $e->getMessage();
}