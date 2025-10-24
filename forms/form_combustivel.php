<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 3 - Consumo de Combustível</title>
        <link rel="stylesheet" href="att.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-3">
            <h1 class="text-success">Exercício 3</h1>
            <p>
                Criar um algoritmo que calcule o consumo médio de um 
                automóvel, dado que são conhecidos a distância total percorrida e o 
                volume de combustível consumido para percorrê-la.
            </p>
            <form action="combustivel.php" method="post">
                <div class="form-floating mb-3 mt-3">
                    <input type="number" class="form-control" placeholder="Digite a distância percorrida em quilómetros" name="d" id="d">
                    <label for="d">Distância Percorrida (Km)</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="number" class="form-control" placeholder="Digite o volume consumido em litros" name="v" id="v">
                    <label for="v">Combustível Consumido (l)</label>
                </div>
                <div class="d-grid">
                    <input type="submit" value="Calcular" class="btn btn-dark btn-block">
                </div>
            </form>
        </div>
    </body>
</html>