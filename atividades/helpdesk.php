<?php

require_once "helpdesk-func.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $setor = $_POST["setor"];
    $equipamento = $_POST["equipamento"];
    $descricao = $_POST["descricao"];
    $prioridade = $_POST["prioridade"];

    $NovoChamado = [
        "usuario" => $usuario,
        "setor" => $setor,
        "equipamento" => $equipamento,
        "descricao" => $descricao,
        "prioridade" => $prioridade,
    ];

    $arquivo = __DIR__ . "/../dados/helpdesk.json";

    $conteudoJson = file_get_contents($arquivo);

    $chamados = json_decode($conteudoJson, true);

    $chamados[] = $NovoChamado;

    $JsonAtualizado = json_encode(
        $chamados,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );

    file_put_contents($arquivo, $JsonAtualizado);


    $chamados = ler_chamados();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPORTE - T . I</title>
</head>

<body>
    <header>
        <div>
            <a href="../index.php">INÍCIO</a>
        </div>
    </header>
    <h1>Bem vindo ao suporte de T.I !</h1>
    <p>Sistema para registrar chamados relacionados a área de T.I</p>

    <form method="POST" action="">
        <label class="usuario">Usuário: </label>
        <input type="text" class="usuario_in" name="usuario">
        <br><br>

        <label class="setor">Setor: </label>
        <input type="text" class="setor_in" name="setor">
        <br><br>

        <label class="equipamento">Equipamento: </label>
        <input type="text" class="equipamento_in" name="equipamento">
        <br><br>

        <label class="descricao">Descreva o problema: </label>
        <br>
        <textarea name="descricao" rows="5" cols="30"></textarea>
        <br><br>

        <label class="prioridade">Nível de prioridade: </label>
        <select class="prioridade_in" name="prioridade">
            <option>Baixa</option>
            <option>Média</option>
            <option>Alta</option>
        </select>
        <br><br>

        <button type="submit">ENVIAR</button>
    </form>

</body>

</html>