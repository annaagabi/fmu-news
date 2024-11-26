<?php
   
    include_once "conexao.php";

    try {
        $select = $con->prepare("SELECT * FROM post");
        $select->execute();
       
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FMU NEWS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header class="borda-vermelha border-2 border-top-0 border-end-0 border-start-0">
        <div class="d-flex justify-content-between align-items-center m-5 teste cabecalho">
            <img src="./assets/imagens/logo.svg" alt="Logo do FMU News com o FMU na cor vermelha e o News na cor azul">
            <a href="./login.html"><button class="botao-estilo botao-cadastro borda-raio fw-bold">LOGIN</button></a>
        </div>
    </header>
    <main class="d-flex flex-column justify-content-center align-items-center">
        <section class="banner mb-5">
            <img src="./assets/imagens/Banner.svg" alt="">
        </section>

        <section id="carouselExampleFade" class="carousel slide carousel-fade backgroud-primary" data-ride="carousel">
          
            <div class="carousel-inner">
              
            <?php 
                $isActive = true;
                while ($result = $select->fetch()) {
                    $id_post = $result['id_post'];
                    $titulo = $result['titulo'];
                    $activeClass = $isActive ? 'active' : ''; 
                    $isActive = false;
                    echo "<div class='carousel-item $activeClass mb-5'>
                            <a href='noticia.php?id_post=$id_post' style='text-decoration: none' class='texto-azul'>
                                <h3 class='mb-3'>".$titulo."</h3>
                            </a>
                        </div>";
                }
                
              } catch (PDOException $e) {
                  echo "Erro: " . $e->getMessage();
              }
              
              ?>
            </div>
            <a class="carousel-control-prev " href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon botao-branco" aria-hidden="true"></span>
              <span class="sr-only botao-branco">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon botao-branco" aria-hidden="true"></span>
              <span class="sr-only botao-branco">Próximo</span>
            </a>
          </section>
        <section class="quem-somos d-flex align-items-center justify-content-center m-5">
            <div class="quem-somos-content d-flex justify-content-center flex-column">
                <h3 class="fw-bold text text-uppercase texto-azul fonte-40">Quem somos</h3>
                <p class="fonte-16 fonte-preta">FMU NEWS é um veículo de comunicação ágil, com linguagem acessível e totalmente focada no digital.</p>
                <a href="./sobre.html"><button class="text-uppercase botao-estilo botao-cadastro borda-raio fw-bold">Saiba mais</button></a>
            </div>
            <img src="./assets/imagens/quem-somos.svg" alt="">
        </section>
        <section class="charges d-flex m-5">
            <div class="charge-c1 d-flex flex-column mx-5">
                <img src="./assets/imagens/charge-1.svg" alt="" class="mb-5">
                <img src="./assets/imagens/charge-2.svg" alt="">
            </div>
            <div class="charge-c2">
                <img src="./assets/imagens/charge-3.svg" alt="">
            </div>
        </section>
    </main>
    <footer class="fundo-vermelho mt-5 d-flex justify-content-between align-items-center w-100">
        <p class="texto-branco fonte-16 ms-5">2024 FMU NEWS. All Rights Reserved By Anna Gabriela, Charles, Gabriel & Gabriella</p>
        <a href="https://github.com/annaagabi/fmu-news" target="_blank" class="me-5"><img src="./assets/imagens/github.svg" alt="Logo do github na cor branca"></a>
    </footer>

    <!-- Carrosel -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>