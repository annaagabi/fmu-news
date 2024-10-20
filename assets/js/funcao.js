function Enviar() {

    var nome = document.getElementById("email");

    if (nome.value != "") {
        alert('Obrigado sr(a) ' + nome.value + ' os seus dados foram encaminhados com sucesso');
    }

}

// Modal

// const openModalButton = document.querySelector("#open-modal")
// const modal = document.querySelector("#modal")

// const toggleModal = () =>{
//     modal.classList.toggle("hide-modal")
// }

// // Abrir o modal
// openModalButton.addEventListener("click", () => {
//     toggleModal();
  
//     // Fecha a modal após 5 segundos
//     setTimeout(() => {
//       toggleModal();
//     }, 5000); 
//   });
  

// Modal

const openModalButton = document.querySelector("#open-modal");
const modal = document.querySelector("#modal");

const toggleModal = () => {
    modal.classList.toggle("hide-modal");
}

// Abrir o modal
// openModalButton.addEventListener("click", () => {
//     toggleModal();
  
//     // Fecha o modal após 5 segundos e redireciona para "novanoticia.html"
//     setTimeout(() => {
//         toggleModal();
        
//         // Redireciona para a nova página
//         window.location.href = "todasNoticias.html";
//     }, 5000); 
// });

// Abrir o modal
openModalButton.addEventListener("click", () => {
  const tituloValue = document.getElementById("noticia-titulo").value;
  const descricaoValue = document.getElementById("noticia-descricao").value;
  
  if (tituloValue && descricaoValue) {
      // Salvar dados no localStorage
      localStorage.setItem("tituloNoticia", tituloValue);
      localStorage.setItem("descricaoNoticia", descricaoValue);
      
      // Exibe o modal
      toggleModal();
    
      // Fecha o modal após 5 segundos e redireciona para "todasNoticias.html"
      setTimeout(() => {
          toggleModal();
          window.location.href = "todasNoticias.html";
      }, 5000); 
  }
});


// Redimensionar Textarea
const textarea = document.getElementById('noticia-descricao');

textarea.addEventListener('input', function() {
  this.style.height = 'auto';
  this.style.height = (this.scrollHeight)   
 + 'px';
});
  