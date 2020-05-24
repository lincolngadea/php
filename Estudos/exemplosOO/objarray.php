<?php 

    $produto = ['descricao'=>'Chocolate','estoque'=>100,'preco'=>2];

    $objeto = new stdClass;

    foreach($produto as $chave => $valor){
        $objeto->$chave = $valor;
    }

    print $objeto->descricao;