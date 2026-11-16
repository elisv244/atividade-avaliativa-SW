<?php
// Pegar os dados do formulário
$id = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];

// Conectar ao banco de dados
include_once("../conexao.php");

// Atualizar os dados do cliente
$sql = "UPDATE cliente SET
        nome = '$nome',
        endereco = '$endereco',
        telefone = '$telefone',
        sexo = '$sexo',
        cpf = '$cpf',
        email = '$email'
        WHERE id = '$id'";

$result = mysqli_query($conexao, $sql);

// Verificar se a atualização deu certo
if ($result) {
    header("Location: listar.php");
    exit;
} else {
    die("Erro ao atualizar cliente: " .
        mysqli_error($conexao));
}
?>