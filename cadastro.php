<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papelaria | Cadastro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="cadastrarusuario.php" method="post">
        <label>Nome:</label><br>
        <input type="text" name="txtnome"><br><br>
        <label>Endereço:</label><br>
        <input type="text" name="txtendereco"><br><br>
        <label>CEP:</label><br>
        <input type="text" name="txtcep"><br><br>
        <label>Telefone:</label><br>
        <input type="tel" name="telefone"><br><br>
        <label>Email:</label><br>
        <input type="email" name="txtemail" placeholder="exemplo@email.com"><br><br>
        <label>Senha:</label><br>
        <input type="password" name="txtsenha"><br><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
        <br><br>
    </form>
    <ul>
        <li>
            <a href="index.html" class="opcao">Página Inicial</a><br>
        </li>

        <li>
            <a href="login.html" class="opcao">Login</a>
        </li>
    </ul>
</body>
</html>