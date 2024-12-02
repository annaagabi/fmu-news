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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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

        <!-- Swiper Container -->
        <section class="container my-5">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php 
                    while ($result = $select->fetch()) {
                        $id_post = $result['id_post'];
                        $titulo = $result['titulo'];
                        $descricao = substr($result['postagem'], 0, 100) . '...'; // Limita descrição
                        echo "
                        <div class='swiper-slide'>
                            <div class='card shadow-sm h-100 card-clicar '>
                                <div class='card-body fundo-azul' style=''>
                                    <h5 class='card-title fonte-20 text-uppercase mb-3' style='color: var(--main-color)'>$titulo</h5>
                                    <p class='card-text'>$descricao</p>
                                    <a href='noticia.php?id_post=$id_post' class='texto-azul fonte-16' style='text-decoration: none;'>Saiba mais</a>
                                </div>
                            </div>
                        </div>
                        
                        ";
                    }
                } catch (PDOException $e) {
                    echo "Erro: " . $e->getMessage();
                }
                
                    ?>
                </div>
                <!-- Botões de Navegação -->
                <div class="swiper-button-next" style="top: 50%; z-index: 10;  color: var(--second-color); padding: 10px; background-color: transparent; width: 80px; right: -65px"></div>
                <div class="swiper-button-prev proximo" style="top: 50%; z-index: 10;  color: var(--second-color); padding: 10px;  background-color: transparent; left: -100px"></div>
                 <!-- Paginação -->
                 <div class="swiper-pagination" style="color: var(--main-color); bottom:-50px"></div>
                
            </div>
        </section>

        <section class="quem-somos d-flex align-items-center justify-content-center m-5">
            <div class="quem-somos-content d-flex justify-content-center flex-column">
                <h3 class="fw-bold text text-uppercase texto-azul fonte-40">Quem somos</h3>
                <p class="fonte-16 fonte-preta">FMU NEWS é um veículo de comunicação ágil, com linguagem acessível e totalmente focada no digital.</p>
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

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Script do Swiper -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            new Swiper('.swiper-container', {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    1188: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
            });
        });
    </script>
</body>
</html>
