<?php
    include_once 'conexao.php';

    $id =  isset($_GET['id_post']) ? ($_GET['id_post']) : 0; // pega informações da URL, caso não tenha nada coloca 0 como valor

    $select = $con -> prepare('SELECT * FROM post WHERE id_post=?');

    $select -> execute([$id]);
    $resultado = $select -> fetch();

    // session_start();
    // $_SESSION['id'] = $id;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/noticia-style.css">
</head>
<body>
    <header class="borda-vermelha border-2 border-top-0 border-end-0 border-start-0 mb-5">
        <div class="d-flex justify-content-between align-items-center m-5 mb-4 cabecalho">
            <img src="./assets/imagens/logo.svg" alt="Logo do FMU News">
            <a href="./login.html"><button class="botao-estilo botao-cadastro borda-raio fw-bold text-uppercase">Login</button></a>
        </div>
    </header>
    <main class="mt-5 ">
        <div class="noticia mb-5 d-flex flex-column justify-content-center align-items-center">
            <h1 class="texto-azul fonte-36 text-uppercase mb-2 fw-bold"><?= htmlspecialchars($resultado['titulo']); ?></h1>
            <p class="fonte-24 paragrafo pt-3"><?= htmlspecialchars($resultado['postagem']); ?></p>
        </div>
        
    </main>
    <footer class="fundo-vermelho mt-5 d-flex justify-content-between align-items-center w-100">
        <p class="texto-branco fonte-16 ms-5">2024 FMU NEWS. All Rights Reserved.</p>
        <a href="https://github.com/annaagabi/fmu-news" target="_blank" class="me-5"><img src="./assets/imagens/github.svg" alt="Logo do github"></a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="../assets/js/funcao.js"></script> -->

</body>
</html>
