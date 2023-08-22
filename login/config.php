<?php


    if(!empty($_POST["username"]) && !empty($_POST["password"])){

        $usuario = $_POST["username"];
        $senha = $_POST["password"];
    
        if(!empty($usuario) && !empty($senha)) {
            echo "Sucesso!";
        }else {
            echo "Vazio";
        }
    }
    