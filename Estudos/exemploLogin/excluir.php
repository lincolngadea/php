<?php 

session_start();
require 'config.php';

if(isset($_GET['id']) && !empty($_GET['id'])){
    $dados = addslashes($_GET['id']);

    $sql = "DELETE FROM usuario WHERE id = :dados";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':dados', $dados);
    $sql->execute();

    echo 'Excluido com Sucesso';
    
    header('Location: listardados.php');
}else{
    header('Location: index.php');
}

?>