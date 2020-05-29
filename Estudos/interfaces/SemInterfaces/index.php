<?php

    require 'Orcamento.php';
    require 'Produto.php';

    $o = new Orcamento;
    $o->adiciona(new Produto('Máquina de Café',10,299),1);
    $o->adiciona(new Produto('Barbeador elétrico',10,170), 1);
    $o->adiciona(new Produto('Barra de chocolate',10,7),3);

    echo $o->calculadoraTotal();