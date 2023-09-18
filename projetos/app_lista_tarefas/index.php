<?php

	$acao = 'recuperarTarefasPendentes';
	require 'tarefa_controller.php';

?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>
		<link rel="icon" href="img/logo-cima.png">

		<!-- jquey -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

		<!-- js -->
		<script type="text/javascript" src="../load/js/carregar.js"></script>

		<!-- Estilo customizado -->
		<link rel="stylesheet" type="text/css" href="../load/css/carregar.css">
		
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

		<script>
			function editar(id, txt_tarefa) {

				//criar um form de edição
				let form = document.createElement('form')
				form.action = 'index.php?pag=index&acao=atualizar'
				form.method = 'post'
				form.className = 'row'

				//criar um input para entrada do texto
				let inputTarefa = document.createElement('input')
				inputTarefa.type = 'text'
				inputTarefa.name = 'tarefa'
				inputTarefa.className = 'col-9 form-control'
				inputTarefa.value = txt_tarefa

				//criar um input hidden para guardar o id da tarefa
				let inputId = document.createElement('input')
				inputId.type = 'hidden'
				inputId.name = 'id'
				inputId.value = id

				//criar um button para envio do form
				let button = document.createElement('button')
				button.type = 'submit'
				button.className = 'col-3 btn btn-info'
				button.innerHTML = 'Atualizar'

				//incluir inputTarefa no form
				form.appendChild(inputTarefa)

				//incluir inputId no form
				form.appendChild(inputId)

				//incluir button no form
				form.appendChild(button)

				//teste
				//console.log(form)

				//selecionar a div tarefa
				let tarefa = document.getElementById('tarefa_'+id)

				//limpar o texto da tarefa para inclusão do form
				tarefa.innerHTML = ''

				//incluir form na página
				tarefa.insertBefore(form, tarefa[0])

			}

			function remover(id) {
				location.href = 'index.php?pag=index&acao=remover&id='+id;
			}

			function marcarRealizada(id) {
				location.href = 'index.php?pag=index&acao=marcarRealizada&id='+id;
			}
		</script>

	</head>

	<body>

	'	<!-- Div de carregamento -->
		<div id="loadingContainer" style="display: none;">
		<div class="loader"></div>
		<div class="sk-cube-grid">
			<div class="sk-cube sk-cube1"></div>
			<div class="sk-cube sk-cube2"></div>
			<div class="sk-cube sk-cube3"></div>
			<div class="sk-cube sk-cube4"></div>
			<div class="sk-cube sk-cube5"></div>
			<div class="sk-cube sk-cube6"></div>
			<div class="sk-cube sk-cube7"></div>
			<div class="sk-cube sk-cube8"></div>
			<div class="sk-cube sk-cube9"></div>
		</div>
		</div>'

		<div id="conteudo-carregado" style="display: none;"><!-- conteudo-carregado -->
		
			<div class="display-geral">	
				<div class="display-principal">
					<header class="container-fluid container-md pt-2 pb-3">
						<a class="navbar-brand d-flex align-items-center" href="#">
							<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
							<span>App Lista Tarefas</span>
						</a>
					</header>
					<div class="container-geral">
					<div class="container-fluid container-md app">
						<div class="row">
							<div class="menu col-12 col-lg-4">
								<div class="group-menu">
									<a href="#" class="group-menu-items active"><button class="btn-items">Tarefas pendentes</button></a>
									<a href="nova_tarefa.php" class="group-menu-items"><button class="btn-items"  style="margin-top: 31px;">Nova tarefa</button></a>
									<a href="todas_tarefas.php" class="group-menu-items"><button class="btn-items" style="margin-top: 51px;">Todas tarefas</button></a>
								</div>
							</div>

							<div class="col-12 col-lg-8">
								<div class="pagina mt-2 mt-lg-0">
									<div>
										<div>
											<h4>Tarefas pendentes</h4>
											<hr style="color: #fff;">

											<?php foreach($tarefas as $indice => $tarefa) { ?>
												<div class="mb-3 d-flex align-items-center tarefa justify-content-between">
													<div id="tarefa_<?= $tarefa->id ?>" class="tarefas">
														<?= $tarefa->tarefa ?>
													</div>
													<div class="mt-2 d-flex">
														<div>
													<ul class="wrapper">
														<li class="icon facebook" title="Remover">
															<span><i class="fas fa-trash-alt fa-lg btn-wrapper" onclick="remover(<?= $tarefa->id ?>)"></i></span>
														</li>
														<li class="icon twitter" title="Editar">
															<span><i class="fas fa-edit fa-lg btn-wrapper" onclick="editar(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>')"></i></span>
														</li>
														<li class="icon instagram" title="Realizada">
															<span><i class="fas fa-check-square fa-lg btn-wrapper" onclick="marcarRealizada(<?= $tarefa->id ?>)"></i></span>
														</li>
													</ul>
												</div>
													</div>
												</div>

											<?php } ?>
										</div>
									</div>
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
							<a href="https://github.com/alvesrony" title="Github"><div class="icons-social-media icon"><i class="bi bi-github" style="color: #00a234; font-size: 22px;"></i></div></a>
							<a href="https://www.linkedin.com/in/roniesley-alves-6781b8290/" title="Linkedin"><div class="icons-social-media icon"><i class="bi bi-linkedin" style="color: #00a234; font-size: 22px;"></i></div></a>
							<a href="https://www.instagram.com/_alvesrony/" title="Instagram"><div class="icons-social-media icon"><i class="bi bi-instagram" style="color: #00a234; font-size: 22px;"></i></div></a>
							<a href="mailto:alvesroniesley@gmail.com" title="E-mail"><div class="icons-social-media icon"><i class="bi bi-envelope" style="color: #00a234; font-size: 22px;"></i></div></a>
						</div>
						<div class="texto_rodape">
						&copy; 2023 - Roniesley Alves
						</div>
				</footer>
		</div>

		<script type="text/javascript" src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>