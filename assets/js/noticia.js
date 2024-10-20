document.getElementById('nova-noticia').addEventListener('submit', saveNoticia);

// Salvar nova notícia
function saveNoticia(e) {
  e.preventDefault();

  let titulo = document.getElementById('titulo').value;
  let descricao = document.getElementById('descricao').value;

  let noticia = {
    titulo,
    descricao
  };

  // Checar se existe alguma notícia no localStorage
  if (localStorage.getItem('noticias') === null) {
    let noticias = [];
    noticias.push(noticia);
    localStorage.setItem('noticias', JSON.stringify(noticias));
  } else {
    let noticias = JSON.parse(localStorage.getItem('noticias'));
    noticias.push(noticia);
    localStorage.setItem('noticias', JSON.stringify(noticias));
  }

  // Resetar o formulário
  document.getElementById('nova-noticia').reset();

  // Mostrar modal de confirmação
  mostrarModalSucesso();

  // Atualizar as notícias na página "todasNoticias", se aplicável
  if (document.querySelector('.cards-noticia')) {
    getNoticias();
  }
}

// Função para mostrar o modal de sucesso
function mostrarModalSucesso() {
  const modal = document.getElementById('modal');
  modal.classList.remove('hide-modal');
  setTimeout(() => {
    modal.classList.add('hide-modal');
  }, 2000);
}

// Deletar notícia
function deleteNoticia(titulo) {
  let noticias = JSON.parse(localStorage.getItem('noticias'));
  noticias = noticias.filter(noticia => noticia.titulo !== titulo);
  localStorage.setItem('noticias', JSON.stringify(noticias));
  getNoticias();
}

// Exibir notícias na página "todasNoticias"
function getNoticias() {
  let noticias = JSON.parse(localStorage.getItem('noticias')) || [];
  let noticiasView = document.querySelector('.cards-noticia');
  if (noticiasView) {
    noticiasView.innerHTML = '';

    for (let i = 0; i < noticias.length; i++) {
      let titulo = noticias[i].titulo;
      let descricao = noticias[i].descricao;

      noticiasView.innerHTML += `
        <div class="card-noticia d-flex align-items-center justify-content-center gap-3">
          <div class="titulo d-flex align-items-center justify-content-center rounded-4 fundo-azul h4-largura">
            <h4 class="texto-branco fw-bold fonte-24">${titulo}</h4>
          </div>
          <div class="funcoes d-flex gap-1">
            <a href="#editarNoticia.html"><img src="./assets/imagens/editar.svg" alt="Ícone de edição"></a>
            <a href="#" onclick="deleteNoticia('${titulo}')"><img src="./assets/imagens/lixeira.svg" alt="Ícone de deletar"></a>
          </div>
        </div>`;
    }
  }
}

// Chamar as funções para carregar as notícias quando a página carregar
window.onload = function() {
  if (document.querySelector('.cards-noticia')) {
    getNoticias();
  }
};
