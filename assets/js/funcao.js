function Enviar() {

    var nome = document.getElementById("email");

    if (nome.value != "") {
        alert('Obrigado sr(a) ' + nome.value + ' os seus dados foram encaminhados com sucesso');
    }

}
  
// Modal

const openModalButton = document.querySelector("#open-modal");
const modal = document.querySelector("#modal");

const toggleModal = () => {
    modal.classList.toggle("hide-modal");
}

openModalButton.addEventListener("click", () => {
    const tituloValue = document.getElementById("noticia-titulo").value;
    const descricaoValue = document.getElementById("noticia-descricao").value;

    if (tituloValue && descricaoValue) {
        // Recuperar as notícias existentes no localStorage
        let noticias = JSON.parse(localStorage.getItem('noticias')) || [];

        // Criar um novo objeto de notícia
        let novaNoticia = {
            titulo: tituloValue,
            descricao: descricaoValue
        };

        // Adicionar a nova notícia no início da lista
        noticias.unshift(novaNoticia); // Usando unshift para adicionar ao início

        // Salvar novamente no localStorage
        localStorage.setItem('noticias', JSON.stringify(noticias));

        // Exibe o modal
        toggleModal();

        // Fecha o modal após 5 segundos e redireciona para "todasNoticias.html"
        setTimeout(() => {
            toggleModal();
            window.location.href = "todasNoticias.html";
        }, 5000); 
    }
});

// Função para exibir as notícias ao carregar a página
function exibirNoticias() {
    const cardsNoticias = document.querySelector(".cards-noticias");
    cardsNoticias.innerHTML = ''; // Limpa a lista antes de exibir

    // Recuperar as notícias do localStorage
    const noticias = JSON.parse(localStorage.getItem('noticias')) || [];

    // Criar os cards para cada notícia
    noticias.forEach(noticia => {
        const cardNoticia = document.createElement("div");
        cardNoticia.classList.add("card-noticia");
        cardNoticia.innerHTML = `
            <h3>${noticia.titulo}</h3>
            <p>${noticia.descricao}</p>
        `;
        cardsNoticias.appendChild(cardNoticia);
    });
}
  


// Redimensionar Textarea
const textarea = document.getElementById('noticia-descricao');

textarea.addEventListener('input', function() {
  this.style.height = 'auto';
  this.style.height = (this.scrollHeight)   
 + 'px';
});
  