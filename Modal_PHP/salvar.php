<?php 
    require_once("config.php");
    $id=$_GET['txtid'];
    $nome=$_GET['txtnome'];
    $email=$_GET['txtemail'];
    
    $pdo=novaConexao($banco='crud_modal_fatec');
    $up=$pdo->prepare("UPDATE pessoas SET nome=?, email=? WHERE id=?");
    $up->bindValue(1,$nome);
    $up->bindValue(2,$email);
    $up->bindValue(3,$id);
    $up->execute();

    header("Location:index.php");
?>