<?php
    require_once 'config.php';

    $id = filter_input(INPUT_GET,'id');    

    if($id){

        $sql = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount() === 1){
            $sql = $pdo->prepare("DELETE FROM usuario WHERE id = :id");
            $sql->bindValue(':id',$id);
            $sql->execute();
        }
    }
    header('LOCATION: lista.php');
    exit;
   