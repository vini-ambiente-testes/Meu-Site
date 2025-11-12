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

  <!-- MODAL (POPUP) -->
  <div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
    <!-- modal fade: janela com efeito de transição -->
    <div class="modal-dialog modal-dialog-centered"> <!-- modal-dialog-centered: centraliza -->
      <div class="modal-content"> <!-- Estrutura do modal -->
        <div class="modal-header bg-primary text-white"> <!-- Cabeçalho azul com texto branco -->
          <h5 class="modal-title" id="popupModalLabel">Bem-vindo!</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Obrigado por visitar o <strong>Meu Site</strong>! Aqui você encontrará serviços de alta qualidade, equipe especializada e soluções sob medida para o seu negócio.</p>
        </div>
        <div class="modal-footer"> <!-- Rodapé do modal -->
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <a href="sobre.html" class="btn btn-primary">Ir para Sobre</a>
        </div>
      </div>
    </div>
  </div>