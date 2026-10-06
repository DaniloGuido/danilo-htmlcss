<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $categoria = $_POST["categoria"];
    $marca = $_POST["marca"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];


    // Recebe fabricante e páis do fabricante
    $nome_fab = $_POST["nome do fabricante"];
    $pais_fab = $_POST["país do fabricante"];

    $novoProduto = [
        "nome" => $nome,
        "categoria" => $categoria,
        "marca" => $marca,
        "preco" => $preco,
        "quantidade" => $quantidade,

        "p_info" => [
            "n_fabricante" => $nome_fab,
            "p_fabricante" => $pais_fab,
        ]
    ];

    $conteudoJson = file_get_contents(__DIR__ . "/dados/produtos.json");

    $produtos = json_decode($conteudoJson, true);

    $produtos[] = $novoProduto;

    $jsonAtualizado = json_encode(
        $produtos,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );

    file_put_contents(__DIR__ . "/dados/produtos.json", $jsonAtualizado);
}

$conteudoJson = file_get_contents(__DIR__ . "/dados/produtos.json");

$produtos = json_decode($conteudoJson, true);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h1>CADASTRO DE PRODUTOS</h1>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" name = "nome" required>
        <br><br>
        <label>Categoria:</label>
        <input type="text" name = "categoria" required>
        <br><br>
        <label>Marca:</label>
        <input type="text" name = "marca" required>
        <br><br>
        <label>Preço:</label>
        <input type="number" name = "preco" required>
        <br><br>
        <label>Quantidade:</label>
        <input type="number" name = "quantidade" required>
        <br><br>
        <label>Nome do fabricante:</label>
        <input type="text" name = "n_fabricante" required>
        <br><br>
        <label>País do fabricante:</label>
        <input type="text" name = "p_fabricante" required>
        <br><br>

        <button type="submit">Enviar</button>

    </form>

    <h1>PRODUTOS CADASTRADOS</h1>

    <?php foreach ($produtos as $produto) { ?> 
    
    <h2> <?= $produto["nome"] ?> </h2>
    <p> Marca: <?= $produto["marca"] ?> </p>

    

    
    
    
    
    
    
    
    
    <?php } ?>
</body>
</html>