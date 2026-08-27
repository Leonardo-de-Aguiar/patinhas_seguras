<?php

include "infra/conexao.php";
$clientes = mysqli_query($conexao, "SELECT * FROM clientes");
$animais = mysqli_query($conexao, "SELECT * FROM animais");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUmigos</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>AUmigos</h1>
    </header>
    <main>
        <h2>Adicione um novo cliente!</h2>
        <form action="public_clientes/cadastrar_cliente.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
            <br>
            <label for="numero_telefone">Número de Telefone:</label>
            <input type="text" name="numero_telefone">
            <br>
            <button type="submit">Cadastrar</button>
        </form>
        <div>
            <h2>Clientes Cadastrados</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Número de Telefone</th>
                    <th>Ações</th>
                </tr>
                <?php while ($cliente = mysqli_fetch_assoc($clientes)) { ?>
                    <tr>
                        <td><?php echo $cliente["id"] ?></td>
                        <td><?php echo $cliente["nome"] ?></td>
                        <td><?php echo $cliente["numero_telefone"] ?></td>
                        <td>
                            <a href="public_clientes/editar_cliente.php?id=<?php echo $cliente["id"] ?>">Editar</a>
                            <a href="public_clientes/excluir_cliente.php?id=<?php echo $cliente["id"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

    </main>




     <h2>Adicione um novo animal!</h2>

<form action="public_animais/cadastrar_animal.php" method="POST">

    <label for="nome">Nome do animal:</label>
    <input type="text" name="nome" id="nome">

    <br>

    <label for="especie">Espécie:</label>
    <input type="text" name="especie" id="especie">

    <br>

    <label for="raca">Raça:</label>
    <input type="text" name="raca" id="raca">

    <br>

    <label for="idade">Idade:</label>
    <input type="number" name="idade" id="idade">

    <br>

    <label for="cliente_id">ID do cliente:</label>
    <input type="number" name="cliente_id" id="cliente_id">

    <br>

    <button type="submit">Cadastrar Animal</button>

</form>


<h2>Animais Cadastrados</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Espécie</th>
        <th>Raça</th>
        <th>Idade</th>
        <th>Cliente ID</th>
        <th>Ações</th>
    </tr>

    <?php while ($animal = mysqli_fetch_assoc($animais)) { ?>

        <tr>
            <td><?php echo $animal["id"]; ?></td>
            <td><?php echo $animal["nome"]; ?></td>
            <td><?php echo $animal["especie"]; ?></td>
            <td><?php echo $animal["raca"]; ?></td>
            <td><?php echo $animal["idade"]; ?></td>
            <td><?php echo $animal["cliente_id"]; ?></td>

            <td>
                <a href="public_animais/editar_animal.php?id=<?php echo $animal["id"]; ?>">
                    Editar
                </a>

                <a href="public_animais/excluir_animal.php?id=<?php echo $animal["id"]; ?>">
                    Excluir
                </a>
            </td>
        </tr>

    <?php } ?>

</table>



    </main>
    <footer>

    </footer>


</body>

</html>