<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 6 - Cálculo de Idade</title>
        <link rel="stylesheet" href="att.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-3">
            <h1 class="text-success">Exercício 6</h1>
            <p>
                Criar um algoritmo que receba o ano de nascimento de uma
                pessoa e o ano atual, calcule e mostre: <br> - A idade desta pessoa hoje;
                <br> - A idade desta pessoa em 2017.
            </p>
            <form action="idade.php" method="post">
                <div class="form-floating mb-3 mt-3">
                    <input type="number" class="form-control" name="n" id="n" placeholder="Insira o ano de nascimento">
                    <label for="n">Ano de nascimento</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="number" class="form-control" name="a" id="a" placeholder="Insira ano atual">
                    <label for="a">Ano Atual</label>
                </div>
                <div class="d-grid">
                    <input type="submit" value="Calcular" class="btn btn-dark btn-block">
                </div>
            </form>
        </div>
    </body>
</html>