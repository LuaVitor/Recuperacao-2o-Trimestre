<!DOCTYPE html>

<html>
<head>
    <title>Sistema de Notas</title>
</head>

<body>
    <?php 
        require "usuario.class.php";

        if(isset($_POST['nome'])){
            $usuario = new Usuario($_POST['nome'], $_POST['usuario'], $_POST['email'], $_POST['senha']);
            echo ($usuario->mensagem); 
        }
    ?>

    <form action='cadastro.php' method='post'>
        <p>Nome do Usuario: </p>
        <input type=text name='nome'><br>

        <p>Nome de Login: </p>
        <input type=text name='usuario'><br>

        <p>Email: </p>
        <input type=text name='email'><br>

        <p>Senha: </p>
        <input type=password name='senha'><br>

        <br><input type=submit name='cadastro' value='Cadastrar'>
    </form>

    <br><a href="index.php">Voltar</a>

</body>
</html>