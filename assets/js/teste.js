// // Seleção de Elementos
const novaNoticia = document.querySelector("#nova-noticia")
const noticiaTitulo = document.querySelector("#noticia-titulo")
const noticiaDescricao = document.querySelector("#noticia-descricao")
// const cardsNoticia = document.querySelector("#cards-noticia")
const editeNoticia = document.querySelector("#edite-noticia")
const cancelEditBtn = document.querySelector("#cancelar-edicao-noticia")

// Seleção de Elementos
const cardsNoticia = document.querySelector("#cards-noticia");

// Verifica se existem dados no localStorage
const titulo = localStorage.getItem("tituloNoticia");
const descricao = localStorage.getItem("descricaoNoticia");

if (titulo && descricao) {
    // Cria a estrutura da notícia
    const noticia = document.createElement("div");
    noticia.classList.add("card-noticia", "d-flex", "align-items-center", "justify-content-center", "gap-3", "mt-5");

    const tituloDiv = document.createElement("div");
    tituloDiv.classList.add("titulo", "d-flex", "align-items-center", "justify-content-center", "rounded-4", "fundo-azul", "h4-largura");

    const tituloElem = document.createElement("h4");
    tituloElem.classList.add("texto-branco", "fw-bold", "fonte-24");
    tituloElem.innerText = titulo;
    tituloDiv.appendChild(tituloElem);

    // Adiciona a div do título à div principal da notícia
    noticia.appendChild(tituloDiv);

    const funcoesDiv = document.createElement("div");
    funcoesDiv.classList.add("funcoes", "d-flex", "gap-1");

    const editaBtn = document.createElement("a");
    editaBtn.href = "#editarNoticia.html";
    editaBtn.classList.add("edita-btn");
    editaBtn.innerHTML = '<img src="./assets/imagens/editar.svg" alt="Icone de edição representado por um lápis e um papel na cor vermelha">';
    funcoesDiv.appendChild(editaBtn);

    const deletaBtn = document.createElement("a");
    deletaBtn.classList.add("deleta-btn");
    deletaBtn.innerHTML = '<img src="./assets/imagens/lixeira.svg" alt="Icone de deletar representado por uma lixeira na cor vermelha">';
    funcoesDiv.appendChild(deletaBtn);

    // Adiciona a div de funções à div principal da notícia
    noticia.appendChild(funcoesDiv);

    // Adiciona a notícia ao contêiner principal
    cardsNoticia.appendChild(noticia);

    // Limpa os dados do localStorage após exibir
    localStorage.removeItem("tituloNoticia");
    localStorage.removeItem("descricaoNoticia");
}


