<?php

function calcularMediaAluno($primeiraNota, $segundaNota)
{
    return ($primeiraNota + $segundaNota) / 2;
}

function mostrarDadosAluno($primeiraNota, $segundaNota, $media)
{
    $situacao = ($media >= 6.0) ? 'Aprovado' : 'Reprovado';

    echo '<p><strong>Primeira nota:</strong> ' . number_format($primeiraNota, 2, ',', '.') . '</p>';
    echo '<p><strong>Segunda nota:</strong> ' . number_format($segundaNota, 2, ',', '.') . '</p>';
    echo '<p><strong>Média aritmética simples:</strong> ' . number_format($media, 2, ',', '.') . '</p>';
    echo '<p><strong>Situação:</strong> ' . $situacao . '</p>';
}

?>
