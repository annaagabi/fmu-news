<!-- Rotina de Exclusão -->
<?php

    include_once 'conexao.php';
    
    session_start();

    $id =  isset($_GET['id_post']) ? ($_GET['id_post']) : 0; 
    
    $delete = $con -> prepare("DELETE FROM post WHERE id_post=:id_post");
    $delete -> bindParam('id_post', $id);

    $delete -> execute();
    header('location: todas-noticias.php');
?>