<!-- ===================== SEÇÃO HERO (JUMBOTRON) ===================== -->
  <section class="bg-light py-5 text-center">
    <div class="container">
      <h1 class="display-5 fw-bold">Quem Somos</h1>
      <p class="lead">Somos uma empresa comprometida com inovação, qualidade e o sucesso de nossos clientes.</p>
      <a href="#historia" class="btn btn-primary btn-lg mt-3">Conheça nossa história</a>
    </div>
  </section>
    

  <!-- ===================== SEÇÃO HISTÓRIA ===================== -->
  <section id="historia">
    <div class="container my-5">
      <div class="row align-items-center">
        <!-- Imagem -->
        <div class="col-md-6">
          <img src="https://picsum.photos/600/400?random=45" class="img-fluid rounded shadow-sm" alt="Nossa história">
        </div>
        <!-- Texto -->
        <div class="col-md-6">
          <h2 class="fw-bold mb-3">Nossa História</h2>
          <p>
            Fundada em 2010, nossa empresa nasceu com o propósito de oferecer soluções criativas e tecnológicas.
            Ao longo dos anos, conquistamos reconhecimento por entregar projetos sob medida, sempre alinhados às
            necessidades de nossos clientes.
          </p>
          <p>
            Hoje, atuamos em diversas áreas, combinando inovação, tecnologia e experiência para gerar resultados reais.
          </p>
          <a href="#valores" class="btn btn-outline-dark mt-3">Nossos Valores</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== SEÇÃO VALORES (CARDS) ===================== -->
  <section id="valores" class="bg-body-tertiary py-5">
    <div class="container">
      <h2 class="text-center mb-5">Nossos Valores</h2>
      <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="card h-100 shadow-sm text-center">
            <div class="card-body">
              <h5 class="card-title text-primary">Inovação</h5>
              <p class="card-text">Buscamos constantemente novas ideias e soluções para transformar desafios em
                oportunidades.</p>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="card h-100 shadow-sm text-center">
            <div class="card-body">
              <h5 class="card-title text-success">Comprometimento</h5>
              <p class="card-text">Assumimos cada projeto com responsabilidade, transparência e foco em resultados
                duradouros.</p>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="card h-100 shadow-sm text-center">
            <div class="card-body">
              <h5 class="card-title text-danger">Excelência</h5>
              <p class="card-text">Trabalhamos com qualidade e atenção aos detalhes, garantindo satisfação total dos
                nossos clientes.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===================== SEÇÃO HABILIDADES (PROGRESS BARS) ===================== -->
  <section class="container my-5">
    <h2 class="text-center mb-4">Nossas Habilidades</h2>
    <p class="text-center mb-5">Confira algumas das áreas em que mais nos destacamos:</p>

    <div class="mb-3">
      <h6>Desenvolvimento Web</h6>
      <div class="progress">
        <div class="progress-bar bg-primary" style="width: 90%;">90%</div>
      </div>
    </div>

    <div class="mb-3">
      <h6>Design e UX</h6>
      <div class="progress">
        <div class="progress-bar bg-success" style="width: 85%;">85%</div>
      </div>
    </div>

    <div class="mb-3">
      <h6>Marketing Digital</h6>
      <div class="progress">
        <div class="progress-bar bg-warning text-dark" style="width: 80%;">80%</div>
      </div>
    </div>

    <div class="mb-3">
      <h6>Suporte e Atendimento</h6>
      <div class="progress">
        <div class="progress-bar bg-danger" style="width: 95%;">95%</div>
      </div>
    </div>
  </section>

  <!-- ===================== SEÇÃO FAQ (ACCORDION) ===================== -->
  <section class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-5">Perguntas Frequentes</h2>
      <div class="accordion" id="faqAccordion">

        <!-- Pergunta 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
              Como posso contratar seus serviços?
            </button>
          </h2>
          <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Você pode entrar em contato pelo formulário da página <a href="contato.html">Contato</a> ou enviar um
              e-mail diretamente.
            </div>
          </div>
        </div>

        <!-- Pergunta 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
              Quais são as áreas de atuação?
            </button>
          </h2>
          <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Atuamos em desenvolvimento de sistemas, design, marketing digital e suporte técnico especializado.
            </div>
          </div>
        </div>

        <!-- Pergunta 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
              Oferecem suporte pós-projeto?
            </button>
          </h2>
          <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Sim! Oferecemos suporte contínuo e manutenção conforme a necessidade de cada cliente.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>