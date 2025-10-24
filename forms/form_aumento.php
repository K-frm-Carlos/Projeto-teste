<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 5 - Aumento de Salário</title>
        <link rel="stylesheet" href="att.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-3">
            <h1 class="text-success">Exercício 5</h1>
            <p>
                Criar um algoritmo que receba o salário de um funcionário 
                e o percentual de aumento, calcule e mostre o valor do aumento e o novo salário.
            </p>
            <form action="aumento.php" method="post">
                <div class="form-floating mb-3 mt-3">
                    <input type="number" class="form-control" name="s" id="s" placeholder="Insira o valor do salário atual" step="0.01">
                    <label for="s">Salário Atual</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="number" class="form-control" name="t" id="t" placeholder="Insira o valor da taxa de aumento">
                    <label for="t">Taxa de Aumento (%)</label>
                </div>
                <div class="d-grid">
                    <input type="submit" value="Calcular" class="btn btn-dark btn-block">
                </div>
            </form>
        </div>
    </body>
</html>