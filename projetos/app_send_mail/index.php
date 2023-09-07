<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Mail Send</title>
		<link rel="icon" href="logo-cima.png">

		<!-- jquey -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

		<!-- js -->
		<script type="text/javascript" src="../load/js/script-animacao.js"></script>
		<script type="text/javascript" src="js/script.js"></script> 

		<!-- Estilo customizado -->
		<link rel="stylesheet" type="text/css" href="../load/css/carregar.css">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>

	<body>

		<div id="conteudo-carregado" style="display: none;"><!-- conteudo-carregado -->
			<div class="container">  

			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
				<h2>Send Mail</h2>
				<p class="lead">Seu app de envio de e-mails particular!</p>
			</div>

			<section class="mt-3"><!-- seção contato -->
              <div class="container-md container-fluid"><!-- container -->
                    				
				<form class="form-container" id="meuFormulario" action="processa_envio.php" method="post">
					<div class="form">
						<span class="heading">Envie seu e-mail</span>
						<input placeholder="Para" name="para" id="para" type="text" class="input" required="">
						<input placeholder="Assunto" name="assunto" id="assunto" type="text" class="input" required="">
						<textarea placeholder="Mensagem" name="mensagem" rows="10" cols="30" id="mensagem" name="message" class="textarea" required=""></textarea>
						<div class="button-container">
							<button class="send-button" type="submit">Enviar</button>
							<div class="reset-button-container">
								<div id="reset-btn" class="reset-button">
									<div id="resultado"></div>
									<div class="loader d-none">
										<div id="load">
											<div>G</div>
											<div>N</div>
											<div>I</div>
											<div>D</div>
											<div>A</div>
											<div>O</div>
											<div>L</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>

              </div><!-- /container -->
            </section><!-- /seção contato -->
		</div>
		</body>
</html>