<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$numero_telefone = $_POST["numero_telefone"];

$sql = "UPDATE clientes SET id='$id',nome='$nome',numero_telefone='$numero_telefone' WHERE id = '$id'";

mysqli_query($conexao, $sql);
header("Location: ../index.php");