<?php
    require_once 'config.php';

    require_once 'dao/UsuarioDaoMysql.php';

    $usuarioDao = new UsuarioDaoMysql($pdo); //recebe como parâmetro a variável $pdo criada em config.php

    $lista= $usuarioDao->readAll();
   
?>


<a href="adicionar.php">ADICIONAR USUÁRIO</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÃO</th>
    </tr>
    <?php foreach($lista as $usuario):?>
    <tr>
        <td><?=$usuario->getId();?></td>
        <td><?=$usuario->getNome();?></td>
        <td><?=$usuario->getEmail();?></td>   
        <td>
        <a href="editar.php?id=<?=$usuario->getId();?>">Editar</a> - <a href="excluir.php?id=<?=$usuario->getId();?>" onclick="return confirm('Tem Certeza que deseja Excluir?')">Excluir</a>
    <tr>    
    <?php endforeach ?>
</table>