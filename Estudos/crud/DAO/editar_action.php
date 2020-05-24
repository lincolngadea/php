<?php
    require_once 'config.php';

    require_once 'dao/UsuarioDaoMysql.php';

    $usuarioDao = new UsuarioDaoMysql($pdo); 
    //recebe como parâmetro a variável $pdo criada em config.php

    $id = filter_input(INPUT_POST,'id');
    $user = filter_input(INPUT_POST, 'usuario');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $pass =  filter_input(INPUT_POST, 'senha');

    if($user && $email && $pass){

        $usuario = new Usuario();
        $usuario->setId($id);
        $usuario->setNome($user);
        $usuario->setEmail($email);
        $usuario->setSenha($pass);

        $usuarioDao->update($usuario);

        header('LOCATION: lista.php');
        exit;

    }else{

        header('LOCATION: editar.php?id=".$id');
        exit;
    }