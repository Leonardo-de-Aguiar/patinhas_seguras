<?php

include "infra/conexao.php";
$clientes = mysqli_query($conexao, "SELECT * FROM clientes");

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
    <footer>

    </footer>


</body>

</html>