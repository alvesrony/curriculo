$(document).ready(function() {
  // branch develop
/********************* FILTRAGEM ************************/
  $('.filter-button').on('click', function() {
    const category = $(this).data('category');

    if (category === 'all') {
      $('.sub-item').show();
    } else {
      $('.sub-item').hide();
      $(`.${category}`).show();
    }
  });


/********************* EXPANDIR/CONTRAIR DIV ************************/
  $(".toggle-button").click(function(e) {
    e.preventDefault();
    const content = $(this).siblings(".conteudo_expandido");
    content.slideToggle();
    const buttonText = $(this).text();
    $(this).text(buttonText === "Ver mais..." ? "Ver menos..." : "Ver mais...");
  });


/*********************  LINKS ANCORA ************************/
// Manipular o clique nos links da classe "scroll-link"
$('.scroll-link').click(function(e) {
  e.preventDefault();

  // Remover a classe 'show-menu' do elemento <body>
  $('body').removeClass('show-menu');

  // Obter o ID da seção alvo com base no atributo "data-section" do link
  var targetSectionId = $(this).data('section');

  // Atraso de 0.22 segundos antes de rolar suavemente para a seção alvo
  setTimeout(function() {
    $('#' + targetSectionId).get(0).scrollIntoView({
      behavior: 'smooth'
    });
  }, 220);
});

/*********************  BOTAO PARA VOLTAR AO INICIO ************************/
$('#top-link').on('click', function(e) {
  e.preventDefault();

  // Scroll suave para o topo da página usando jQuery
  $('html, body, .content').animate({ scrollTop: 0 }, 'slow');
});


/*********************  LOGICA PARA ENVIO DE MENSAGENS ************************/
// Captura o evento de submit do formulário
$("form").submit(function(event) {
  // Evita o comportamento padrão de enviar o formulário
  event.preventDefault();

  // Remover a classe d-none para mostrar o loader e esconder o resultado
  $(".loader").removeClass("d-none");
  $("#resultado").addClass("d-none");

  // Faz a requisição AJAX para processa_envio.php
  $.ajax({
    type: "POST",
    url: "processa_envio.php",
    data: $(this).serialize(), // Serializa os dados do formulário
    success: function(response) {
      // Atualiza a div "resultado" com a resposta do servidor
      $("#resultado").html(response);

      // Verifica se a div com a classe 'botao_sucesso' existe na resposta do servidor
      if ($("#resultado .botao_sucesso").length) {
        // Limpar o conteúdo do formulário apenas se der "sucesso"
        $("form")[0].reset();
      }

      // Adicionar a classe d-none para esconder o loader após a resposta e mostrar o resultado
      $(".loader").addClass("d-none");
      $("#resultado").removeClass("d-none");
    }
  });
});


$("#open-button").on("click", function() {
  var iconElement = $(this).find("i.menu-button");
  if (iconElement.hasClass("fa-bars")) {
    // Se a classe for "fa-bars", altere para "fa-x"
    iconElement.removeClass("fa-bars").addClass("fa-x");
  } else {
    // Se a classe não for "fa-bars" (ou seja, é "fa-x"), altere para "fa-bars"
    iconElement.removeClass("fa-x").addClass("fa-bars");
  }
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
  const content = document.querySelector('.content-wrap');
  const isOpen = bodyEl.classList.contains('show-menu');

  toggleClass(bodyEl, 'show-menu');
  toggleClass(content, 'show-menu');
}

// Inicialização após o carregamento do DOM
document.addEventListener('DOMContentLoaded', function() {
  const openBtn = document.getElementById('open-button');
  const closeBtn = document.getElementById('close-button');
  const content = document.querySelector('.content-wrap');

  if (openBtn) {
    openBtn.addEventListener('click', toggleMenu);
  }

  if (closeBtn) {
    closeBtn.addEventListener('click', toggleMenu);
  }
});

