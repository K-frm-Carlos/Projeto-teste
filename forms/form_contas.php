<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 14 - Pagamento de Contas</title>
        <link rel="stylesheet" href="att.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-3">
            <h1 class="text-success">Exercício 14</h1>
            <p>
                João recebeu seu salário e precisa pagar duas contas que estão atrasadas.
                Como as contas estão atrasadas, João terá que pagar multa de 2% sobre cada
                conta. Faça um algoritmo que calcule e mostre quanto restará do salário do 
                João.
            </p>
            <form action="contas.php" method="post">
                <div class="form-floating mb-3 mt-3">
                    <input type="number" class="form-control" placeholder="Digite o valor do salário recebido" name="s" id="s" step="0.01">
                    <label for="s">Salário</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="number" class="form-control" placeholder="Digite a conta 1" name="c1" id="c1" step="0.01">
                    <label for="c1">Conta 1</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="number" class="form-control" placeholder="Digite a conta 2" name="c2" id="c2" step="0.01">
                    <label for="c2">Conta 2</label>
                </div>
                <div class="d-grid">
                    <input type="submit" value="Calcular" class="btn btn-dark btn-block">
                </div>
            </form>
        </div>
    </body>
</html>