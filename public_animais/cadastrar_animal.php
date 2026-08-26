<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$especie = $_POST["especie"];
$raca = $_POST["raca"];
$idade = $_POST["idade"];
$cliente_id = $_POST["cliente_id"];



$sql = "INSERT INTO animais (id,nome,especie,raca,idade,cliente_id) VALUES ('$id','$nome','$especie','$raca','$idade','$cliente_id')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>