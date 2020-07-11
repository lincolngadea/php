<?php

require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'delete'){

    parse_str(file_get_contents('php://input'),$input);

    // $id = (!empty($input['id'])) ? $input['id'] : null; //opção para versões anteriores ao PHP 7.4

    $id = filter_var($input['id'] ?? null);//Apenas no PHP 7.4 em diante.
       
    $sql = $pdo->prepare('DELETE FROM notes WHERE id = :id');
    $sql->bindValue(':id',$id);
    $sql->execute();          

  
}else{
    $array['error'] = 'Método não permitido (Apenas DELETE)';
}

require('../return.php');