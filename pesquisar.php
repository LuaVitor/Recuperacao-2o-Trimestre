<?php
    function pesquisar($usuario, $pesquisa)
    {
        $listaDeMaterias = json_decode(file_get_contents("materias.json"));
        foreach($listaDeMaterias as $materias)
        {
            if($materias->Aluno == $usuario && $materias->Nome == $pesquisa)
            {
                echo "<tr>";
                echo "<th>{$materias->Nome}</th>";
                echo "<th>{$materias->Faltas}</th>";
                echo "<th>{$materias->Nota_Trim_1}</th>";
                echo "<th>{$materias->Nota_Trim_2}</th>";
                echo "<th>{$materias->Nota_Trim_3}</th>";
                echo "</tr>";
            }
        }
    }       
?>