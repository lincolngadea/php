<?php 

  require_once 'associacao.php';

  $p1 = new Produto('Chocolate',10, 2);
  $p1->addCaracteristica('Cor','Branco');
  $p1->addCaracteristica('peso','2.6kg');
  $p1->addCaracteristica('Potência','20 wats RMS');

  print 'Produto: '.$p1->getDescricao().'<br>';

  foreach($p1->getCaracteristica() as $c){
      print 'Característica: '.$c->getNome() .' - '.$c->getValor().'<br>';
  }