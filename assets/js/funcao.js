// Modal para todas as noticias

const openModalButton = document.querySelector("#open-modal")
const modal = document.querySelector("#modal")
const toggleModal = () =>{
    modal.classList.toggle("hide-modal")
}
// Abrir o modal
if (openModalButton) {
    openModalButton.addEventListener("click", () => {
        toggleModal()
      
        // Fecha a modal após 3 segundos
        setTimeout(() => {
          toggleModal()
          window.location.href = "../../pages/todas-noticias.html"
        }, 3000)
    });
}

// Modal para deletar a notícia 
const deleteModalButton = document.querySelector("#delete-modal")
if (deleteModalButton) {
    deleteModalButton.addEventListener("click", () => {
        toggleModal()
      
        setTimeout(() => {
          toggleModal()
        }, 3000)
    });
}
const noticiaModalButton = document.querySelector("#noticia-modal");


if (noticiaModalButton) {
    noticiaModalButton.addEventListener("click", () => {
        const titulo = document.querySelector("#noticia-titulo").value.trim();
        const descricao = document.querySelector("#noticia-descricao").value.trim();

        const spanTitulo = document.querySelector("#span-texto");
        const spanDescricao = document.querySelector("#span-descricao");

        spanTitulo.classList.add("hide-modal");
        spanDescricao.classList.add("hide-modal");

        // Verifica se os campos estão preenchidos
        if (titulo !== "" && descricao !== "") {
            document.querySelector("#modal .modal-texto p").textContent = "Post editado com sucesso!";
            toggleModal();

            setTimeout(() => {
                window.location.href = "../../pages/todas-noticias.html"
                toggleModal();
            }, 3000);
        } else {
            // Exibe spans de erro se os campos estiverem vazios
            if (titulo === "") {
                spanTitulo.classList.remove("hide-modal");
            }
            if (descricao === "") {
                spanDescricao.classList.remove("hide-modal");
            }
        }
    });
}

// Redimensionar Textarea
const textarea = document.getElementById('noticia-descricao')

textarea.addEventListener('input', function() {
  this.style.height = 'auto'
  this.style.height = (this.scrollHeight)   
 + 'px'
})
  