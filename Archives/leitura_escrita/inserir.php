<?php

    $lista =filter_input(INPUT_POST,'lista');

    if($lista){
        $file = 'lista.txt';
        if(file_exists($file)){
            $listas = file_get_contents('lista.txt');
            $listas .="\n".$lista;
            $listas = file_put_contents('lista.txt',$listas);
            header('LOCATION: index.php');
            exit;
        }else{
            file_put_contents('lista.txt',$lista);
            header('LOCATION: index.php');
            exit;
        }
        
    }