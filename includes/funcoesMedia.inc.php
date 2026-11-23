<?php

function calcularMediaAluno($primeiraNota, $segundaNota)
{
    $somaDasNotas = $primeiraNota + $segundaNota;
    $media = $somaDasNotas / 2;

    return $media;
}

function mostrarDadosAluno($primeiraNota, $segundaNota, $media)
{
    if ($media >= 6.0) {
        $situacao = 'Aprovado';
    } else {
        $situacao = 'Reprovado';
    }

    echo '<p><strong>Primeira nota:</strong> ' . number_format($primeiraNota, 2, ',', '.') . '</p>';
    echo '<p><strong>Segunda nota:</strong> ' . number_format($segundaNota, 2, ',', '.') . '</p>';
    echo '<p><strong>Média aritmética simples:</strong> ' . number_format($media, 2, ',', '.') . '</p>';
    echo '<p><strong>Situação:</strong> ' . $situacao . '</p>';
}
