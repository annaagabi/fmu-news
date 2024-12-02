<?php

include_once "conexao.php";

if($_SERVER ['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    // Criptografando a senha
    $hash = password_hash($senha, PASSWORD_DEFAULT);

    // Inserindo dados no banco
    $insert = $con->prepare('INSERT INTO usuario (email, nome, senha) VALUES (:email, :nome, :senha)');

    $insert->bindParam('email', $email);
    $insert->bindParam('nome', $nome);
    $insert->bindParam('senha', $hash);

    // Executar o insert
    if($insert->execute()){
        header('location: login.html');
        exit;

    }else{
        header('location: cadastro.html');
        // echo 'Erro ao cadastrar usuario';
    }
}
?>