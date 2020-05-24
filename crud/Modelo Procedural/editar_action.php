<?php
    require_once 'config.php';

    $id = filter_input(INPUT_POST,'id');
    $user = filter_input(INPUT_POST, 'usuario');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $pass = md5(filter_input(INPUT_POST, 'senha'));

    if($user && $email && $pass){

        $sql = $pdo->prepare("UPDATE usuario SET nome = :user, email = :email, senha = :pass WHERE id = :id ");

        $sql->bindValue(':user',$user);
        $sql->bindValue(':email',$email);
        $sql->bindValue(':pass',$pass);
        $sql->bindValue(':id',$id);

        $sql->execute();

        header('LOCATION: lista.php');
        exit;

    }else{

        header('LOCATION: editar.php');
        exit;
    }