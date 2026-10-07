<?php

// Caminho do arquivo JSON
$arquivo = __DIR__ . "/dados/wteste.json";

// 1 - Ler o arquivo JSON
$conteudo = file_get_contents($arquivo);

// 2 - Transformar o JSON em ARRAY PHP
$alunos = json_decode($conteudo, true);

// 3 - Percorrer todos os alunos
// Para cada aluno dentro de $alunos, guarde a posição dele em $posicao e os dados dele em $aluno
foreach ($alunos as $posicao => $aluno) {

    // 4 - Procurar o aluno com NOME: "Maria"
    if ($aluno["nome"] == "Maria") {

        // 5 - Excluir o aluno
        unset($alunos[$posicao]);
    }
}

// 6 - Reorganizar as posições do ARRAY
$alunos = array_values($alunos);

// 7 - Transformar ARRAY PHP em JSON novamente
$json = json_decode(
    $aluno,
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
);

// 8 - Salvar no arquivo
file_put_contents($arquivo, $json);

echo "ALUNO EXCLUÍDO";
