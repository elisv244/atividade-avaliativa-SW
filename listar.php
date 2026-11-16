<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php
include_once("../menu.php");
include_once("../conexao.php");

$sql = "SELECT * FROM cliente";
$result = mysqli_query($conexao, $sql);

if (!$result) {
    die("Erro ao listar clientes: " . mysqli_error($conexao));
}
?>

<div class="container">
    <h1>Lista de Clientes</h1>
    <hr>

    <a href="adicionar.php" class="btn btn-success mb-3">
        <i class="fa fa-plus"></i> Adicionar Cliente
    </a>

    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Sexo</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php while ($cliente = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= htmlspecialchars($cliente['id']) ?></td>
                    <td><?= htmlspecialchars($cliente['nome']) ?></td>
                    <td><?= htmlspecialchars($cliente['endereco']) ?></td>
                    <td><?= htmlspecialchars($cliente['telefone']) ?></td>
                    <td><?= htmlspecialchars($cliente['sexo']) ?></td>
                    <td><?= htmlspecialchars($cliente['cpf']) ?></td>
                    <td><?= htmlspecialchars($cliente['email']) ?></td>

                    <td>
                        <a href="editar.php?id=<?= $cliente['id'] ?>"
                           class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"></i> Editar
                        </a>

                        <a href="remover.php?id=<?= $cliente['id'] ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Deseja realmente remover este cliente?')">
                            <i class="fa fa-trash"></i> Remover
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php if (mysqli_num_rows($result) == 0) { ?>
        <div class="alert alert-info">
            Nenhum cliente cadastrado.
        </div>
    <?php } ?>

</div>

</body>
</html>