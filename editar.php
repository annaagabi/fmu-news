<?php
    include_once 'conexao.php';

    $id =  isset($_GET['id_post']) ? ($_GET['id_post']) : 0; // pega informações da URL, caso não tenha nada coloca 0 como valor

    $select = $con -> prepare('SELECT * FROM post WHERE id_post=?');

    $select -> execute([$id]);
    $resultado = $select -> fetch();

    session_start();
    $_SESSION['id'] = $id;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Noticia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/nova-noticia-style.css">
</head>

<body>
  <header class="borda-vermelha border-2 border-top-0 border-end-0 border-start-0 mb-5">
    <div class="d-flex justify-content-between align-items-center m-5 mb-4 cabecalho">
      <a href="index.php"><img src="./assets/imagens/logo.svg" alt="Logo do FMU News com o FMU na cor vermelha e o News na cor azul"></a>
      <a href="./logout.php"><button class="botao-estilo botao-cadastro borda-raio fw-bold">SAIR</button></a>
    </div>
  </header>

  <main>
    <form action="editaNoticia.php" method="post" class="d-flex align-items-center justify-content-center flex-column gap-main" id="nova-noticia">
    <!-- <div class="">
        <input type="text" name="id_post" id="post" class="form-control"
                       value= <?php echo 'Idpost'.$_SESSION['id_post'];?> readonly> 
    </div> -->
      <div class="inserir-noticia d-flex align-items-center flex-column fundo-azul rounded-4 justify-content-center">
        <div class="titulo-noticia mt-5 m-0 d-flex flex-column">
          <span id="span-texto" class="span-erro hide-modal">Preencha o campo!</span>
          <input id="noticia-titulo" name="titulo" type="text" placeholder="Digite o título da notícia" class="rounded-3 px-4 texto-preto fonte-32" value="<?= $resultado['titulo']; ?>">
        </div>
        <div class="conteudo-noticia mb-5 m-0 d-flex flex-column" >
          <span id="span-descricao" class="span-erro hide-modal">Preencha o campo!</span>
          <textarea id="noticia-descricao" name="descricao" placeholder="Digite o conteúdo da notícia" class="rounded-3 p-3 fonte-20 area-redimensionar texto-preto"><?= htmlspecialchars($resultado['postagem']); ?></textarea>
        </div>
      </div>

      <div class="botoes d-flex align-items-center justify-content-center">
        <a href="./todas-noticias.php"><button class="botao-estilo botao-cadastro borda-raio fw-bold">VOLTAR</button></a>
        <button type="submit" id="noticia-modal" class="botao-estilo botao-cadastro borda-raio fw-bold">POSTAR</button>
      </div>
      <div id="modal" class="modal-container d-flex align-items-center justify-content-center position-fixed hide-modal">
        <div class="modal-texto d-flex align-items-center justify-content-center fonte-20 texto-preto">
          <img src="../assets/imagens/modal-check.svg" alt="">
          <p>Post editado com sucesso!</p>
        </div>
      </div>
    </form>

  </main>


  <footer
    class="fundo-vermelho mt-5 d-flex justify-content-between align-items-center w-100">
    <p class="texto-branco fonte-16 ms-5">2024 FMU NEWS. All Rights Reserved By Anna Gabriela, Charles, Gabriel &
      Gabriella</p>
    <a href="https://github.com/annaagabi/fmu-news" target="_blank" class="me-5"><img src="./assets/imagens/github.svg"
        alt="Logo do github na cor branca"></a>
  </footer>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>

  <script src="../assets/js/funcao.js"></script>
</body>

</html>