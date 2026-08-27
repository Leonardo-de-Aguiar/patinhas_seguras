<?php

include "../infra/conexao.php";

$id = $_GET["id"];

$sql = "SELECT * FROM animais WHERE id = ?";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);

mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);

$animais = mysqli_fetch_assoc($resultado);

mysqli_stmt_close($stmt);

?>

<!DOCTYPE html>
<html lang="pt-br">

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
        Editando o animal <?php echo htmlspecialchars($animais["nome"]); ?>!
    </h2>

    <form action="atualizar_animal.php" method="POST">

        <input 
            type="hidden" 
            name="id" 
            value="<?php echo $animais["id"]; ?>"
        >

        <label for="nome">Nome:</label>
        <input 
            type="text" 
            id="nome"
            name="nome" 
            value="<?php echo htmlspecialchars($animais["nome"]); ?>"
        >

        <br>

        <label for="especie">Espécie:</label>
        <input 
            type="text" 
            id="especie"
            name="especie" 
            value="<?php echo htmlspecialchars($animais["especie"]); ?>"
        >

        <br>

        <label for="raca">Raça:</label>
        <input 
            type="text" 
            id="raca"
            name="raca" 
            value="<?php echo htmlspecialchars($animais["raca"]); ?>"
        >

        <br>

        <label for="idade">Idade:</label>
        <input 
            type="number" 
            id="idade"
            name="idade" 
            value="<?php echo $animais["idade"]; ?>"
        >

        <br>

        <label for="cliente_id">Cliente ID:</label>
        <input 
            type="number" 
            id="cliente_id"
            name="cliente_id" 
            value="<?php echo $animais["cliente_id"]; ?>"
        >

        <br>

        <button type="submit">Atualizar</button>

    </form>

</main>

</body>
</html>