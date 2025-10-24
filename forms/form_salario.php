<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 9 - Cálculo de Salário</title>
        <link rel="stylesheet" href="att.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-3">
            <h1 class="text-success">Exercício 9</h1>
            <p>
                Faça um algoritmo que receba o número de horas trabalhadas 
                e o valor do salário mínimo. Calcule e mostre o salário a receber 
                seguindo as regras abaixo:
                <br>a. o valor da hora trabalhada vale a metade do salário mínimo;
                <br>b. o salário bruto equivale ao número de horas trabalhadas multiplicado
                pelo valor da hora trabalhada;
                <br>c. o imposto equivale a 3% do salário bruto;
                <br>d. o salário a receber equivale ao salário bruto menos o imposto.
            </p>
            <form action="salario.php" method="post">
                <div class="form-floating mb-3 mt-3">
                    <input type="number" class="form-control" placeholder="Digite a quantidade de horas trabalhadas" name="t" id="t">
                    <label for="t">Horas trabalhadas (h)</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="number" class="form-control" placeholder="Digite o valor do salário mínimo" name="m" id="m" step="0.01">
                    <label for="m">Salário Mínimo</label>
                </div>
                <div class="d-grid">
                    <input type="submit" value="Calcular" class="btn btn-dark btn-block">
                </div>
            </form>
        </div>
    </body>
</html>