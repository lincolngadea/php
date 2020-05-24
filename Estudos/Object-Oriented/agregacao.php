<?php
    require_once 'classes/Cesta.php';
    require_once 'classes/Produto.php';

    //Criação da Classe
    $c1 = new Cesta;

    //Agregação dos produtos

    $c1->setItens($p1 = new Produto('Chocolate',10,5));
    $c1->setItens($p2 = new Produto('Café',20,4));
    $c1->setItens($p3 = new Produto('Mostarda',5,3));

    foreach($c1->getItens() as $item){
        print 'Item: '.$item->getDescricao().'<br>';
    }