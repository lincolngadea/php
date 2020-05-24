<?php

    class ContaCorrente extends Conta{

        protected $limite;

        public function __construct($agencia, $conta, $saldo, $limite){

            parent::__construct($agencia,$conta,$saldo);

            $this->limite = $limite;
        }

        public function saque($quantia){
            if(($this->saldo + $this->limite)>= $quantia){
                $this->saldo -= $quantia;
                $this->quantia = $quantia;
            }
            else{
                $this->quantia = $quantia;
                return false;
            }
            return true;
        }
    }