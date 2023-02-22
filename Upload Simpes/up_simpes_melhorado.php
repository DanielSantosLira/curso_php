<?php

try {

    //Definindo diretório de destino.
    $diretorio_distino = "enviados/";


    //Vereificando se diretório de destino existe.
    if (!is_dir($diretorio_distino))
        throw new Exception("Diretório não encontrado.");


    //Verifica se o arquivo é executavel.
    if (is_executable($_FILES["arquivo_up"]["tmp_name"]))
        throw new Exception("arquivo Exercutáveis não são permitidos.");


    //obtendo a extençao do arquivo.
    $ext_arquivo = pathinfo($_FILES["arquivo_up"]["tmp_name"], PATHINFO_EXTENSION);

   //enviado_as7fgtr555555.gif
   $nome_unico = uniqid("enviado_") . " . " . $ext_arquivo;

    //Caminho do novo arquivo no servidor.
    $nome_arquivo_servidor = $diretorio_distino . "enviado.gif";


    //Movendo o arquivo temporario oara o diretório final
    if (move_uploaded_file($_FILES["arquivo_up"]["tmp_name"], $nome_arquivo_servidor)) {
        echo "Arquivo Enviado!";
    } else throw new Exception("Error ao enviar. Erro:" . $_FILES["arquivo_up"]["erro"]);

} catch (Exception $e) {
    echo $e->getMessage();
}
