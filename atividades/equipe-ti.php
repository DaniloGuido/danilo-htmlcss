<?php

// Lê os projetos salvos no arquivo JSON
$conteudoJson = file_get_contents(
    dirname(__DIR__) . "/dados/projetos.json"
);

// Transforma o JSON em um array PHP
$projetos = json_decode($conteudoJson, true);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Área da equipe de T.I.</title>
</head>

<body>

    <!-- Barra de navegação -->
    <nav>
        <a href="software-house.php">Enviar projeto</a>
        <a href="equipe-ti.php">Área da equipe de T.I.</a>
    </nav>

    <h1>Projetos recebidos</h1>

    <!-- Verifica se existem projetos cadastrados -->
    <?php if (empty($projetos)) { ?>

        <p>Nenhum projeto foi enviado ainda.</p>

    <?php } else { ?>

        <!-- Percorre todos os projetos salvos no JSON -->
        <?php foreach ($projetos as $projeto) { ?>

            <h2>
                <?= htmlspecialchars($projeto["nome_projeto"]) ?>
            </h2>

            <p>
                <strong>Cliente:</strong>
                <?= htmlspecialchars($projeto["nome"]) ?>
            </p>

            <p>
                <strong>E-mail:</strong>
                <?= htmlspecialchars($projeto["email"]) ?>
            </p>

            <p>
                <strong>Descrição:</strong>
                <?= nl2br(htmlspecialchars($projeto["descricao"])) ?>
            </p>

            <p>
                <strong>Status:</strong>
                <?= htmlspecialchars($projeto["status"]) ?>
            </p>

            <form method="POST">
                <label class="resposta">Resposta final: </label>
                <select class="resposta_in" name="resposta">
                    <option>APROVAR</option>
                    <option>REPROVAR</option>
                </select>
            </form> 

            <hr>

        <?php } ?>

    <?php } ?>

</body>
</html>