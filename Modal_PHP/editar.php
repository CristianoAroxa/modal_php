<?php
require_once("config.php");
$id = $_GET['id'];
$pdo = novaConexao($banco = "crud_modal_fatec");

$buscarid = $pdo->prepare("SELECT * FROM pessoas WHERE id=?");
$buscarid->bindValue(1, $id);
$buscarid->execute();

$mostrar = $buscarid->fetch();  
$id = $mostrar['id'];
$nome = $mostrar['nome'];
$email = $mostrar['email'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Dados</title>
</head>

<body>
    <h1> Editar Dados </h1>
    <hr>
    <form action="salvar.php?id='<?php $id ?>'&nome='txtnome'&email='txtemail' method='get'">
        <label>ID: </label>
        <input type="text" value="<?php echo $id ?>" name="txtid">
        <br>
        <label>Nome: </label>
        <input type="text" value="<?php echo $nome ?>" name="txtnome" >
        <br>
        <label>Email: </label>
        <input type="text" value="<?php echo $email ?>" name="txtemail">
        <br>
        <input type="submit" name="btnSalvar" value="Salvar">  | <a href="index.php">Voltar</a>    

    </form>
</body>

</html>