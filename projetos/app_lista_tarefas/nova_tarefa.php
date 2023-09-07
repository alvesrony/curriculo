<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>
		<link rel="icon" href="img/logo-cima.png">

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	</head>

	<body>

		<div class="display-geral">
			<div>
				<div class="pb-3">
					<header class="container-fluid container-md pt-2">
						<a class="navbar-brand d-flex align-items-center" href="#">
							<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
							<span>App Lista Tarefas</span>
						</a>
					</header>

					<?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) { ?>
						<div class="bg-success pt-2 mt-2 text-white d-flex justify-content-center">
							<h5>Tarefa inserida com sucesso!</h5>
						</div>
					<?php } ?>
				</div>
				<div class="container-fluid container-md app">
				<div class="row">
					<div class="menu col-12 col-lg-4">
						<div class="group-menu">
							<a href="index.php" class="group-menu-items"><button class="btn-items">Tarefas pendentes</button></a>
							<a href="nova_tarefa.php" class="group-menu-items active"><button class="btn-items"  style="margin-top: 31px;">Nova tarefa</button></a>
							<a href="todas_tarefas.php" class="group-menu-items"><button class="btn-items" style="margin-top: 51px;">Todas tarefas</button></a>
						</div>
					</div>

					<div class="col-12 col-lg-8">
						<div class="pagina mt-2 mt-lg-0">
							<div>
								<div>
									<h4>Nova tarefa</h4>
									<hr style="color: #fff;">

									<form method="post" action="tarefa_controller.php?acao=inserir">
										<div class="form-group">
											<label>Descrição da tarefa:</label>
											<input type="text" class="form-control" name="tarefa" placeholder="Exemplo: Lavar o carro">
										</div>

										<button class="btn btn-success">Cadastrar</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>

		<footer>
			<div class="redes-sociais">

			<div class="links">
  				<div class="icons-social-media icon"><i class="bi bi-github" style="color: #00a234; font-size: 22px;"></i></div>
				<div class="icons-social-media icon"><i class="bi bi-linkedin" style="color: #00a234; font-size: 22px;"></i></div>
				<div class="icons-social-media icon"><i class="bi bi-instagram" style="color: #00a234; font-size: 22px;"></i></div>
				<div class="icons-social-media icon"><i class="bi bi-envelope" style="color: #00a234; font-size: 22px;"></i></div>
			</div>
			<div class="texto_rodape">
                &copy; 2023 - Roniesley Alves
            </div>
		</footer>
		</div>
	</body>
</html>