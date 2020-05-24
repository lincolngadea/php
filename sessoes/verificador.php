<?php

    session_start();    

    if($_SESSION['logon']){
        header ("LOCATION: form.php");
    }else{
        $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST,'senha');

    if($email && $senha){
        if(($email =='lincoln@glinc.com.br') && ($senha==1234)){
            $_SESSION['logon']=true;
            header("LOCATION: form.php");
        }else{
            $_SESSION['aviso'] = 'Email ou Senha incorretos, repita a operação!';
            header("LOCATION: index.php");
            exit;
        }
    }
    }
    
