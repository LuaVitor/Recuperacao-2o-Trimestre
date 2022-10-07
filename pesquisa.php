<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sistema de Notas</title>
    </head>
    <body>
        <h1>Pesquisa:</h1>
        <?php
            require "pesquisar.php";
            session_start();
        ?>
        <table>
            <tr>
                <th>Nome</th>
                <th>Faltas</th>
                <th>Trim.1</th>
                <th>Trim.2</th>
                <th>Trim.3</th>
            </tr>
            <?php
                pesquisar($_SESSION['usuario'], $_POST['pesquisar']);
            ?>
        </table>
        
    </body>
</html>