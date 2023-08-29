<?php
    session_start();
    $pdo = null;
    try {
        $pdo = new PDO("mysql:dbname=lista_telefonica;host:localhost", "root","");
    } catch (PDOException $th) {
        echo "Erro:".$th->getMessage();
    }
    $menssagem = array();
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
        
        $usuario = $_POST["username"];
        $senha = $_POST["password"];

        $sql = "SELECT * FROM usuario WHERE usuario = :usuario AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':usuario', $usuario);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
        if(!empty($usuario)){
           $menssagem["sucesso"] = 1;
           $_SESSION["token"] = $usuario["id"];
           echo json_encode($menssagem);
        }else {
            $menssagem["sucesso"] = 0;
            echo json_encode($menssagem);
        }
    }else {
        $menssagem["sucesso"] = 0;
        echo json_encode($menssagem);
    }
    