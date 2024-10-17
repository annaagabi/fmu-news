function Enviar() {

    var nome = document.getElementById("email");

    if (nome.value != "") {
        alert('Obrigado sr(a) ' + nome.value + ' os seus dados foram encaminhados com sucesso');
    }

}

// Modal

const openModalButton = document.querySelector("#open-modal")
const modal = document.querySelector("#modal")

const toggleModal = () =>{
    modal.classList.toggle("hide-modal")
}

// Abrir o modal
openModalButton.addEventListener("click", () => {
    toggleModal();
  
    // Fecha a modal após 5 segundos
    setTimeout(() => {
      toggleModal();
    }, 5000); 
  });
  
// Redimensionar Textarea


const textarea = document.getElementById('area-redimensionar');

textarea.addEventListener('input', function() {
  this.style.height = 'auto';
  this.style.height = (this.scrollHeight)   
 + 'px';
});
  