<?php include 'inc/header.inc.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formas de Pagamento</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="mb-4">3. Escolha a Forma de Pagamento</h2>

    <!-- Resumo rápido do pedido (pode vir via Sessão do PHP) -->
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Resumo do Pedido</h5>
            <p class="card-text mb-1">Tipo de Entrega: <strong id="resumo-entrega">Retirada na Loja</strong></p>
            <p class="card-text">Total a pagar: <strong class="text-success">R$ 150,00</strong></p>
        </div>
    </div>
    
    <form action="finalizar_pedido_db.php" method="POST">
        
        <!-- Opções de Pagamento -->
        <div class="mb-4">
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="forma_pagamento" id="pix" value="pix" checked onclick="togglePagamento('pix')">
                <label class="form-check-label" for="pix">
                    Pix (Aprovação imediata)
                </label>
            </div>
            
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="forma_pagamento" id="cartao" value="cartao" onclick="togglePagamento('cartao')">
                <label class="form-check-label" for="cartao">
                    Cartão de Crédito / Débito
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="forma_pagamento" id="dinheiro" value="dinheiro" onclick="togglePagamento('dinheiro')">
                <label class="form-check-label" for="dinheiro">
                    Dinheiro (Pagar no ato da retirada/entrega)
                </label>
            </div>
        </div>

        <!-- Bloco Dinâmico de Cartão (Oculto por padrão) -->
        <div id="dados-cartao" class="card p-3 mb-4 shadow-sm" style="display: none;">
            <h5 class="mb-3">Dados do Cartão</h5>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="numero_cartao" class="form-label">Número do Cartão</label>
                    <input type="text" class="form-control" id="numero_cartao" name="numero_cartao" placeholder="0000 0000 0000 0000">
                </div>
                <div class="col-md-4">
                    <label for="validade" class="form-label">Validade</label>
                    <input type="text" class="form-control" id="validade" name="validade" placeholder="MM/AA">
                </div>
                <div class="col-md-2">
                    <label for="cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cvv" name="cvv" placeholder="123">
                </div>
            </div>
        </div>

        <!-- Bloco Informativo do Pix -->
        <div id="dados-pix" class="alert alert-info mb-4">
            Ao finalizar, geraremos um QR Code Pix para você escanear na próxima tela.
        </div>

        <button type="submit" class="btn btn-primary btn-lg w-100">Finalizar Compra</button>
    </form>
</div>

<!-- JavaScript para alternar campos dependendo do pagamento -->
<script>
    function togglePagamento(metodo) {
        const blocoCartao = document.getElementById('dados-cartao');
        const blocoPix = document.getElementById('dados-pix');

        if (metodo === 'cartao') {
            blocoCartao.style.display = 'block';
            blocoPix.style.display = 'none';
        } else if (metodo === 'pix') {
            blocoCartao.style.display = 'none';
            blocoPix.style.display = 'block';
        } else {
            blocoCartao.style.display = 'none';
            blocoPix.style.display = 'none';
        }
    }
</script>

<?php include 'inc/footer.inc.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
