<?php

include "../infra/conexao.php";

$id = $_POST["id"];

$sql = "DELETE FROM clientes WHERE id = ?";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);

mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);

header("Location: ../index.php");
exit;

?>