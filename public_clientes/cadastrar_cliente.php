<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$numero_telefone = $_POST["numero_telefone"];


$sql = "INSERT INTO clientes (id,nome,numero_telefone) VALUES ('$id','$nome','$numero_telefone')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>