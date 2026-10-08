<?php

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
    "prioridade" => $prioridade
]


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
            <a href="index.php">INÍCIO</a>
        </div>
    </header>
    <h1>Bem vindo ao suporte de T.I !</h1>
    <p>Sistema para registrar chamados relacionados a área de T.I</p>

    <label for=""></label>



</body>

</html>