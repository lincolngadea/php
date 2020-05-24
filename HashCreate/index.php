<?php

    //gerando hash

    $senha = '1234';
    $hash = password_hash($senha,PASSWORD_DEFAULT);

    echo 'SENHA DIGITADA:'.$senha.'<br>';
    echo 'SENHA GERADA:'.$hash.'<br>';

    //Verificando se a senha está ok

    $senhaDigitada = '1234';

    if(password_verify($senhaDigitada,$hash)){
        echo 'SENHA CORRETA';
    }else{
        echo 'SENHA INCORRETA';
    }