<?php 
require_once("config.php");
$id=$_GET['id'];
$pdo=novaConexao(($banco="crud_modal_fatec"));
$del=$pdo->prepare("DELETE FROM pessoas WHERE id=?");
$del->bindValue(1,$id);
$del->execute();
header("Location:index.php");
?>