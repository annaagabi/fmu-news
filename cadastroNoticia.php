<?php

include_once "conexao.php";

if($_SERVER ['REQUEST_METHOD'] == 'POST'){

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $idCliente = $_POST['id_cliente'];

    // Inserindo dados no banco
    $insert = $con->prepare('INSERT INTO post (titulo, postagem, id_cliente) VALUES (:titulo, :postagem, :id_cliente)');

    $insert->bindParam('titulo', $titulo);
    $insert->bindParam('postagem', $descricao);
    $insert->bindParam('id_cliente', $idCliente);

    // Executar o insert
    if($insert->execute()){
        header('location: todas-noticias.php');

    }else{
        header('location: nova-noticia.html');
        // echo 'Erro ao cadastrar usuario';
    }
}
?>