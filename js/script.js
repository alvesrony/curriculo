$(document).ready(function() {

/********************* RESPONSIVIDADE MD ************************/

// Função para verificar o tamanho da tela e alternar a classe do container
function toggleContainerClass() {
  const screenWidth = window.innerWidth;
  const container = document.querySelector('.container_mod_class');
  
  if (screenWidth <= 768) {
    // Se a tela for md ou maior, muda para container-fluid
    container.classList.remove('container');
    container.classList.add('container-fluid');
  } else {
    // Se a tela for menor que md, muda para container
    container.classList.remove('container-fluid');
    container.classList.add('container');
  }
}

// Executa a função quando a página carrega e redimensiona
window.addEventListener('load', toggleContainerClass);
window.addEventListener('resize', toggleContainerClass);


// Função para remover a classe show-menu do body
  function removeShowMenuClass() {
    $('body').removeClass('show-menu');
  }

  // Tratamento do clique nos links dentro da div menu-side
  $('.menu-side a').on('click', function() {
    removeShowMenuClass();
  });

});

/********************* MENU ************************/

  // Função para adicionar ou remover uma classe do elemento
  function toggleClass(elem, className) {
  if (elem.classList.contains(className)) {
      elem.classList.remove(className);
    } else {
          elem.classList.add(className);
      }
}

// Função para abrir ou fechar o menu
function toggleMenu() {
  const bodyEl = document.body;
  const content = document.querySelector('.body');
  const isOpen = bodyEl.classList.contains('show-menu');

  toggleClass(bodyEl, 'show-menu');
  toggleClass(content, 'show-menu');
}

// Inicialização após o carregamento do DOM
document.addEventListener('DOMContentLoaded', function() {
  const openBtn = document.getElementById('open-button');
  const closeBtn = document.getElementById('close-button');
  const content = document.querySelector('.content-wrap');

  openBtn.addEventListener('click', toggleMenu);

  if (closeBtn) {
    closeBtn.addEventListener('click', toggleMenu);
  }

// Fechar o menu quando clicar fora dele
content.addEventListener('click', function(ev) {
  if (document.body.classList.contains('show-menu') && ev.target !== openBtn) {
    toggleMenu();
  }
});
});

