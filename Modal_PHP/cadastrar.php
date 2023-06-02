<?php 
require_once("config.php");
$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$pdo = novaConexao($banco="crud_modal_fatec");
$insert = $pdo->prepare("INSERT INTO pessoas (nome,email) values (?, ?)");
$insert->bindValue(1, $nome);
$insert->bindValue(2, $email);
$insert->execute();
header("Location:index.php");
?>