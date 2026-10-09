<?php 

function ler_chamados() {
    $arquivo = __DIR__ . "/dados/helpdesk.json";
    
    $conteudo = file_get_contents($arquivo);

    return json_decode($conteudo, true);
}























?>