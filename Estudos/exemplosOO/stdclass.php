<?php 

    $produto = new stdClass;
    $produto->descricao = 'Chocolate';
    $produto->estoque = 10;
    $produto->preco = 8;

    $vetor1 = (array) $produto;
    print $vetor1['descricao'];
    print "<br>";

    $vetor2 = ['descricao'=>'Café','estoque'=>100,'preco'=>2];

    $produto2 = (object) $vetor2;
    print $produto2->descricao;

