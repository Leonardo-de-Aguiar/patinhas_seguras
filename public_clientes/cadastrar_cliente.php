<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$numero_telefone = $_POST["numero_telefone"];

$sql = "INSERT INTO clientes (nome, numero_telefone) 
        VALUES (?, ?)";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($stmt, "ss", $nome, $numero_telefone);

mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);

header("Location: ../index.php");
exit;

?>