<?php
    function Login($usuario, $senha)
    {
        $listaDeUsuarios = json_decode(file_get_contents("usuarios.json"));
        foreach($listaDeUsuarios as $usuarios)
        {
            if($usuarios->Usuario == $usuario)
            {
                if($usuarios->Senha == $senha)
                {
                    session_start();
                    $_SESSION['usuario'] = $usuario;
                    header("Location: menu.php");
                }
                else
                {
                    return "Senha incorreta.";
                }
            }
        }
        return "Usuario incorreto.";
    }
?>