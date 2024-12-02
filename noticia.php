<?php
    include_once 'conexao.php';

    $id =  isset($_GET['id_post']) ? ($_GET['id_post']) : 0; // pega informações da URL, caso não tenha nada coloca 0 como valor

    $select = $con -> prepare('SELECT * FROM post WHERE id_post=?');

    $select -> execute([$id]);
    $resultado = $select -> fetch();
   $postagem_formatada = preg_replace('/\r\n\r\n/', '</p><p class="fonte-24 paragrafo pt-3">', $resultado['postagem']);
    
   $postagem_formatada = '<p class="fonte-24 paragrafo pt-3">' . $postagem_formatada . '</p>';

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
            <a href="index.php"><img src="./assets/imagens/logo.svg" alt="Logo do FMU News"></a>
            <a href="./login.html"><button class="botao-estilo botao-cadastro borda-raio fw-bold text-uppercase">Login</button></a>
        </div>
    </header>
    <main class="mt-5 ">
        <div class="noticia mb-5 d-flex flex-column justify-content-center align-items-center">
            <h1 class="texto-azul fonte-36 text-uppercase mb-2 fw-bold mx-5 text-center"><?= htmlspecialchars($resultado['titulo']); ?></h1>
            <?= $postagem_formatada; ?>
        </div>
        
    </main>
    <footer class="fundo-vermelho mt-5 d-flex justify-content-between align-items-center w-100 position-relative bottom-0">
        <p class="texto-branco fonte-16 ms-5">2024 FMU NEWS. All Rights Reserved By Anna Gabriela, Charles, Gabriel & Gabriella</p>
        <a href="https://github.com/annaagabi/fmu-news" target="_blank" class="me-5"><img src="./assets/imagens/github.svg" alt="Logo do github na cor branca"></a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="../assets/js/funcao.js"></script> -->

</body>
</html>
