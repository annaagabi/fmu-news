<?php
    include_once "conexao.php";

    try {
        $select = $con->prepare("SELECT * FROM post ORDER BY id_post DESC;");
        $select->execute();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todas as Noticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/todas-style.css">
</head>
<body>
    <header class="borda-vermelha border-2 border-top-0 border-end-0 border-start-0 mb-5">
        <div class="d-flex justify-content-between align-items-center m-5 mb-4 cabecalho">
           <a href="index.php"><img src="./assets/imagens/logo.svg" alt="Lodo do FMU News com o FMU na cor vermelha e o News na cor azul"></a>
            <a href="./logout.php"><button class="botao-estilo botao-cadastro borda-raio fw-bold fonte-24">SAIR</button></a>
        </div>
    </header>
    <main class="container d-flex justify-content-center align-items-center flex-column teste">
        <div class="d-flex largura justify-content-center gap-botoes botoes-todas">
            <a href="./nova-noticia.php"><button class="botao-estilo botao-cadastro borda-raio fw-bold fonte-24 botao-post">NOVO POST</button></a>
            <a href="./cadastro.html"><button class="botao-estilo botao-usuario borda-raio fw-bold fonte-24 botao-usuario mr-5">NOVO USUARIO</button></a>
        </div>
        <!-- <div class="hide-modal">
            <input type="text" name="usuario" id="usuario" class="form-control"
                           value= <?php session_start(); echo $_SESSION['id'];?> readonly> 
        </div> -->
        <!-- <div id="cards-noticia" class="cards-noticia d-flex align-items-center justify-content-center flex-column mt-5">
            <div class="card-noticia"></div>
        </div> -->
      <!-- <div id="cards-noticia"> -->
      <div id="cards-noticia" class="cards-noticia d-flex align-items-center justify-content-center flex-column mt-3 position-relative">
      <?php 
        while ( $result = $select->fetch()) {
            $titulo = $result['titulo'];
            $id_post= $result['id_post'];
            $descricao= $result['postagem'];

            echo 
                "<div class='card-noticia d-flex align-items-center justify-content-center gap-3 mt-5'>
                    <a href='noticia.php?id_post=$id_post' class='edita-btn' style='text-decoration: none;'><div class='titulo d-flex align-items-center justify-content-center rounded-4 fundo-azul h4-largura'>
                        <h4 class='texto-branco fw-bold fonte-24 text-center'>".$titulo."</h4>
                    </div></a>
                    <div class='funcoes d-flex gap-1'>
                        <a href='editar.php?id_post=$id_post' class='edita-btn'><img src='./assets/imagens/editar.svg' alt='Icone de edição representado por um lápis e um papel na cor vermelha'></a>
                        <a href='exclui-noticia.php?id_post=$id_post' class='edita-btn'><img id='delete-modal' src='./assets/imagens/lixeira.svg' alt='Icone de deletar representado por uma lixeira na cor vermelha'></a>
                    </div>
                </div>";
            } 


        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }

    ?>

       </div>

       <div id="modal" class="modal-container d-flex align-items-center justify-content-center position-fixed hide-modal">
        <div class="modal-texto d-flex align-items-center justify-content-center fonte-20 texto-preto">
          <img src="./assets/imagens/modal-check.svg" alt="">
          <p>Post deletado com sucesso!</p>
        </div>
      </div>
    </main>
    <footer class="fundo-vermelho mt-5 d-flex justify-content-between align-items-center w-100 position-relative bottom-0">
        <p class="texto-branco fonte-16 ms-5">2024 FMU NEWS. All Rights Reserved By Anna Gabriela, Charles, Gabriel & Gabriella</p>
        <a href="https://github.com/annaagabi/fmu-news" target="_blank" class="me-5"><img src="./assets/imagens/github.svg" alt="Logo do github na cor branca"></a>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="./assets/js/funcao.js"></script>
</body>
</html>
