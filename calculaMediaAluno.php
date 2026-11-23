<?php

include __DIR__ . '/includes/funcoesMedia.php';

$primeiraNota = $_POST['primeiraNota'];
$segundaNota = $_POST['segundaNota'];
$media = calcularMediaAluno($primeiraNota, $segundaNota);
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resultado da média</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main class="card">
        <h1>Resultado da média</h1>

        <?php mostrarDadosAluno($primeiraNota, $segundaNota, $media); ?>

        <a href="index.html">Cadastrar novas notas</a>
    </main>
</body>

</html>

