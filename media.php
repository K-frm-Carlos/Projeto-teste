<?php

$n1 = $_POST['n1'];
$n3 = $_POST['n3'];
$n2 = $_POST['n2'];
$m = ($n1 * 0.2) + ($n2 * 0.3) + ($n3 * 0.5);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 11 - Cálculo de Média Ponderada</title>
        <link rel="stylesheet" href="att.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-3">
            <h2>
                <?php echo "Média: ", number_format($m, 1); ?>
            </h2>
            <div class="d-grid">
                <a href="forms/form_media.php" class="btn btn-dark btn-block">Calcular novamente</a>
                <a href="index.php" class="btn btn-dark btn-block">Retornar à página inicial</a>
            </div>
        </div>
    </body>
</html>