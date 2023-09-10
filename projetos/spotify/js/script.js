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
    


    // Função para definir a saudação com base na hora atual
    function definirSaudacao() {
      var saudacaoElement = $('#saudacao');
      var horaAtual = new Date().getHours();

      if (horaAtual >= 6 && horaAtual < 12) {
          saudacaoElement.text('Bom dia');
      } else if (horaAtual >= 12 && horaAtual < 18) {
          saudacaoElement.text('Boa tarde');
      } else {
          saudacaoElement.text('Boa noite');
      }
  }

  definirSaudacao();

///////////////////////// Player de músicas ///////////////////////////////////

const audio = $('#my-audio')[0];
    const playPauseButton = $('#play-pause-button');
    const previousButton = $('#previous-button');
    const nextButton = $('#next-button');
    const currentTime = $('#current-time');
    const totalTime = $('#total-time');
    const progressoAtual = $('.progresso-atual');
    const circuloProgresso = $('.circulo-progresso');
    const barraProgresso = $('.barra-progresso');
    const volumeAtual = $('.volume-atual');
    const circuloVolume = $('.circulo-volume');
    const barraVolume = $('.barra-volume');
    const iconeVolume = $('.icone-volume'); // Seleciona o ícone de volume
    
    let currentTrack = 0;
    let isPlaying = true;
    let isMuted = false;
    let previousVolume = 1.0;
    let isChangingTrack = false;
    
    const tracks = [
      'musicas/Egzod&MaestroChives-Royalty(ft. Neoni).mp3',
      'musicas/Cartoon-On&On(feat. Daniel Levi).mp3',
      'musicas/Vicetone-Nevada.mp3'
      // Adicione mais músicas conforme necessário
    ];
    
    function formatTime(time) {
      const minutes = Math.floor(time / 60);
      const seconds = Math.floor(time % 60);
      return `${minutes}:${seconds.toString().padStart(2, '0')}`;
    }
    
    function playCurrentTrack() {
      audio.src = tracks[currentTrack];

      // Chama a função para atualizar o conteúdo da música
        atualizarConteudoMusica();
    }
    
    playPauseButton.click(function() {
      if (isPlaying) {
        audio.play();
        playPauseButton.html('<i class="fa-solid fa-circle-pause"></i>'); // Muda o botão para pausa
      } else {
        audio.pause();
        playPauseButton.html('<i class="fa-solid fa-circle-play"></i>'); // Muda o botão para play
      }
      isPlaying = !isPlaying;
    });
    
    nextButton.click(function() {
        currentTrack = (currentTrack + 1) % tracks.length;
        isPlaying = false;
        playCurrentTrack();
        audio.play();
        playPauseButton.html('<i class="fa-solid fa-circle-pause"></i>');
    });
    
    previousButton.click(function() {
        currentTrack = (currentTrack - 1 + tracks.length) % tracks.length;
        isPlaying = false;
        playCurrentTrack();
        audio.play();
        playPauseButton.html('<i class="fa-solid fa-circle-pause"></i>');
    });
    
    audio.addEventListener('timeupdate', function() {
      if (!isDragging) { // Verificar se não está arrastando a barra
        const progress = (audio.currentTime / audio.duration) * 100;
        progressoAtual.css('width', progress + '%');
        circuloProgresso.css('left', progress + '%');
        currentTime.text(formatTime(audio.currentTime));
      }
    });
    
    audio.addEventListener('loadedmetadata', function() {
      totalTime.text(formatTime(audio.duration));
    });
    
    audio.addEventListener('ended', function() {
      // Avança para a próxima faixa quando a música termina
      currentTrack = (currentTrack + 1) % tracks.length;
      playCurrentTrack();
    });

    // Variável para rastrear o estado do arrasto da barra de progresso
    let isDragging = false;
    
    // Variável para armazenar o tempo atual enquanto arrasta a barra de progresso
    let draggingTime = 0;
    
    // Evento de clique e arraste na barra de progresso para definir o tempo da música
    barraProgresso.mousedown(function(event) {
      isDragging = true;
      updateProgressBar(event);
    });
    
    // Evento de movimento do mouse para seguir o mouse durante o arrasto da barra de progresso
    $(document).mousemove(function(event) {
      if (isDragging) {
        updateProgressBar(event);
      }
    });
    
    // Evento de soltar o mouse para parar de arrastar e definir o tempo da música
    $(document).mouseup(function() {
      if (isDragging) {
        isDragging = false;
        audio.currentTime = draggingTime;
      }
    });

    // Função para atualizar a barra de progresso com base na posição do mouse
    function updateProgressBar(event) {
      const barraWidth = barraProgresso.width();
      const clickX = event.pageX - barraProgresso.offset().left;
      // Limita a posição dentro dos limites da barra
      const percentClicked = Math.min(1, Math.max(0, clickX / barraWidth));
      draggingTime = percentClicked * audio.duration;
      const progress = (draggingTime / audio.duration) * 100;
      progressoAtual.css('width', progress + '%');
      circuloProgresso.css('left', progress + '%');
      currentTime.text(formatTime(draggingTime));
    }

    // Variável para rastrear o estado do arrasto da barra de volume
    let isVolumeDragging = false;
    
    // Variável para armazenar o volume atual enquanto arrasta a barra de volume
    let volumeValue = 1.0;
    
    // Evento de clique e arraste na barra de volume para definir o volume
    barraVolume.mousedown(function(event) {
      isVolumeDragging = true;
      updateVolume(event);
    });
    
    // Evento de movimento do mouse para seguir o mouse durante o arrasto da barra de volume
    $(document).mousemove(function(event) {
      if (isVolumeDragging) {
        updateVolume(event);
      }
    });
    
    // Evento de soltar o mouse para parar de arrastar a barra de volume
    $(document).mouseup(function() {
      if (isVolumeDragging) {
        isVolumeDragging = false;
        audio.volume = volumeValue;
      }
    });

    // Função para atualizar a barra de volume com base na posição do mouse
    function updateVolume(event) {
      const barraWidth = barraVolume.width();
      const clickX = event.pageX - barraVolume.offset().left;
      // Limita a posição dentro dos limites da barra de volume
      const percentClicked = Math.min(1, Math.max(0, clickX / barraWidth));
      volumeValue = percentClicked;
      const volumeProgress = percentClicked * 100;
      volumeAtual.css('width', volumeProgress + '%');
      circuloVolume.css('left', volumeProgress + '%');
      audio.volume = volumeValue;
    }

     // Evento de clique no ícone de volume para mutar ou desmutar
    iconeVolume.click(function() {
    const icone = $(this); // Seleciona o elemento de ícone dentro do ícone de volume completo
    if (isMuted) {
      // Se estiver mutado, desmutar e restaurar o volume anterior
      audio.volume = previousVolume;
      volumeValue = previousVolume;
      isMuted = false;
      // Altera a classe do ícone para volume alto
      icone.removeClass('fa-volume-mute').addClass('fa-volume-high');
    } else {
      // Se não estiver mutado, mutar e salvar o volume atual
      previousVolume = audio.volume;
      volumeValue = 0;
      audio.volume = 0;
      isMuted = true;
      // Altera a classe do ícone para volume mudo
      icone.removeClass('fa-volume-high').addClass('fa-volume-mute');
    }

    // Atualiza a barra de volume
    const volumeProgress = volumeValue * 100;
    volumeAtual.css('width', volumeProgress + '%');
    circuloVolume.css('left', volumeProgress + '%');
    });


    playCurrentTrack();

