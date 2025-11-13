
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

  <!-- CONTEÚDO PRINCIPAL -->
  <section class="container my-5 text-center">
    <!-- container: centraliza conteúdo / my-5: margem vertical -->
    <h1 class="mb-4">Bem-vindo ao Meu Site!</h1>
    <!-- mb-4: margem inferior -->
    <p class="lead">Oferecemos soluções modernas, criativas e eficientes para o seu negócio.</p>
    <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#popupModal">Saiba Mais</button>
    <!-- btn btn-primary: botão azul padrão do Bootstrap -->
  </section>

  <!-- SEÇÃO DE CARDS -->
  <section class="container my-5">
    <h2 class="text-center mb-4">Nossos Diferenciais</h2>
    <!-- text-center: centraliza texto -->

    <!-- row: cria linha / g-4: espaçamento entre colunas -->
    <div class="row g-4">
      <!-- COLUNA 1 -->
      <div class="col-md-4"> <!-- col-md-4: ocupa 1/3 da linha em telas médias -->
        <div class="card h-100 shadow-sm"> <!-- card: estrutura visual / h-100: altura total / shadow-sm: sombra leve -->
          <img src="https://picsum.photos/400/250?random=10" class="card-img-top" alt="Qualidade">
          <!-- card-img-top: imagem no topo do card -->
          <div class="card-body"> <!-- card-body: conteúdo do card -->
            <h5 class="card-title">Qualidade Garantida</h5>
            <p class="card-text">Utilizamos as melhores práticas para garantir a excelência em todos os projetos entregues.</p>
          </div>
        </div>
      </div>

      <!-- COLUNA 2 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="https://picsum.photos/400/250?random=11" class="card-img-top" alt="Inovação">
          <div class="card-body">
            <h5 class="card-title">Inovação Constante</h5>
            <p class="card-text">Estamos sempre atualizados com as novas tecnologias para trazer soluções criativas.</p>
          </div>
        </div>
      </div>

      <!-- COLUNA 3 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="https://picsum.photos/400/250?random=12" class="card-img-top" alt="Suporte">
          <div class="card-body">
            <h5 class="card-title">Suporte Personalizado</h5>
            <p class="card-text">Nossa equipe oferece atendimento dedicado e suporte completo aos clientes.</p>
          </div>
        </div>
      </div>
    </div>
  </section>