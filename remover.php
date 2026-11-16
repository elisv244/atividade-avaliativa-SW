<?php
// Pegar o ID do cliente
$id = $_GET['id'];

// Conectar ao banco de dados
include_once("../conexao.php");

// Excluir o cliente
$sql = "DELETE FROM cliente WHERE id = '$id'";

$result = mysqli_query($conexao, $sql);

// Verificar se a exclusão deu certo
if ($result) {
    header("Location: listar.php");
    exit;
} else {
    die("Erro ao remover cliente: " .
        mysqli_error($conexao));
}
?>