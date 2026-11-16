<?php
// Pegar os dados do formulário
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];

// Conectar ao banco de dados
include_once("../conexao.php");

// Inserir os dados na tabela cliente
$sql = "INSERT INTO cliente
        (nome, endereco, telefone, sexo, cpf, email)
        VALUES
        ('$nome', '$endereco', '$telefone', '$sexo', '$cpf', '$email')";

$result = mysqli_query($conexao, $sql);

// Verificar se foi cadastrado
if ($result) {
    header("Location: listar.php");
    exit;
} else {
    die("Erro ao inserir cliente: " . mysqli_error($conexao));
}
?>