///////////////////////// Fim player de músicas ///////////////////////////////////


// Função para atualizar o conteúdo da música
function atualizarConteudoMusica() {
    const conteudoMusica = $('#conteudo-musica');
    const musicaAtual = tracks[currentTrack]; // Obtém a URL da música atual

    // Defina as informações da música com base na URL da música atual
    let imagem;
    let nomeArtista;
    let nomeMusica;

    if (musicaAtual === 'musicas/Egzod&MaestroChives-Royalty(ft. Neoni).mp3') {
        imagem = 'imagens/musica/musica1.png';
        nomeArtista = 'Royalty';
        nomeMusica = 'Egzod & Maestro Chives';
    } else if (musicaAtual === 'musicas/Cartoon-On&On(feat. Daniel Levi).mp3') {
        imagem = 'imagens/musica/musica2.png';
        nomeArtista = 'On & On';
        nomeMusica = 'Cartoon';
    } else if (musicaAtual === 'musicas/Vicetone-Nevada.mp3') {
        imagem = 'imagens/musica/musica3.png';
        nomeArtista = 'Vicenote';
        nomeMusica = 'Nevada';
    }

    // Atualize o conteúdo da div com as informações da música atual
    conteudoMusica.html(`
        <span class="d-block"><img class="img-fluid" src="${imagem}"></span>
        <div class="area-artista">
            <span class="musica-artista">${nomeMusica}</span>
            <span class="nome-artista">${nomeArtista}</span>
        </div>
        <i class="fa-regular fa-heart btn-content-play cores-i-padrao"></i>
        <i class="bi bi-pip btn-content-play cores-i-padrao"></i>
    `);
}

// Chame a função para atualizar o conteúdo da música inicialmente
atualizarConteudoMusica();


});