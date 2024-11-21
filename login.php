<?php

include_once "conexao.php";

if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        $email = $_POST['email'];
        $senha = trim($_POST['senha']);

        session_start();

        try{
            $select = $con -> prepare("SELECT id, nome, senha FROM usuario WHERE email = :email");
            $select -> bindParam(':email', $email);
            $select->execute();
            $result = $select->fetch();

            if ($result && password_verify($senha, $result['senha'])) {

                // Salvando o id do usuário para utilizar no cadastro de tarefa
                $_SESSION['id'] = $result['id'];

                // Salvando o nome do usuário para aparecer nas tarefas
                $_SESSION['nome'] = $result['nome'];

                header('location: todas-noticias.html');
                exit();
            } else {
                header('location: login.html');
                exit();
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }



    }