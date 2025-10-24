<?php

$p = $_POST['p'];
$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$cs = ($c1 + $c2) * 5;
$pg = $p * 1000;
$r = $pg - $cs;
$rk = intdiv($r, 1000);
$rg = $r % 1000;

?>

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
            <h2>
                <?php echo "Restante da ração no saco: $rk Kg e $rg g" ?>
            </h2>
            <div class="d-grid">
                <a href="forms/form_racao.php" class="btn btn-dark btn-block">Calcular novamente</a>
                <a href="index.php" class="btn btn-dark btn-block">Retornar à página inicial</a>
            </div>
        </div>
    </body>
</html>