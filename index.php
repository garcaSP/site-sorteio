<?php
    session_start();
    $_SESSION['page'] = "index.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="php/criarSorteio.php">Criar O "TAL"</a>
    <a href="destruir.php"> destruir sessao </a>
    <a href="sessao.php"> sessao </a>
</body>
</html>