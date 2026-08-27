<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM animais WHERE id = $id";
$resultado = mysqli_query($conexao, $sql );

$animais =mysqli_fetch_assoc($resultado);

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
        <h2>Editando o animal <?php echo $animais["nome"]?>!</h2>
        <form action="atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $animais["id"]?>">

            <label for="id">Id:</label>
            <input type="text" name="id" value="<?php echo $animais["id"]?>">
            <br>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $animais["nome"]?>">
            <br>
            <label for="especie">Especie:</label>
            <input type="text" name="especie" value="<?php echo $animais["especie"]?>">
            <br>
            <label for="raca">Raça:</label>
            <input type="text" name="raca" value="<?php echo $animais["raca"]?>">
            <br>
            <label for="idade">Idade:</label>
            <input type="number" name="idade" value="<?php echo $animais["idade"]?>">
            <br>
            <label for="cliente_id">Cliente ID:</label>
            <input type="number" name="cliente_id" value="<?php echo $animais["cliente_id"]?>">
            <br>
            
            <button type="submit">Atualizar</button>
        </form>

    </main>
    <footer>

    </footer>


</body>

</html>