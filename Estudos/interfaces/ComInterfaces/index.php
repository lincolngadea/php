<?php

    require 'Orcamento.php';
    require 'OrcavelInterface.php';
    require 'Produto.php';
    require 'Servico.php';

    $o = new Orcamento;

    $o->adiciona(new Produto('Máquina de Café',10,299),1);
    $o->adiciona(new Produto('Barbeador elétrico',10,170), 1);
    $o->adiciona(new Produto('Barra de chocolate',10,7),3);

    $o->adiciona(new Servico('Corte de grama',20),1);
    $o->adiciona(new Servico('Corte de Barba', 20),1);
    $o->adiciona(new Servico('Limpeza do Apartamento', 50),1);

    echo $o->calculadoraTotal();