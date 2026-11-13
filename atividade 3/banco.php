<?php 

require_once "../conexao.php" ; 


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



$sql = "INSERT INTO categorias (nome) VALUES 
    ('Computadores'),
    ('Periféricos'),
    ('Armazenamento'),
    ('Componentes'),
    ('Monitor') " ;

$stmt = $pdo->prepare($sql);

    $stmt->execute();


$sql = "INSERT INTO produtos (nome, categoria_id, preco, quantidade, estoque_minimo)
        VALUES 
        ('Notebook Dell', 1, 3500.00, 10, 3),
        ('Computador Gamer', 1, 5500.00, 5, 2),
        ('Teclado Mecânico', 2, 150.00, 20, 5),
        ('Mouse Gamer', 2, 90.00, 15, 5),
        ('Monitor LG 24', 2, 850.00, 8, 2),
        ('SSD 480GB', 3, 250.00, 12, 3),
        ('HD 1TB', 3, 300.00, 10, 3),
        ('Memória RAM 8GB', 4, 180.00, 2, 5),
        ('Placa de Vídeo RTX', 4, 2800.00, 4, 2),
        ('Webcam Full HD', 5, 120.00, 0, 3);"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>