<?php

    try {
        $pdo = new PDO("mysql:dbname=projeto_comentarios;host=localhost","root","");
    } catch (PDOException $th) {
        echo 'Erro na Conexão com o Banco. '.$th->getMessage();
    }   

?>