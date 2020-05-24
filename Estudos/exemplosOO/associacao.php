<?php

$p1 = new Produto('Chocolate',100,10);
    $f1 = new fabricante('Chocolate Garoto','Feira de Santana','1222523254');

    $p1->setFabricante($f1);
    print 'A descrição é '.$p1->getDescricao().'<br>';
    print 'O fabricante é '.$p1->getFabricante()->getNome();
