<?php

$nome = "";
$idade = "";
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    if ($idade >= 18) {
        $resultado = "$nome, você é maior de idade.";
    } else {
        $resultado = "$nome, você é menor de idade.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Verificador de idade</title>

    <link rel="stylesheet" href="verificador.css">
</head>

<body>

    <!-- MENU -->

    <header>

        <div class="logo">
            <h2>Danilo <span>Guido</span></h2>
        </div>

        <nav>
            <a href="index.php">Início</a>
            <a href="index.php#projetos">Projetos</a>
        </nav>

    </header>


    <!-- CONTEÚDO PRINCIPAL -->

    <main>

        <section class="verificador">

            <div class="titulo-secao">

                <p>Projeto 01</p>

                <h1>Verificador de idade</h1>

            </div>


            <div class="card-verificador">

                <h2>Digite seus dados</h2>

                <p class="descricao">
                    Informe seu nome e sua idade para descobrir se você é maior ou menor de idade.
                </p>


                <form method="POST">

                    <div class="campo">

                        <label for="nome">Nome:</label>

                        <input
                            type="text"
                            id="nome"
                            name="nome"
                            placeholder="Digite seu nome"
                            value="<?= htmlspecialchars($nome) ?>"
                            required
                        >

                    </div>


                    <div class="campo">

                        <label for="idade">Idade:</label>

                        <input
                            type="number"
                            id="idade"
                            name="idade"
                            placeholder="Digite sua idade"
                            value="<?= htmlspecialchars($idade) ?>"
                            min="0"
                            required
                        >

                    </div>


                    <button type="submit" class="botao">
                        Verificar idade
                    </button>

                </form>


                <?php if ($resultado != ""): ?>

                    <div class="resultado">

                        <p>Resultado</p>

                        <h3><?= htmlspecialchars($resultado) ?></h3>

                    </div>

                <?php endif; ?>


            </div>

        </section>

    </main>


    <!-- RODAPÉ -->

    <footer class="footer">

        <p>
            Desenvolvido por <a href="https://danilo755.devlook.xyz">Danilo Guido</a>
        </p>

        <p>
            PHP + HTML + CSS
        </p>

    </footer>

</body>

</html>
