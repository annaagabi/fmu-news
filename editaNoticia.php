<?php

include_once "conexao.php";

session_start();
$id_post = $_SESSION['id'];

if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];

    $update = $con -> prepare('UPDATE post SET titulo=:titulo, postagem=:postagem WHERE id_post=:id_post');

    $update->bindParam('titulo', $titulo);
    $update->bindParam('postagem', $descricao);
    $update->bindParam('id_post', $id_post);

    // Executar o update
    $update->execute();
    header('location: todas-noticias.php');
}

?>
