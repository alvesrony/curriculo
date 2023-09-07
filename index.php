<!DOCTYPE html>
<html>
  <head>

    <!-- Meta tags Obrigatórias -->
    <title>Portfólio</title>
    <link rel="icon" href="imagens/logo.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Animações -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <link rel="stylesheet" type="text/css" href="css/mediaqueries.css">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- js -->
    <script type="text/javascript" src="js/script.js"></script> 

    <!-- HTML5Shiv -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <![endif]-->
  </head>

  <body>
    
    <div class="container_mod"><!-- container_mod -->
      <div class="menu-wrap">
          <nav class="menu-top">
            <div class="profile"><img src="imagens/userPhoto.jpeg" width="42px" height="42px" />Roniesley Alves</div>
            <div class="icon-list">
              <a href="#" title="Github" class="link-menu">
                  <i class="fa-brands fa-github"></i>
              </a>
              <a href="#" title="Linkedin" class="link-menu">
                  <i class="fa-brands fa-linkedin"></i>
              </a>
              <a href="#" title="Instagram" class="link-menu">
                  <i class="fa-brands fa-instagram"></i>
              </a>
              <a href="#" title="Email" class="link-menu">
                  <i class="fa-regular fa-envelope"></i>
              </a>
            </div>
          </nav>
          <nav class="menu-side">
            <a class="scroll-link underline_esquerda" data-section="sobre" onclick="changeMenuIcon('fa-bars')">Sobre</a>
            <a class="scroll-link underline_esquerda" data-section="habilidades" onclick="changeMenuIcon('fa-bars')">Habilidades</a>
            <a class="scroll-link underline_esquerda" data-section="informacoes" onclick="changeMenuIcon('fa-bars')">Informações</a>
            <a class="scroll-link underline_esquerda" data-section="projetos" onclick="changeMenuIcon('fa-bars')">Projetos</a>
            <a class="scroll-link underline_esquerda" data-section="contato" onclick="changeMenuIcon('fa-bars')">Contato</a>
          </nav>
      </div>

      <div class="content-wrap"><!-- content-wrap -->
        <div class="content"><!-- content -->

            <div id="open-button">
              <i class="btn menu-button fa-solid fa-bars animate__animated animate__fadeInDown" id="menu-icon"></i>
              <span class="visually-hidden">Mostrar menu</span>
            </div>
          
              
            <section id="sobre" class="area_usuario animate__animated animate__fadeInUp"><!-- seção usuário -->

              <div class="container-md container-fluid"><!-- container -->
                  <div class="row d-flex justify-content-end mt-lg-4"><!-- row -->
                    <div class="col-sm-12 col-md-6 col-lg-4 text-center animate__animated animate__fadeInUp bloco_usuario">

                        <img src="imagens/userPhoto.jpeg" class="img-fluid">
                        <h2 class="nome_usuario">
                          <b>Roniesley Alves</b>
                        </h2>
                        <p class="text-uppercase funcao">
                          <b>Programador entusiasta</b>
                        </p>

                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 descricao_usuario animate__animated animate__fadeInRight">
                      <h2 class="ola">Olá!</h2>

                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"><!-- /carousel -->
                          <div class="carousel-inner">
                            <div class="carousel-item active item_header">
                              <h2>
                                Tenho <b>19</b> anos, moro em <b>Fortaleza</b> e curso engenharia de telecomunicações no <b>IFCE</b>.
                              </h2>
                            </div>
                            <div class="carousel-item item_header">
                              <h2>
                                Ainda não tenho experiência de trabalho na área, mas tenho vários projetos que fiz na faculdade e em cursos online.
                              </h2>
                            </div>
                            <div class="carousel-item item_header">
                              <h2>
                                Busco estágio em que possa por em prática tudo que sei e que me proporcione aprender coisas novas.
                              </h2>
                            </div>
                          </div>
                        </div><!-- /carousel -->

                        <p>
                          Tenho boas habilidades em front-end incluindo animações e menus.
                        </p>
                        <a href="" class="btn text-uppercase">
                          <i class="icone_resumo bi bi-file-earmark-person"></i>
                          Baixar resumo
                        </a>
                    </div>
                  </div><!-- /row -->
              </div><!-- /container -->
            </section><!-- /seção usuário -->

            <section id="habilidades" class="section_hab"><!-- seção habilidades -->
              <div class="container-md container-fluid pb-4 pt-4">
                <div class="row header_hab">
                  <div class="col-sm-5 col-md-6 col-lg-6 d-flex">
                    <h2><b>Habilidades</b></h2>
                  <div class="line_hab">
                    <span></span>
                  </div>
                  </div>
                  
                  <div class="col-sm-7 col-md-6 col-lg-6">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a href="#1a" class="nav-link active" data-bs-toggle="pill"><i class="bi bi-tools"></i>Profissionais</a>
                      </li>
                      <li class="nav-item">
                      <a href="#2a" class="nav-link" data-bs-toggle="pill"><i class="bi bi-person"></i>Pessoais</a>
                      </li>
                    </ul>
                  </div>
                </div>
                
              
              
              <div id="exTab1">
                
              
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="1a">
                    <div class="conteudo_tabela">

                      <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="btn filter-button" data-category="all" for="btnradio1"><b>Todos</b></label>
                      
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn filter-button" data-category="frontend" for="btnradio2"><b>FrontEnd</b></label>
                        
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="btn filter-button" data-category="backend" for="btnradio3"><b>BackEnd</b></label>
                      </div>

                      <div class="row row_items">
                          <div class="col-sm-12 col-md-6 p-0">
                            <ul id="item-list">
                              <li class="sub-item">
                                <div class="card_list">
                                  <span class="card_titulo"><i class="fa-brands fa-github p-1"></i> GIT &amp; GITHUB </span>
                                  <div class="barra_bar">
                                    <div class="barra_porcento_right"><span>80%</span></div>
                                      <div class="progresso_bg"></div>
                                      <div class="progresso_barra pb_left" style="width: 80%;"></div>
                                  </div>
                                  <p class="conteudo_expandido">
                                    Sempre coloco meus projetos e conteúdos de aula no github a fim de gerar uma boa prática e tornar habitual o uso da plataforma.
                                  </p>
                                  <a href="#" class="veja_mais toggle-button">Ver mais...</a>
                                </div>
                              </li>
                              <li class="sub-item frontend">
                                <div class="card_list">
                                  <span class="card_titulo"><i class="fa-solid fa-code p-1"></i> HTML &amp; CSS3 </span>
                                  <div class="barra_bar">
                                    <div class="barra_porcento_right"><span>90%</span></div>
                                      <div class="progresso_bg"></div>
                                      <div class="progresso_barra pb_left" style="width: 90%;"></div>
                                  </div>
                                  <p class="conteudo_expandido">
                                    Tenho um bom domínio de HTML e CSS3 devido às aulas que tive na udemy e os projetos que realizei para exercitar.
                                  </p>
                                  <a href="#" class="veja_mais toggle-button">Ver mais...</a>
                                </div>
                              </li>
                              <li class="sub-item backend">
                                <div class="card_list">
                                  <span class="card_titulo"><i class="fa-brands fa-php p-1"></i> PHP 8 </span>
                                  <div class="barra_bar">
                                    <div class="barra_porcento_right"><span>60%</span></div>
                                      <div class="progresso_bg"></div>
                                      <div class="progresso_barra pb_left" style="width: 60%;"></div>
                                  </div>
                                  <p class="conteudo_expandido">
                                    No curso, vi várias técnicas e maneiras de se pensar para resolver problemas de Backend com PHP 7 e atualmente estou estudando o PHP 8, aprendi sobre as técnicas padrões da linguagem, orientação à objetos (pilares, construct e destruct, etc...) e também vários projetos focados em PHP que também estão no meu github.
                                  </p>
                                    <a href="#" class="veja_mais toggle-button">Ver mais...</a>
                                </div>
                              </li>
                              <li class="sub-item frontend">
                                <div class="card_list">
                                  <span class="card_titulo"><i class="fa-brands fa-square-js p-1"></i> JAVASCRIPT, ES6, JQUERY &amp; AJAX </span>
                                  <div class="barra_bar">
                                    <div class="barra_porcento_right"><span>70%</span></div>
                                      <div class="progresso_bg"></div>
                                      <div class="progresso_barra pb_left" style="width: 70%;"></div>
                                  </div>
                                  <p class="conteudo_expandido">
                                    Tenho bom domínio em JavaScript e Jquery, fiz várias aulas e no fim delas, alguns pojetos incluindo o game mata mosquito um jogo onde o jogador possui três vidas e o objetivo é matar os mosquitos que aparecem de maneira aleatória na tela e permanecem por um tempo que pode ser mudado alterando a dificuldade e ganha se matar os mosquitos sem perder as três vidas em um certo período de tempo. O jogo foi criado focando inteiramente no JavaScript a fim de exercitar a linguagem.
                                  </p>
                                  <a href="#" class="veja_mais toggle-button">Ver mais...</a>
                                </div>
                              </li>
                            </ul>
                          </div>

                          <div class="col-sm-12 col-md-6 p-0">
                            <ul id="item-list">
                              <li class="sub-item backend">
                                <div class="card_list">
                                  <span class="card_titulo"><i class="bi bi-filetype-sql p-1"></i> MySQL </span>
                                  <div class="barra_bar">
                                    <div class="barra_porcento_right"><span>70%</span></div>
                                      <div class="progresso_bg"></div>
                                      <div class="progresso_barra pb_left" style="width: 70%;"></div>
                                  </div>
                                  <p class="conteudo_expandido">
                                    Escolhi o MySQL como banco de dados para iniciar os estudos exercitei os códigos e fiz vários banco de dados teste incluindo o "lista tarefas" um programa com frontend e backend que cria tarefas no banco de dados assim como às exclui, edita tarefas já salvas e marca como concluida.
                                  </p>
                                  <a href="#" class="veja_mais toggle-button">Ver mais...</a>
                                </div>
                              </li>
                              <li class="sub-item frontend">
                                <div class="card_list">
                                  <span class="card_titulo"><i class="fa-brands fa-bootstrap p-1"></i> BOOTSTRAP 5 </span>
                                  <div class="barra_bar">
                                    <div class="barra_porcento_right"><span>80%</span></div>
                                      <div class="progresso_bg"></div>
                                      <div class="progresso_barra pb_left" style="width: 80%;"></div>
                                  </div>
                                  <p class="conteudo_expandido">
                                    Gosto bastante das vantagens e do tempo que é ganho ao utilizar o Bootstrap por isso, busco sempre ler os documentos quando sai alguma atualização e pesquisar se existe algo que me ajude antes de começar a por uma idéia em prática.
                                  </p>
                                  <a href="#" class="veja_mais toggle-button">Ver mais...</a>
                                </div>
                              </li>
                              <li class="sub-item">
                                <div class="card_list">
                                  <span class="card_titulo"><i class="fa-solid fa-c p-1"></i> LINGUAGEM C </span>
                                  <div class="barra_bar">
                                    <div class="barra_porcento_right"><span>80%</span></div>
                                      <div class="progresso_bg"></div>
                                      <div class="progresso_barra pb_left" style="width: 80%;"></div>
                                  </div>
                                    <p class="conteudo_expandido">
                                      Fiz o curso de 120 horas de linguagem c na faculdade onde abordamos vários assuntos aprofundados da linguagem como: Tipos, estutura sequêncial, decisão, condições, repetição, vetores, matrizes, memória dinâmica, funções, arquivos, ponteiros, structs e passagem de parametros.
                                    </p>
                                    <a href="#" class="veja_mais toggle-button">Ver mais...</a>
                                </div>
                              </li>
                            </ul>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                  
                  <div class="tab-content">
                    <div class="tab-pane fade" id="2a">
                      <div class="conteudo_tabela">
                        <div class="row row_items">
                          <div class="col-sm-12 col-md-6 p-0">
                            <ul id="segunda-lista">
                              <li class="inside-item">
                                <div class="card_list">
                                  <span class="card_titulo"><i class="fa-solid fa-wind p-1"></i> ADAPTABILIDADE </span>
                                  <div class="barra_bar">
                                    <div class="barra_porcento_right"><span>90%</span></div>
                                      <div class="progresso_bg"></div>
                                      <div class="progresso_barra pb_left" style="width: 90%;"></div>
                                  </div>
                                  <p class="conteudo_expandido">
                                    Embora não tenha experiência na área de progrador, já tive minha carteira assinada, e antes disso trabalhei em outros lugares como atendente e na produção e nunca tive problema em me adaptar em trabalho algum.
                                  </p>
                                  <a href="#" class="veja_mais toggle-button">Ver mais...</a>
                                </div>
                              </li>
                              <li class="inside-item">
                                <div class="card_list">
                                  <span class="card_titulo"><i class="fa-solid fa-microphone-lines p-1"></i> COMUNICAÇÃO </span>
                                  <div class="barra_bar">
                                    <div class="barra_porcento_right"><span>90%</span></div>
                                      <div class="progresso_bg"></div>
                                      <div class="progresso_barra pb_left" style="width: 90%;"></div>
                                  </div>
                                  <p class="conteudo_expandido">
                                    Já trabalhei como atendente e caixa de uma padaria, na qual exigia muita interação com os clientes e com outros funcionários, não tenho timidez alguma e sou bastante comunicativo.
                                  </p>
                                  <a href="#" class="veja_mais toggle-button">Ver mais...</a>
                                </div>
                              </li>
                              <li class="inside-item">
                                <div class="card_list">
                                  <span class="card_titulo"><i class="fa-solid fa-users-line p-1"></i> TRABALHO EM EQUIPE </span>
                                  <div class="barra_bar">
                                    <div class="barra_porcento_right"><span>80%</span></div>
                                      <div class="progresso_bg"></div>
                                      <div class="progresso_barra pb_left" style="width: 80%;"></div>
                                  </div>
                                  <p class="conteudo_expandido">
                                    Já trabalhei com linha de produção e em máquinas, onde exigia um bom trabalho em equipe e me proporcionou experiência em lidar com problemas e assumir controle da equipe caso precise.
                                  </p>
                                  <a href="#" class="veja_mais toggle-button">Ver mais...</a>
                                </div>
                              </li>
                            </ul>
                          </div>
                          
                          <div class="col-sm-12 col-md-6 p-0">
                            <ul id="segunda-lista">
                              <li class="inside-item">
                                <div class="card_list">
                                  <span class="card_titulo"><i class="fa-solid fa-pencil p-1"></i> CRIATIVIDADE </span>
                                  <div class="barra_bar">
                                    <div class="barra_porcento_right"><span>70%</span></div>
                                      <div class="progresso_bg"></div>
                                      <div class="progresso_barra pb_left" style="width: 70%;"></div>
                                  </div>
                                  <p class="conteudo_expandido">
                                    Sou organizado e gosto de desafios e processos que fogem do padrão e incita mais do criador.
                                  </p>
                                  <a href="#" class="veja_mais toggle-button">Ver mais...</a>
                                </div>
                              </li>
                              <li class="inside-item">
                                <div class="card_list">
                                  <span class="card_titulo"><i class="fa-solid fa-user-gear p-1"></i> PROATIVIDADE </span>
                                  <div class="barra_bar">
                                    <div class="barra_porcento_right"><span>80%</span></div>
                                      <div class="progresso_bg"></div>
                                      <div class="progresso_barra pb_left" style="width: 80%;"></div>
                                  </div>
                                  <p class="conteudo_expandido">
                                    Procuro sempre resolver meus desafios sozinho antes de procurar ajuda, muito do antigo trabalho onde não era sempre que tinha alguém disponível assim que ocorria um problema e as vezes resolvia por conta própria.
                                  </p>
                                  <a href="#" class="veja_mais toggle-button">Ver mais...</a>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
            </section><!-- /seção habilidades -->

            <section id="informacoes" class="info_section"><!-- seção informações -->
              <div class="container-md container-fluid pt-4"><!-- container -->
                <div class="row">
                  <div class="col-12 text-center">
                    <div class="secao_bg">
                      <p class="p_bg">
                        <i class="bi bi-tsunami"></i>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="row"><!-- row título -->
                  <div class="col-12 col_info">
                    <span class="infos_titulo">
                      <h2><b>Informações</b></h2>
                      <p>Saiba mais um pouco sobre mim</p>
                    </span>
                  </div>
                </div><!-- /row título -->

                <div class="row"><!-- /row conteúdo -->
                  <div class="col">
                    <ul class="ul_info">
                      <li>
                        <span class="conteudo_esquerda">Hobbies</span>
                        
                        <div class="conteudo_direita">
                          <div class="parent_div">
                            <div class="area_circulo_info">
                              <div class="linha_info"></div>
                              <div class="circulo_info"></div>
                            </div>
                          </div>
                          <p>Gosto de esportes, ir á academia e jogar videogame</p>
                        </div>
                      </li>
                      <li>
                        <span class="conteudo_esquerda">Expectativas</span>
                        
                        <div class="conteudo_direita">
                          <div class="parent_div">
                            <div class="area_circulo_info">
                              <div class="linha_info"></div>
                              <div class="circulo_info"></div>
                            </div>
                          </div>
                          <p>Gosto muito de programação e gostaria de estagiar na área como front ou backend</p>
                        </div>
                      </li>
                      <li>
                        <span class="conteudo_esquerda">Disponibilidade</span>
                        
                        <div class="conteudo_direita">
                          <div class="parent_div">
                            <div class="area_circulo_info">
                              <div class="linha_info"></div>
                              <div class="circulo_info"></div>
                            </div>
                          </div>
                          <p>Minhas aulas são todas pela manhã, estou disponível em qualquer horário no restante do dia</p>
                        </div>
                      </li>
                      <li>
                        <div class="conteudo_esquerda">Onde estudo</div>
                        
                        <div class="conteudo_direita">
                          <div class="parent_div">
                            <div class="area_circulo_info">
                              <div class="linha_info"></div>
                              <div class="circulo_info"></div>
                            </div>
                          </div>
                          <p>Curso engenharia de telecomunicações no IFCE de Fortaleza e faço alguns cursos na Udemy</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div><!-- /row conteúdo -->
              </div><!-- /container -->
            </section><!-- /seção informações -->

            <section id="projetos" class="projetos_section"><!-- seção projetos -->
              <div class="container-md container-fluid pt-4"><!-- container -->

                <div class="row"><!-- row título -->
                    <div class="col-12 text-center">
                      <div class="secao_bg">
                        <p class="p_bg">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col_info">
                      <span class="infos_titulo">
                        <h2><b>Projetos</b></h2>
                        <p>Veja um pouco mais de meus projetos</p>
                      </span>
                    </div>
                </div><!-- /row título -->
              
                <div class="scroll-container">
                  <i class="bi bi-chevron-compact-left scroll-icon" id="scrollBackward"></i>
                  <div class="container-projetos"><!-- container projetos -->
                    <div class="sub-projetos">
                      <div class="blog-intro">
                        <img src="imagens/spotify.png" class="img-fluid">
                        <b>Cópia do spotify</b>
                        <hr>
                        <span class="float-start">19 abr 2023</span>
                        <span class="float-end"><i class="fa-solid fa-code"></i></span>
                        <a href="projetos/spotify/spotify.html" class="btn">VER SITE</a>
                      </div>

                      <div class="blog-intro">
                        <img src="imagens/game.png">
                        <b>Game mata mosca</b>
                        <hr>
                        <span class="float-start">25 jun 2023</span>
                        <span class="float-end"><i class="fa-solid fa-code"></i></span>
                        <a href="projetos/app_game_mata_mosquito/index.html" class="btn">VER SITE</a>
                      </div>

                      <div class="blog-intro">
                        <img src="imagens/finans.png">
                        <b>Finans</b>
                        <hr>
                        <span class="float-start">10 fev 2023</span>
                        <span class="float-end"><i class="fa-solid fa-code"></i></span>
                        <a href="projetos/finans/index.html" class="btn">VER SITE</a>
                      </div>

                      <div class="blog-intro">
                        <img src="imagens/tarefas.png" class="img-fluid">
                        <b>Lista de tarefas</b>
                        <hr>
                        <span class="float-start">10 ago 2023</span>
                        <span class="float-end"><i class="fa-solid fa-code"></i></span>
                        <a href="projetos/app_lista_tarefas/index.php" class="btn">VER SITE</a>
                      </div>

                      <div class="blog-intro">
                        <img src="imagens/email.png">
                        <b>Send mail</b>
                        <hr>
                        <span class="float-start">10 jul 2023</span>
                        <span class="float-end"><i class="fa-solid fa-code"></i></span>
                        <a href="projetos/app_send_mail/index.php" class="btn">VER SITE</a>
                      </div>
                    </div>
                  </div><!-- /container projetos -->
                  <i class="bi bi-chevron-compact-right scroll-icon" id="scrollForward"></i>
                </div>
                
              </div><!-- /container -->
            </section><!-- /seção projetos -->

            <section id="contato" class="cntt_section"><!-- seção contato -->
              <div class="container-md container-fluid pt-4"><!-- container -->
                
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="cntt_titulo">
                      <h2>Entre em contato</h2>
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-12 col-lg-8 d-flex flex-end align-items-end">
                    <div style="width: 100%; margin-bottom: 15px;">
                      <div id="resultado"></div>
                    </div>
                  </div>
                </div> 

                <div class="row" style="padding-bottom: 50px;">
                  <div class="col-sm-12 col-md-12 col-lg-4 d-flex flex-wrap align-items-center">
                    <div class="img_cntt d-none d-lg-flex img-fluid">
                      <img src="imagens/email.svg">
                    </div>  
                  </div>
                  

                  <div class="col-sm-12 col-md-12 col-lg-8 col_form">
                    
                      <form id="meuFormulario" action="processa_envio.php" method="post">
                                
                        <div class="row">

                          <div class="col-md-4">
                            <div class="form-group custom-input draw">
                              <input name="remetente" type="text" class="form-control" id="remetente" placeholder="E-Mail">
                              <span class="campo-erro d-none" id="erro-remetente"><i class="fa-solid fa-circle-info"></i>Campo obrigatório</span>
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group custom-input draw">
                              <input name="nome" type="text" class="form-control" id="Nome" placeholder="Nome">
                              <span class="campo-erro d-none" id="erro-nome"><i class="fa-solid fa-circle-info"></i>Campo obrigatório</span>
                            </div>
                          </div>
                          
                          <div class="col-md-4">
                            <div class="form-group custom-input draw">
                              <input name="assunto" type="text" class="form-control" id="assunto" placeholder="Assunto do e-mail">
                              <span class="campo-erro d-none" id="erro-assunto"><i class="fa-solid fa-circle-info"></i>Campo obrigatório</span>
                            </div>
                          </div>

                          <div class="col-12">
                            <div class="form-group custom-input draw">
                              <textarea name="mensagem" placeholder="Mensagem" class="form-control" id="mensagem"></textarea>
                              <span class="campo-erro d-none" id="erro-mensagem"><i class="fa-solid fa-circle-info"></i>Campo obrigatório</span>
                            </div>
                          </div>

                          <div class="col-sm-12 col-md-6">
                            <button type="submit" class="btn_cntt bg_horizontal">
                              <i class="bi bi-send"></i>
                              <b>Enviar Mensagem</b>
                            </button>
                          </div>
                          
                          <!-- divs de erro e sucesso -->
                          <div class="col-sm-12 col-md-6">
                            <div class="loader d-none">
                                <div class="loading_1"></div>
                                <div class="loading_2">Enviando...</div>
                            </div>
                          </div>
                          <!-- /divs de erro e sucesso -->
                          
                        </div>

                      </form>  
                  </div>
                </div>

              </div><!-- /container -->
            </section><!-- /seção contato -->

            <footer id="rodape" class="rodape"><!-- Rodapé -->
              <div class="container"><!-- container -->
                
                <div class="rodape_link">
                  <a href="#" title="Github">
                    <i class="fa-brands fa-github"></i>
                  </a>
                  
                  <a href="#" title="Linkedin">
                    <i class="fa-brands fa-linkedin"></i>
                  </a>

                  <a href="#" title="Instagram">
                    <i class="fa-brands fa-instagram"></i>
                  </a>

                  <a href="#" title="Email">
                    <i class="fa-regular fa-envelope"></i>
                  </a>

                  <a href="#" id="top-link">
                  <i class="fa-solid fa-arrow-up"></i>
                  </a>
                </div>
                

                <div class="texto_rodape">
                  &copy; 2023 - Roniesley Alves
                </div>

              </div><!-- /container -->
            </footer><!-- /Rodapé -->

        </div><!-- /content -->
      </div><!-- /content-wrap -->
    </div><!-- /container_mod -->


    <!-- JavaScript -->
    <!-- Bootstrap -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>""