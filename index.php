<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Notas</title>
    </head>
    <body>
        <h1>Sistema de Notas</h1>
        <?php
            require "login.php";
            session_start();
            session_destroy();
            if(isset($_POST['usuario']))
            {
                $mensagem = Login($_POST['usuario'], $_POST['senha']);
                echo ($mensagem);
            }
        ?>
        <form action='index.php' method='post'>
            <p>Usuario:</p>
            <input type=text name='usuario'>
            <br>
            <p>Senha:</p>
            <input type=password name='senha'>
            <br>
            <br><input type=submit name='login' value='Login'>
        </form>
        <br>
        <a href="cadastro.php">Cadastrar</a>    
    </body>
</html>