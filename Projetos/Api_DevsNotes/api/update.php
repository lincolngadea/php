<?php

require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'put'){

    parse_str(file_get_contents('php://input'),$input);

    // $id = (!empty($input['id'])) ? $input['id'] : null; //opção para versões anteriores ao PHP 7.4

    $id = filter_var($input['id'] ?? null);//Apenas no PHP 7.4 em diante.
    $title =filter_var($input['title'] ?? null);
    $body = filter_var($input['body'] ?? null);

    if($id && $title && $body){

        $sql = $pdo->prepare('SELECT * FROM notes WHERE id = :id');
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount() > 0){

            $sql = $pdo->prepare('UPDATE notes SET title = :title, body= :body WHERE id = :id');
            $sql->bindValue(':id',$id);
            $sql->bindValue(':title', $title);
            $sql->bindValue(':body', $body);
            $sql->execute();

            $array['result'] =[
                'id' => $id,
                'title' => $title,
                'body' => $body
            ];

        }else{
            $array['error'] = 'ID inexistente';
        }

    }else{
        $array['error'] = 'Os dados não foram enviados';
    }
}else{
    $array['error'] = 'Método não permitido (Apenas PUT)';
}

require('../return.php');