<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validar.php" method="post">
        Usuário:<input name="usuario"><br>
        Senha:<input name="senha" type="password"><br>
        <button type="submit">Entrar</button>
        <button type="reset">Limpar</button>
    </form>
    <footer>
        <p>Todos os direitos reservados &copy; <?php echo date ("Y");?></p>
    </footer>
    <!-- http://localhost/login/index.php -->
</body>
</html>