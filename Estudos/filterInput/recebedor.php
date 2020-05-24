<?php
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    
    if($nome && $telefone && $email){

        $expiracao = time() + (8640*30);

        setcookie('nome', $nome, $expiracao);

        echo 'Nome: '.$nome.'<br>';
        echo 'Telefone: '.$telefone.'<br>';
        echo 'Email: '.$email.'<br>';
    }else {
        header('Location: index.php');
        exit;
    }
?>