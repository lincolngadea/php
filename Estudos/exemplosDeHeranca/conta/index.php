<?php 
    require_once 'conta.php';
    require_once 'contaCorrente.php';
    require_once 'contaPoupanca.php';

    //Criando os objetos

    $contas = array();
    $contas[]= new ContaCorrente(6677,'CC.1234.56',100,500);
    $contas[]= new ContaPoupanga(6678, 'PP.1234.77', 100);

    //percorre as contas;

    foreach($contas as $key => $conta){
        print "Conta: {$conta->getInfo()} <br><br>";
        print "Saldo Atual: {$conta->getSaldo()}<br><br>";
        
        $conta->depositar(200);
        print "Depósito de: R$200,00 <br><br>";
        print "Saldo Atual: {$conta->getSaldo()}<br><br>";

        if($conta->retirar(700)){
            print "Retirada de: R$700,00 <br><br>";
        }else{
            print "Saldo Insuficiente!<br><br>";
        }
        print "Saldo Atual: {$conta->getSaldo()}<br><br>";
    }
    