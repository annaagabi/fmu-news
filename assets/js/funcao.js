// Modal para todas as noticias

const openModalButton = document.querySelector("#open-modal")
const modal = document.querySelector("#modal")
const toggleModal = () =>{
    modal.classList.toggle("hide-modal")
}
// Abrir o modal
if (openModalButton) {
    openModalButton.addEventListener("click", () => {
        toggleModal();
      
        // Fecha a modal após 3 segundos
        setTimeout(() => {
          toggleModal();
          window.location.href = "../../pages/todas-noticias.html";
        }, 3000);
    });
}

// Modal para deletar a notícia 
const deleteModalButton = document.querySelector("#delete-modal");
if (deleteModalButton) {
    deleteModalButton.addEventListener("click", () => {
        toggleModal();
      
        setTimeout(() => {
          toggleModal();
        }, 3000);
    });
}

// Redimensionar Textarea
const textarea = document.getElementById('noticia-descricao');

textarea.addEventListener('input', function() {
  this.style.height = 'auto';
  this.style.height = (this.scrollHeight)   
 + 'px';
});
  