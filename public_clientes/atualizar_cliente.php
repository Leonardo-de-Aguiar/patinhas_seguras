<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$numero_telefone = $_POST["numero_telefone"];

$sql = "UPDATE clientes 
        SET nome = ?, numero_telefone = ?
        WHERE id = ?";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($stmt, "ssi", $nome, $numero_telefone, $id);

mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);

header("Location: ../index.php");
exit;

?>