<?php

$p = $_POST['p'];
$pa = $p * 1.15;
$pe = $p * 0.8;

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 13 - Cálculo de Peso</title>
        <link rel="stylesheet" href="att.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-3">
            <h2>
                <?php echo "Caso perca 20% de seu peso, terá: $pe Kg"; ?>
                <?php echo "<br>" . "Caso ganhe 15% de seu peso, terá: $pa Kg"; ?>
            </h2>
            <div class="d-grid">
                <a href="forms/form_peso.php" class="btn btn-dark btn-block">Calcular novamente</a>
                <a href="index.php" class="btn btn-dark btn-block">Retornar à página inicial</a>
            </div>
        </div>
    </body>
</html>