<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Notas</title>
    </head>
    <body>
        <?php 
            require "materia.class.php";
            require "listarMaterias.php";
            session_start();
            echo "Seja bem vindo {$_SESSION['usuario']}!";
        ?>
        <div>
            <br>
            <form action='adicionarMateria.php' method='post'>
                <input type=submit name='novaMateria' value='Nova Materia'>
            </form>
            <form action='index.php' method='post'>
                <input type=submit name='logout' value='Logout'>
            </form>
            <br> 
        </div>
        <table>
            <tr>
                <th>Nome</th>
                <th>Faltas</th>
                <th>Trim.1</th>
                <th>Trim.2</th>
                <th>Trim.3</th>
            </tr>
            <?php
                if(isset($_POST['pesquisar']))
                {
                    listarMateria($_SESSION['usuario'], $_POST['pesquisar']);
                }
                else
                {
                    listarMateria($_SESSION['usuario'], "");
                }
            ?>
        </table>
        <br>
        <form action='menu.php' method='post'>
            <input type='text' name='pesquisar' placeholder='Pesquisar'>
            <input type='submit' value='Enviar'>
        </form>
    </body>
</html>