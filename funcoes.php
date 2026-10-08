<?php

$nomeEscola = "SENAI";

// FUNÇÃO 1 - EXIBIR MENSAGEM 

function saudacao()
{
    return "Bem vindo ao sistema!";
}

// FUNÇÃO 2 - RECEBER UM NOME

function cumprimentar($nome)
{
    return "Olá, " . $nome . "!";
}

// FUNÇÃO 3 - SOMAR DOIS NUMEROS

function somar($numero1, $numero2)
{
    $resultado = $numero1 + $numero2;

    return $resultado;
}

function calcularmedia($nota1, $nota2)
{
    $media = ($nota1 + $nota2) / 2;

    return $media;
}

function verificarStatus($media)
{
    //MÉDIA É 7

    if($media >= 7) {
        return "Aprovado!!";
    } else {
        return "Reprovado!!";
    }
}
