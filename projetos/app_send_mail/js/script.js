$(document).ready(function() { 

// Captura o evento de submit do formulário
$("form").submit(function(event) {
  // Evita o comportamento padrão de enviar o formulário
  event.preventDefault();

  var email = $("#para").val();
  var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  var resultadoDiv = $("#resultado");
  
  if (!emailRegex.test(email)) {
      resultadoDiv.html("Por favor, insira um endereço de e-mail válido.");
      event.preventDefault(); // Impede o envio do formulário
  } else {
      resultadoDiv.html(""); // Limpa a mensagem de erro anterior
      
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
      
      setTimeout(function() {
        var divAlerta = document.querySelector(".div_alerta");
        if (divAlerta) {
            divAlerta.remove();
        }
    }, 6000); // 6000 milissegundos = 6 segundos
    
    }
  });
  }

});


});