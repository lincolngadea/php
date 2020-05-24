<?php

    require_once 'classes/Produto.php';
    require_once 'classes/Caracteristica.php';

    //criação do objeto
    $p1 = new Produto('Chocolate',10,7);

    //composição
    $p1->setCaracteristicas('Cor','Branco');
    $p1->setCaracteristicas('Peso','2.6kg');
    $p1->setCaracteristicas('Potência','20 Watts');

    print 'Produto: '.$p1->getDescricao().'<br>';

    foreach($p1->getCaracteristicas() as $c){
        print 'Característica: '.$c->getNome().' - '.$c->getValor().'<br>';
    }