
  <!-- SEÇÃO DE INTRODUÇÃO -->
  <section class="container text-center my-5"> <!-- container = centraliza / text-center = centraliza texto / my-5 = margens verticais -->
    <h2 class="fw-bold mb-3">Nossos Serviços</h2> <!-- fw-bold = negrito / mb-3 = margem inferior -->
    <p class="lead text-muted">Conheça as soluções que oferecemos para impulsionar o seu negócio.</p> <!-- lead = texto grande / text-muted = cor de texto mais suave -->
  </section>

  <!-- SEÇÃO DE CARDS -->
  <section class="container my-5"> <!-- my-5 = margem superior e inferior -->
    <div class="row g-4"> <!-- row = linha do grid / g-4 = espaçamento entre colunas -->

      <!-- Card Desenvolvimento -->
      <div class="col-md-3 col-sm-6"> <!-- col-md-3 = 4 colunas médias / col-sm-6 = 2 colunas pequenas -->
        <div class="card h-100 shadow-sm border-0"> <!-- card = componente visual do Bootstrap / h-100 = altura total / shadow-sm = sombra leve / border-0 = sem borda -->
          <img src="https://picsum.photos/400/250?random=40" class="card-img-top" alt="Desenvolvimento"> <!-- card-img-top = imagem na parte superior -->
          <div class="card-body text-center"> <!-- card-body = corpo do card / text-center = centraliza texto -->
            <h5 class="card-title">Desenvolvimento</h5>
            <p class="card-text">Soluções completas em sistemas web, aplicativos e automações.</p>
            <a href="#" class="btn btn-primary">Saiba mais</a> <!-- btn = botão / btn-primary = cor padrão azul -->
          </div>
        </div>
      </div>

      <!-- Card Design -->
      <div class="col-md-3 col-sm-6">
        <div class="card h-100 shadow-sm border-0">
          <img src="https://picsum.photos/400/250?random=41" class="card-img-top" alt="Design">
          <div class="card-body text-center">
            <h5 class="card-title">Design</h5>
            <p class="card-text">Criação visual e identidade digital moderna e atrativa.</p>
            <a href="#" class="btn btn-primary">Saiba mais</a>
          </div>
        </div>
      </div>

      <!-- Card Marketing -->
      <div class="col-md-3 col-sm-6">
        <div class="card h-100 shadow-sm border-0">
          <img src="https://picsum.photos/400/250?random=42" class="card-img-top" alt="Marketing">
          <div class="card-body text-center">
            <h5 class="card-title">Marketing</h5>
            <p class="card-text">Campanhas criativas e estratégias digitais eficientes.</p>
            <a href="#" class="btn btn-primary">Saiba mais</a>
          </div>
        </div>
      </div>

      <!-- Card Suporte -->
      <div class="col-md-3 col-sm-6">
        <div class="card h-100 shadow-sm border-0">
          <img src="https://picsum.photos/400/250?random=43" class="card-img-top" alt="Suporte">
          <div class="card-body text-center">
            <h5 class="card-title">Suporte</h5>
            <p class="card-text">Atendimento técnico e manutenção contínua.</p>
            <a href="#" class="btn btn-primary">Saiba mais</a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- SEÇÃO DESTAQUE -->
  <section class="bg-light py-5 mt-5"> <!-- bg-light = fundo claro / py-5 = padding vertical / mt-5 = margem superior -->
    <div class="container text-center">
      <h3 class="fw-bold mb-3">Por que escolher nossos serviços?</h3>
      <p class="text-muted mb-4">Oferecemos soluções personalizadas com foco em inovação e resultados.</p>
      <div class="row g-4"> <!-- row = linha / g-4 = espaçamento entre colunas -->
        <div class="col-md-4">
          <div class="p-4 border rounded h-100"> <!-- p-4 = padding / border = borda padrão / rounded = cantos arredondados / h-100 = altura total -->
            <h5 class="fw-semibold">Experiência</h5> <!-- fw-semibold = fonte com peso médio -->
            <p class="text-muted">Mais de 10 anos de atuação no mercado tecnológico.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 border rounded h-100">
            <h5 class="fw-semibold">Inovação</h5>
            <p class="text-muted">Usamos as tecnologias mais recentes para otimizar resultados.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 border rounded h-100">
            <h5 class="fw-semibold">Parceria</h5>
            <p class="text-muted">Trabalhamos lado a lado com nossos clientes em cada etapa.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEÇÃO DE DEPOIMENTOS -->
  <section class="container my-5">
    <h3 class="text-center fw-bold mb-4">O que nossos clientes dizem</h3>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card border-0 shadow-sm p-3 h-100"> <!-- border-0 = remove borda / p-3 = padding interno / h-100 = altura total -->
          <p class="fst-italic">“Serviço excelente, atendimento rápido e soluções inovadoras!”</p> <!-- fst-italic = fonte itálica -->
          <h6 class="fw-semibold mb-0">Ana Silva</h6>
          <small class="text-muted">Empresária</small>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm p-3 h-100">
          <p class="fst-italic">“Equipe muito profissional e atenciosa. Recomendo!”</p>
          <h6 class="fw-semibold mb-0">Carlos Souza</h6>
          <small class="text-muted">Gestor de Projetos</small>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm p-3 h-100">
          <p class="fst-italic">“Os resultados superaram nossas expectativas.”</p>
          <h6 class="fw-semibold mb-0">Mariana Oliveira</h6>
          <small class="text-muted">Diretora de Marketing</small>
        </div>
      </div>
    </div>
  </section>