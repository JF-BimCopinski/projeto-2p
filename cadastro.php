<?php include 'inc/header.inc.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="mb-4">Finalizar Pedido</h2>
    
    <form action="processar_pedido.php" method="POST">
        <!-- Seção de Cadastro / Dados do Cliente -->
        <h4 class="mb-3">1. Seus Dados</h4>
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-6">
                <label for="senha" class="form-label">Senha (para cadastro)</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
        </div>

        <!-- Seção de Opção de Entrega -->
        <h4 class="mb-3">2. Opção de Entrega</h4>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_entrega" id="retirada" value="retirada" checked onclick="toggleEndereco(false)">
                <label class="form-check-label" for="retirada">
                    Retirar os produtos pessoalmente (Loja Física)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_entrega" id="entrega" value="entrega" onclick="toggleEndereco(true)">
                <label class="form-check-label" for="entrega">
                    Pedir para entregar (Endereço abaixo)
                </label>
            </div>
        </div>

        <!-- Campos de Endereço (Ocultos por padrão via JS/CSS se retirar na loja) -->
        <div id="bloco-endereco" class="row g-3 mb-4" style="display: none;">
            <div class="col-md-8">
                <label for="rua" class="form-label">Rua e Número</label>
                <input type="text" class="form-control" id="rua" name="rua">
            </div>
            <div class="col-md-4">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep">
            </div>
        </div>

        <button type="submit" class="btn btn-success btn-lg">Confirmar Pedido</button>
    </form>
</div>

<!-- JavaScript Puro para manipular a exibição do endereço -->
<script>
    function toggleEndereco(mostrar) {
        const blocoEndereco = document.getElementById('bloco-endereco');
        if (mostrar) {
            blocoEndereco.style.display = 'flex';
            document.getElementById('rua').setAttribute('required', 'true');
        } else {
            blocoEndereco.style.display = 'none';
            document.getElementById('rua').removeAttribute('required');
        }
    }
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include 'inc/footer.inc.php'; ?>
