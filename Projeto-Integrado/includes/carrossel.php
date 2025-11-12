  <!-- CARROSSEL DE IMAGENS -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicadores (bolinhas abaixo do carrossel) -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
    </div>

    <!-- Conteúdo das imagens -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://picsum.photos/1200/400?random=1" class="d-block w-100" alt="Imagem 1">
        <!-- d-block: display em bloco / w-100: ocupa toda a largura -->
        <div class="carousel-caption d-none d-md-block">
          <!-- d-none d-md-block: esconde em telas pequenas -->
          <h5>Bem-vindo ao Meu Site</h5>
          <p>Inovação e tecnologia para o seu negócio</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/1200/400?random=2" class="d-block w-100" alt="Imagem 2">
        <div class="carousel-caption d-none d-md-block">
          <h5>Serviços Profissionais</h5>
          <p>Qualidade e compromisso em cada projeto</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/1200/400?random=3" class="d-block w-100" alt="Imagem 3">
        <div class="carousel-caption d-none d-md-block">
          <h5>Resultados Reais</h5>
          <p>Seu sucesso é a nossa prioridade</p>
        </div>
      </div>
    </div>

    <!-- Botões de navegação do carrossel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>