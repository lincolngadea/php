<?php

    require_once 'classes.php';

    $c1 = new Cesta;

    //agregação dos produtos

    $c1->addItens($p1 = new Produto('Chocolate',100,2.5));
    $c1->addItens($p2 = new Produto('Café', 200, 1.5));
    $c1->addItens($p3 = new Produto('Mostarda', 150, 1.2));

    foreach($c1->getItens() as $item){
        print 'Item: '.$item->getDescricao().' - ';
        print 'Time: '.$c1->getTime().'<br>';   
        
    }