<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem CRUD</title>
</head>

<body>
    <h1>Listagem de Cadastros</h1>
    <hr>
    <table>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Ações</td>
        </tr>
        <?php
        require_once("config.php");
        $pdo = novaConexao($banco = "crud_modal_fatec");
        $listar = $pdo->query("SELECT * FROM pessoas");
        while ($mostrar = $listar->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td>
                    <?php echo $mostrar['id']; ?>
                </td>
                <td>
                    <?php echo $mostrar['nome']; ?>
                </td>
                <td>
                    <?php echo $mostrar['email']; ?>             
                </td>
                <td>
                <a href="editar.php?id=<?php echo $mostrar['id']; ?>" class="modal_ajax">Editar</a>
                <a href="excluir.php?op=excluir&id=<?php echo $mostrar['id']; ?>">Excluir</a>
                </td>
            <?php } ?>
        </tr>           
    </table>
    <hr>
    <a href="adicionar.php" class="modal_ajax">Novo Cadastro</a>    
</body>

</html>