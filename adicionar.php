<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>

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
    <h1>Cadastro de Clientes</h1>
    <hr>

    <form action="inserir.php" method="post">

        <!-- Nome -->
        <div class="form-group row">
            <label for="nome" class="col-4 col-form-label">Nome</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card-o"></i>
                        </div>
                    </div>
                    <input id="nome" name="nome"
                           placeholder="Nome completo"
                           type="text" class="form-control"
                           required>
                </div>
            </div>
        </div>

        <!-- Endereço -->
        <div class="form-group row">
            <label for="endereco" class="col-4 col-form-label">Endereço</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-map-marker"></i>
                        </div>
                    </div>
                    <input id="endereco" name="endereco"
                           placeholder="Digite seu endereço"
                           type="text" class="form-control"
                           required>
                </div>
            </div>
        </div>

        <!-- Telefone -->
        <div class="form-group row">
            <label for="telefone" class="col-4 col-form-label">Telefone</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-phone"></i>
                        </div>
                    </div>
                    <input id="telefone" name="telefone"
                           placeholder="(xx) XXXXX-XXXX"
                           type="text" class="form-control"
                           required>
                </div>
            </div>
        </div>

        <!-- Sexo -->
        <div class="form-group row">
            <label for="sexo" class="col-4 col-form-label">Sexo</label>
            <div class="col-8">
                <select id="sexo" name="sexo"
                        class="custom-select" required>
                    <option value="">Selecione</option>
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                    <option value="NF">Não informado</option>
                </select>
            </div>
        </div>

        <!-- CPF -->
        <div class="form-group row">
            <label for="cpf" class="col-4 col-form-label">CPF</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                    </div>
                    <input id="cpf" name="cpf"
                           placeholder="XXX.XXX.XXX-XX"
                           type="text" class="form-control"
                           required>
                </div>
            </div>
        </div>

        <!-- E-mail -->
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">E-mail</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <input id="email" name="email"
                           placeholder="seuemail@exemplo.com"
                           type="email" class="form-control"
                           required>
                </div>
            </div>
        </div>

        <!-- Botões -->
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit"
                        class="btn btn-success">
                    Adicionar
                </button>

                <button name="apagar" type="reset"
                        class="btn btn-warning">
                    Limpar
                </button>
            </div>
        </div>

    </form>
</div>

</body>
</html>