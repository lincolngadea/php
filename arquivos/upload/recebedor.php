<?php

    session_start();

 //print_r($_FILES);//verifica a estrutura do files

  //  $nome = $_FILES['arquivo']['name']; //pega o nome do arquivo enviado
  
    if(isset($_FILES['arquivo']) && in_array($_FILES['arquivo']['type'], array('image/jpg','image/jpeg'))){
        $nome = md5(time().rand(0,1000)).'.jpg';
        move_uploaded_file($_FILES['arquivo']['tmp_name'],'arquivos/'.$nome);
    }else if(in_array($_FILES['arquivo']['type'], array('image/png'))) {
        $nome = md5(time().rand(0,1000)).'.png';  
        move_uploaded_file($_FILES['arquivo']['tmp_name'],'arquivos/'.$nome);
    }else{
        $_SESSION['upload']='O Tipo do arquivo não é permitido!';
        header('LOCATION: index.php');
        exit;
    }  
    if (file_exists('arquivos/'.$nome)){   
        $_SESSION['upload'] = 'Upload Realizado com Sucesso';
        header('LOCATION: index.php');
        exit;
    }else{
        $_SESSION['upload']='O Upload não foi realizado com sucesso';
    }   