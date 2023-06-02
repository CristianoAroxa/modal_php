<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Modal</title>
    <!--#01 O modal vai trabalhar com base no AJAX e dentro do Title vamos adicior 2 arquivos. Vamos Adicionar 01 aqruivo CSS e 01 Arquivo Java Script. Dentro do seu projeto adicione uma Pasta chamada Assets (Recursos) e dentro dela adicione 2 pastas 01 CSS e 01 JS, dentro da pasta CSS crie um arquivo estilo.css e na Pasta JS crie um arquivo script.js, terá que baixar o jquery.js mais atualizado direto do site jquery.com -->
    <link rel="stylesheet" href="assets/css/estilo.css" type="text/css" />
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</head>
<?php
require_once('config.php');
$conexao = novaConexao($banco = null);
$createSchema = "CREATE DATABASE IF NOT EXISTS crud_modal_fatec";
$resultado = $conexao->query($createSchema);
if (!$resultado) {
    echo "Erro ao Criar o Banco, erro: " . $conexao->error;
}

$createTable = "CREATE TABLE IF NOT EXISTS pessoas(
    id int auto_increment,
    nome varchar(50) not null,
    email varchar(100),
    primary key(id))";
$conexao = novaConexao($banco = "crud_modal_fatec");
$resultado = $conexao->query($createTable);
if (!$resultado) {
    echo "Erro ao Criar Tabela $banco, erro: " . $conexao->error;
}
?>

<body>
    <?php
    require("listar.php");
    ?>

    <div class="modal_bg">
        <div class="modal"> 
            
        </div>
    </div>
</body>

</html>