<?php 
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $resultado = "";

    if($idade >= 18) {
        $resultado = "Você é maior de idade";
    } else { 
        $resultado = "Você é menor de idade";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="index.php">Início</a>
    </nav>
    <h1>Verficicação de idade</h1>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" class="nome" id="nome" name="nome">

        <label>Idade:</label>
        <input type="numero" class="idade" id="idade" name="idade">

        <button type="submit">Enviar</button>
    </form>
    <h2> <?= $resultado ?> </h2>
</body>
</html>
