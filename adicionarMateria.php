<!DOCTYPE html>

<html>
<head>
    <title>Sistema de Notas</title>
</head>

<body>
    <?php 
        require "materia.class.php";
        session_start();

        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $materia = new Materia($_SESSION['usuario'], $_POST['nome'], $_POST['faltas'], $_POST['nota_1'], $_POST['nota_2'], $_POST['nota_3']);
            echo "Adicionada a materia \"{$_POST['nome']}\".";
        }else{
            echo "Por favor, preencha pelo menos o nome da materia";
        }
    ?>

    <form action='adicionarMateria.php' method='post'>
        <p>*Nome do Materia: </p>
        <input type=text name='nome'><br>

        <p>Numero de Faltas: </p>
        <input type=number name='faltas'><br>

        <p>Nota do 1º Trimeste: </p>
        <input type=number name='nota_1'><br>

        <p>Nota do 2º Trimeste: </p>
        <input type=number name='nota_2'><br>

        <p>Nota do 3º Trimeste: </p>
        <input type=number name='nota_3'><br>

        <br><input type=submit name='adicionar' value='Adicionar Materia'>
    </form>

    <br><a href="menu.php">Voltar</a>

</body>
</html>