$(document).ready(function() {
    var isFirstLoad = getCookie("isFirstLoad");
    
    if (!isFirstLoad) {
        setCookie("isFirstLoad", "true", 1); // Define o cookie para expirar em 1 dia
        
        // Cria a div loadingContainer e insere-a no DOM
        var loadingContainer = $('<div id="loadingContainer"><div class="loader"></div><div class="sk-cube-grid"><div class="sk-cube sk-cube1"></div><div class="sk-cube sk-cube2"></div><div class="sk-cube sk-cube3"></div><div class="sk-cube sk-cube4"></div><div class="sk-cube sk-cube5"></div><div class="sk-cube sk-cube6"></div><div class="sk-cube sk-cube7"></div><div class="sk-cube sk-cube8"></div><div class="sk-cube sk-cube9"></div></div></div>');
        $("body").append(loadingContainer);
        
        $("#loadingContainer").css("opacity", 1); // Mostra instantaneamente
        setTimeout(function() {
            $("#loadingContainer").animate({ opacity: 0 }, 1000, function() {
                $(this).hide();
                $("#conteudo-carregado").fadeIn();
            });
        }, 3000); // 3000 milissegundos = 3 segundos
    } else {
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
