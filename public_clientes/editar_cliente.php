<?php

include "../infra/conexao.php";

$id = $_GET["id"];

$sql = "SELECT * FROM clientes WHERE id = ?";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);

mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);

$clientes = mysqli_fetch_assoc($resultado);

mysqli_stmt_close($stmt);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - AUmigos</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>

<header>
    <h1>CRUD - AUmigos</h1>
</header>

<main>

    <h2>
        Editando o cliente <?= htmlspecialchars($clientes["nome"]) ?>!
    </h2>

    <form action="atualizar.php" method="POST">

        <input 
            type="hidden" 
            name="id" 
            value="<?= htmlspecialchars($clientes["id"]) ?>"
        >

        <label for="nome">Nome:</label>

        <input 
            type="text" 
            id="nome"
            name="nome" 
            value="<?= htmlspecialchars($clientes["nome"]) ?>"
        >

        <br>

        <label for="numero_telefone">Número de Telefone:</label>

        <input 
            type="tel" 
            id="numero_telefone"
            name="numero_telefone" 
            value="<?= htmlspecialchars($clientes["numero_telefone"]) ?>"
        >

        <br>

        <button type="submit">Atualizar</button>

    </form>

</main>

<footer>
</footer>

</body>
</html>