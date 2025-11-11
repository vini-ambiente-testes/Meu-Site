<?php  include("includes/head.php"); ?>

<body>
    <div class="bg-light">
        <div class="container mt-5">
            <div class="card shadow p-4">
                <h3 class="text-center mb-4">Formulário de Contato</h3>
                <form action="enviar.php" method="POST">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="nome" id="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensagem" class="form-label">Mensagem:</label>
                        <textarea class="form-control" name="mensagem" id="mensagem" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>

<?php  include("includes/footer.php"); ?>