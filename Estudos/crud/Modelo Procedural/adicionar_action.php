<?php
    require_once 'config.php';

    $user = filter_input(INPUT_POST, 'usuario');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $pass = md5(filter_input(INPUT_POST, 'senha'));

    if($user && $email && $pass){

        $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
        $sql->bindValue(':email',$email);
        $sql->execute();

        if($sql->rowCount() === 0){

            $sql = $pdo->prepare("INSERT INTO usuario (nome,email,senha) VALUES (:nome,:email,:senha)");
            $sql->bindValue(':nome',$user);
            $sql->bindValue(':email',$email);
            $sql->bindValue(':senha',$pass);
            $sql->execute();

            header('LOCATION: lista.php');
            exit;        
        }else{
            header('LOCATION: adicionar.php');
            exit;
        }         
       
    }else{

        header('LOCATION: adicionar.php');
        exit;
    }