$(document).ready(function() {

    $(".icone-senha").click(function() {
        var inputSenha = $("#senha");
        var iconeSenha = $(this);

        if (inputSenha.attr("type") === "password") {
            inputSenha.attr("type", "text");
            iconeSenha.removeClass("fa-eye-slash");
            iconeSenha.addClass("fa-eye");
        } else {
            inputSenha.attr("type", "password");
            iconeSenha.removeClass("fa-eye");
            iconeSenha.addClass("fa-eye-slash");
        }
    });
    
});
