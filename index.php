<?php
    session_start();
    $_SESSION['page'] = "index.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>O tal</title>
</head>
<body>
    <main>
        <div class='links'>
            <a href="php/criarSorteio.php" class='otal'>Criar O "TAL"</a>
            <a href="destruir.php"> destruir sessao </a>
            <a href="sessao.php"> sessao </a>
        </div>
    </main>
</body>
</html>