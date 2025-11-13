
  <!-- SEÇÃO PRINCIPAL DE CONTATO -->
  <section class="container my-5">
    <div class="row g-5"><!-- g-5 = espaçamento entre colunas -->

      <!-- FORMULÁRIO -->
      <div class="col-md-7">
        <h2 class="fw-bold mb-4 text-center">Fale Conosco</h2>
        <form>
          <!-- Campo nome -->
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
          </div>
          <!-- Campo e-mail -->
          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="exemplo@email.com">
          </div>
          <!-- Campo assunto -->
          <div class="mb-3">
            <label for="assunto" class="form-label">Assunto</label>
            <input type="text" class="form-control" id="assunto" placeholder="Motivo do contato">
          </div>
          <!-- Campo mensagem -->
          <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea class="form-control" id="mensagem" rows="5" placeholder="Digite sua mensagem"></textarea>
          </div>
          <!-- Botão de envio -->
          <button type="submit" class="btn btn-primary w-100">Enviar Mensagem</button>
        </form>
      </div>

      <!-- INFORMAÇÕES DE CONTATO E REDES SOCIAIS -->
      <div class="col-md-5">
        <h2 class="fw-bold mb-4 text-center">Entre em Contato</h2>
        <p class="text-muted text-center mb-4">
          Tire suas dúvidas ou fale conosco pelas redes sociais abaixo.
        </p>

        <!-- Lista de informações -->
        <ul class="list-group list-group-flush mb-4">
          <li class="list-group-item"><i class="bi bi-telephone-fill me-2"></i><strong>Telefone:</strong> (44) 99999-9999</li>
          <li class="list-group-item"><i class="bi bi-envelope-fill me-2"></i><strong>E-mail:</strong> contato@meusite.com</li>
          <li class="list-group-item"><i class="bi bi-geo-alt-fill me-2"></i><strong>Endereço:</strong> Rua Exemplo, 123 - Umuarama/PR</li>
        </ul>

        <!-- Botões das redes sociais -->
        <div class="text-center">
          <h5 class="fw-semibold mb-3">Siga nossas redes</h5>
          <a href="#" class="btn btn-outline-primary me-2 mb-2"><i class="bi bi-facebook me-1"></i> Facebook</a>
          <a href="#" class="btn btn-outline-danger me-2 mb-2"><i class="bi bi-instagram me-1"></i> Instagram</a>
          <a href="https://wa.me/5544999999999" class="btn btn-success mb-2"><i class="bi bi-whatsapp me-1"></i> WhatsApp</a>
        </div>
      </div>
    </div>
  </section>

  <!-- MAPA GOOGLE -->
  <section class="container my-5">
    <h3 class="fw-bold text-center mb-4">Nossa Localização</h3>
    <div class="ratio ratio-16x9">
      <!-- iframe incorporado do Google Maps -->
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.684891285671!2d-53.30451752500483!3d-23.508693078838207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ef1b02a99b1f59%3A0x9f27d9a83a4f4b6f!2sSENAI%20Umuarama!5e0!3m2!1spt-BR!2sbr!4v1716744600000!5m2!1spt-BR!2sbr" 
        style="border:0;" 
        allowfullscreen 
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </section>