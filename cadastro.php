<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <form method="post" action="salvar.php">
        Nome:<input name="nome" required> <br>
        Cidade:<input name="cidade" required> <br>
        Telefone:<input name="telefone" required><br>
        E-mail:<input name="email" required><br>
        RG:<input name="rg" required><br>
        CPF:<input name="cpf" required><br>
        Bairro:<input name="bairro" required><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>