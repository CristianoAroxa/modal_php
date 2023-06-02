<?php
function novaConexao($banco = null)
{
    $servidor = "127.0.0.1:3306";
    $usuario = "root";
    $senha = "";

    try {
        $pdo = new PDO("mysql:host=$servidor; dbname=" . $banco, $usuario, $senha);
    } catch (PDOException $erro) {
        echo "ERRO: " . $erro->getMessage();
        exit;
    }
    return $pdo;
}
?>