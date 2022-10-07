<?php
    function listarMaterias($usuario)
    {
        $listaDeMaterias = json_decode(file_get_contents("materias.json"));
        for($i = 0; $i < count($listaDeMaterias); $i++)
        {
            if($listaDeMaterias[$i]->Aluno == $_SESSION['usuario'])
            {
                echo "<tr>";
                echo "<th>{$listaDeMaterias[$i]->Nome}</th>";
                echo "<th>{$listaDeMaterias[$i]->Faltas}</th>";
                echo "<th>{$listaDeMaterias[$i]->Nota_Trim_1}</th>";
                echo "<th>{$listaDeMaterias[$i]->Nota_Trim_2}</th>";
                echo "<th>{$listaDeMaterias[$i]->Nota_Trim_3}</th>";
                echo "</tr>";
            }
        }
    } 
?>