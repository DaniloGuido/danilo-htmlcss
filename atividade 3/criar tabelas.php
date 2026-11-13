<?php 

require_once "conexao2.php" ; 


// ~~~~~~~~~~~~~~~~~~~~~~~~~ Tabela Categorias 

$sql = "CREATE TABLE IF NOT EXISTS categorias (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL ) " ;

$pdo->exec($sql);


// ~~~~~~~~~~~~~~~~~~~~~~~~~ Tabela Produtos

$sql = "CREATE TABLE IF NOT EXISTS produtos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    categoria_id INT,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT NOT NULL,
    estoque_minimo INT NOT NULL,
    
    FOREIGN KEY (categoria_id)
        REFERENCES categorias(id) ) " ;

$pdo->exec($sql);


// ~~~~~~~~~~~~~~~~~~~~~~~~~ Tabela Vendas 

$sql = "CREATE TABLE IF NOT EXISTS vendas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produto_id INT,
    quantidade INT NOT NULL,
    valor_total DECIMAL(10,2) NOT NULL,
    data_venda DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    
    FOREIGN KEY (produto_id)
        REFERENCES produtos(id) ) " ;

$pdo->exec($sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>