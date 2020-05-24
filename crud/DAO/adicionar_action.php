<?php
    require_once 'config.php';

    require_once 'dao/UsuarioDaoMysql.php';

    $usuarioDao = new UsuarioDaoMysql($pdo); 
    //recebe como parâmetro a variável $pdo criada em config.php


    $user = filter_input(INPUT_POST, 'usuario');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $pass = md5(filter_input(INPUT_POST, 'senha'));

    if($user && $email && $pass){

        if($usuarioDao->readByEmail($email) === false) {

            $novoUsuario = new Usuario();
            $novoUsuario->setNome($user);
            $novoUsuario->setEmail($email);
            $novoUsuario->setSenha($pass);

            $usuarioDao->create($novoUsuario);

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
        
