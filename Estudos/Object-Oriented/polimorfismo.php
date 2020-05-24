<?php

    require 'classes/Conta.php';
    require 'classes/ContaPoupanca.php';
    require 'classes/ContaCorrente.php';
    

    $contas = array();
    $contas[]= new ContaCorrente('0032','CC.1234-56',100,500);
    $contas[]= new ContaPoupanca('0062','PP.1234-57',500);

    foreach($contas as $key=>$conta){
        print "Conta: {$conta->getInfo()}<br><hr>";
        print "Saldo : R$ {$conta->getSaldo()}<br>";

        $conta->depositar(200);

        print "Depósito de: R$ 200,00<br>";
        print "Saldo Atual: R$ {$conta->getSaldo()}<br>";

        if($conta->saque(700)){
            print "Retirada de : R$ {$conta->getQuantia()}<br>";
        }else{
            print "Retirada de : R$ {$conta->getQuantia()}(Não permitida)<br>";
        }
        print "Saldo Atual: R$ {$conta->getSaldo()}<br><br>";
    }