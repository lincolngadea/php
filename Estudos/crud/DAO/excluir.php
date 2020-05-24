<?php
    require_once 'config.php';
    require_once 'dao/UsuarioDaoMysql.php';

    $usuarioDao = new UsuarioDaoMysql($pdo); 
    //recebe como parâmetro a variável $pdo criada em config.php

    $id = filter_input(INPUT_GET,'id');    

    if($id){

        $usuarioDao->delete($id);
     
    }
    header('LOCATION: lista.php');
    exit;
   