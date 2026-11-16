<?php
include_once("../conexao.php");

$id = $_GET['id'] ?? '';

if (!ctype_digit((string)$id) || (int)$id < 1) {
    die("ID do cliente não informado ou inválido. Volte para a lista de clientes.");
}

$sql = "SELECT * FROM cliente WHERE id = ?";
$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$cliente = mysqli_fetch_assoc($result);

mysqli_stmt_close($stmt);

if (!$cliente) {
    die("Cliente não encontrado. Verifique se ele existe no banco de dados.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php
include_once("../menu.php");
?>

<div class="container">
    <h1>Editar Cliente</h1>
    <hr>

    <form action="atualizar.php" method="post">

        <input type="hidden" name="id"
               value="<?= htmlspecialchars($cliente['id']) ?>">

        <div class="form-group row">
            <label for="nome" class="col-4 col-form-label">Nome</label>
            <div class="col-8">
                <input id="nome" name="nome"
                       type="text" class="form-control"
                       value="<?= htmlspecialchars($cliente['nome']) ?>"
                       required>
            </div>
        </div>

        <div class="form-group row">
            <label for="endereco" class="col-4 col-form-label">Endereço</label>
            <div class="col-8">
                <input id="endereco" name="endereco"
                       type="text" class="form-control"
                       value="<?= htmlspecialchars($cliente['endereco']) ?>"
                       required>
            </div>
        </div>

        <div class="form-group row">
            <label for="telefone" class="col-4 col-form-label">Telefone</label>
            <div class="col-8">
                <input id="telefone" name="telefone"
                       type="text" class="form-control"
                       value="<?= htmlspecialchars($cliente['telefone']) ?>"
                       required>
            </div>
        </div>

        <div class="form-group row">
            <label for="sexo" class="col-4 col-form-label">Sexo</label>
            <div class="col-8">
                <select id="sexo" name="sexo"
                        class="custom-select" required>
                    <option value="F"
                        <?= $cliente['sexo'] == 'F' ? 'selected' : '' ?>>
                        Feminino
                    </option>
                    <option value="M"
                        <?= $cliente['sexo'] == 'M' ? 'selected' : '' ?>>
                        Masculino
                    </option>
                    <option value="NF"
                        <?= $cliente['sexo'] == 'NF' ? 'selected' : '' ?>>
                        Não Informado
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="cpf" class="col-4 col-form-label">CPF</label>
            <div class="col-8">
                <input id="cpf" name="cpf"
                       type="text" class="form-control"
                       value="<?= htmlspecialchars($cliente['cpf']) ?>"
                       required>
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">E-mail</label>
            <div class="col-8">
                <input id="email" name="email"
                       type="email" class="form-control"
                       value="<?= htmlspecialchars($cliente['email']) ?>"
                       required>
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-4 col-8">
                <button type="submit" class="btn btn-success">
                    Atualizar
                </button>

                <a href="listar.php" class="btn btn-secondary">
                    Voltar
                </a>
            </div>
        </div>

    </form>
</div>

</body>
</html>