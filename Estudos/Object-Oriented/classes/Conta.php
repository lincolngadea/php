<?php

    abstract class Conta{ //inclui classe conta como abstrata para que não possa ser instanciada diretamente

        protected  $conta;
        protected  $agencia;       
        protected  $saldo = 0; //inicializei a variável como zero para registrar valor inicial no saldo
        protected  $quantia;

        public function __construct($agencia, $conta, $saldo){

            $this->agencia = $agencia;
            $this->conta = $conta;
            if($this->saldo > 0) {
                $this->saldo = $saldo;
            }
            
        }

        public function getInfo(){ //traz informações da conta

            return "Agência: {$this->agencia}, Conta: {$this->conta}";
        }

        public function depositar($quantia){

            if($quantia > 0 ) {
                $this->saldo += $quantia;
            }
            
        }

        public function getSaldo(){
            return number_format($this->saldo,2,',','');
        }
        public function getQuantia(){
            return number_format($this->quantia,2,',','');
        }
    }