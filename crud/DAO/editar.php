<?php
    require_once 'config.php';

    require_once 'dao/UsuarioDaoMysql.php';

    $usuarioDao = new UsuarioDaoMysql($pdo); 
    //recebe como parâmetro a variável $pdo criada em config.php

    $usuario = false;
    $id = filter_input(INPUT_GET,'id');
    if($id){
        $usuario = $usuarioDao->readById($id);
    }

    if($usuario === false){
        header('LOCATION: lista.php');
        exit;
    }
?>

<form action="editar_action.php" method="POST">

    <input type="hidden" name="id" value="<?=$usuario->getId()?>">

    <label for="usuario">Usuário:</label>
    <input type="text" name="usuario" value = "<?=$usuario->getNome()?>"><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" value = "<?=$usuario->getEmail()?>"><br><br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha"><br><br>

    <input type="submit" value="Alterar">

</form>