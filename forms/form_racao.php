<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 10 - Consumo de Ração</title>
        <link rel="stylesheet" href="att.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-3">
            <h1 class="text-success">Exercício 10</h1>
            <p>
                Pedro comprou um saco de ração com peso em quilos. Pedro possui dois gatos 
                para os quais fornece a quantidade de ração em gramas. Faça um algoritmo 
                que receba o peso do saco de ração e a quantidade de ração fornecida para 
                cada gato por dia. Calcule e mostre quanto restará de ração no saco 
                após cinco dias.
            </p>
            <form action="racao.php" method="post">
                <div class="form-floating mb-3 mt-3">
                    <input type="number" class="form-control" placeholder="Digite o peso do saco de ração" name="p" id="p">
                    <label for="p">Peso do Saco (kg)</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="number" class="form-control" placeholder="Digite a quantidade de ração que o primeiro gato consome" name="c1" id="c1" step="0.01">
                    <label for="c1">Consumo de Ração Gato 1 (g)</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="number" class="form-control" placeholder="Digite a quantidade de ração que o segundo gato consome" name="c2" id="c2" step="0.01">
                    <label for="c2">Consumo de Ração Gato 2 (g)</label>
                </div>
                <div class="d-grid">
                    <input type="submit" value="Calcular" class="btn btn-dark btn-block">
                </div>
            </form>
        </div>
    </body>
</html>