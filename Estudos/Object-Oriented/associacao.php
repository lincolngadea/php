<?php

    require_once 'classes/Fabricante.php';
    require_once 'classes/Produto.php';

    $p1 = new Produto('Chocolate',10,7);
    $f1 = new Fabricante('Chocolate Garoto','Centro','111214520');

    //associação

    $p1->setFabricante($f1);

    print 'A descrição é '.$p1->getDescricao().'<br>';
    print 'O fabricante é '.$p1->getFabricante()->getNome().'<br>';
    print 'O fabricante é '.$p1->getFabricante()->getEndereco().'<br>';
