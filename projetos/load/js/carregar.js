$(document).ready(function() {
    // Obtenha o nome da página atual, por exemplo, da URL
    var currentPage = window.location.pathname;

    // Verifique se a página atual já foi carregada
    var isFirstLoad = localStorage.getItem(currentPage);

    if (!isFirstLoad) {
        localStorage.setItem(currentPage, "true");

        // Exibe a div de carregamento
        $("#loadingContainer").css("display", "flex");

        // Simule o carregamento por pelo menos 4 segundos
        setTimeout(function() {
            // Após pelo menos 4 segundos, oculte o carregamento
            $("#loadingContainer").animate({ opacity: 0 }, 1000, function() {
                $(this).hide();
                $("#conteudo-carregado").fadeIn();
            });
        }, 4000); // 4000 milissegundos = 4 segundos
    } else {
        // Se não for a primeira carga, apenas exiba o conteúdo carregado
        $("#conteudo-carregado").fadeIn();
    }
});

// Funções para manipular cookies
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
  }
  
  function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  }